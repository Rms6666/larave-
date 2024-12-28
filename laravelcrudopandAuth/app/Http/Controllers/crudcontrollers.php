<?php

namespace App\Http\Controllers;
use App\Models\crudmodel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Barryvdh\DomPDF\Facade\Pdf;

class crudcontrollers extends Controller
{
    public function index(){
        $data = Country::get(["name", "id"]);
        return view("front/index", compact('data'));
    }

    public function fetchState(Request $request): JsonResponse
    {
        $data['states'] = State::where("country_id", $request->country_id)
                                ->get(["name", "id"]);

        return response()->json($data);
    }
    public function fetchCity(Request $request): JsonResponse
    {
        $data['cities'] = City::where("state_id", $request->state_id)
                                    ->get(["name", "id"]);

        return response()->json($data);
    }

    public function downloadPDF()
    {
        $data['data'] = crudmodel::all();
        $pdf = Pdf::loadView('front/list', $data)->setPaper('a3');
        return $pdf->download('sample.pdf');
    }

    public function create(Request $request): RedirectResponse
    {
        $request ->validate([
        "name"=> "required",
        "number"=> "required",
        "email"=> "required",
        "citys"=> "required",
        "hobby"=> "required",
        "gender"=> "required",
        "country"=> "required",
        "state"=> "required",
        "city"=> "required",
        ],[
            'name.required' => 'Name field is required.',
            'number.required' => 'number field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.',
            'citys.required' => 'citys field is required.',
            'hobby.required' => 'Please Select your Hobbys.',
            'gender.required' => 'Please Select Your gender.',
        ]);

        $insert = new crudmodel();
        $insert->name = $request->input('name');
        $insert->number = $request->input('number');
        $insert->email = $request->input('email');
        $insert->citys = $request->input('citys');
        $insert->gender = $request->input('gender');
        $insert->country = $request->input('country');
        $insert->state = $request->input('state');
        $insert->city = $request->input('city');
        $insert->hobby = implode(',',$request->input('hobby'));
        if ($file = $request->file('image')) {
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('userimages');
            $file->move($destinationPath, $fileName);
            $insert->image = $fileName;
        }
        $insert->save();
        return redirect()->route('list')
                         ->with('success','Data Insert  Successfully.');
    }

    public function datadelete($id){
        $delete = crudmodel::find($id);
        $delete->delete();
        return redirect()->route('list')->with('Delete','Data Delete Successfully.');
    }

     public function dataupdate($id)
    {
        $CountryData = Country::get(["name", "id"]);
        $stateData = State::get(["name", "id"]);
        $cityData = City::get(["name", "id"]);
        $data = crudmodel::find($id);
        $selectedCountryId = $data->country;
        $selectedStateId = $data->state;
        $selectedCityId = $data->city;

        return view('front/edit', compact('data','CountryData','selectedStateId','selectedCityId','stateData','selectedCountryId','cityData'));
    }

    public function data(request $request, $id){
          $update = $request->validate([
          'name'=> 'required',
          'number'=> 'required',
          'email'=> 'required',
          'citys'=> 'required',
          'hobby'=> 'required',
          'gender'=> 'required',
          "country"=> "required",
          "state"=> "required",
          "city"=> "required",
          ],[
            'name.required' => 'Name field is required.',
            'number.required' => 'number field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.',
            'citys.required' => 'citys field is required.',
            'hobby.required' => 'Please Select your Hobbys.',
            'gender.required' => 'Please Select Your gender.',
        ]);

          $updated = crudmodel::find($id);
          $updated->name = $update['name'];
          $updated->number = $update['number'];
          $updated->email = $update['email'];
          $updated->citys = $update['citys'];
          $updated->gender = $update['gender'];
          $updated->country = $request->input('country');
          $updated->state = $request->input('state');
          $updated->city = $request->input('city');
          $updated->hobby = implode(',',$request->input('hobby'));

          if ($request->hasFile('image')) {

             $destination = 'userimages/' . $updated->image;
             if (File::exists($destination)) {
                 File::delete($destination);
             }

             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $filename = time(). '.' . $extension;
             $file->move('userimages/', $filename);

             $updated->image = $filename;
         } else {
             $updated->image = $updated->image;
         }
         $updated->save();
         return redirect()->route('list')->with('Update','Data Update Successfully.');
    }

    public function list(Request $request)
    {
        $search = $request->input('search');
        $query = crudmodel::query();

        if ($search) {
            $query->where('name', 'like', "%$search%")
                  ->orWhere('number', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('citys', 'like', "%$search%")
                  ->orWhere('gender', 'like', "%$search%")
                  ->orWhere('hobby', 'like', "%$search%");
        }

        $data = DB::table('datatables')
            ->leftJoin('countries', 'datatables.country', '=', 'countries.id')
            ->leftJoin('states', 'datatables.state', '=', 'states.id')
            ->leftJoin('cities', 'datatables.city', '=', 'cities.id')
            ->select(
                'datatables.*',
                'countries.name as country_name',
                'states.name as state_name',
                'cities.name as city_name'
            )
            ->when($search, function ($query, $search) {
                return $query->where(function ($query) use ($search) {
                    $query->where('datatables.name', 'like', "%$search%")
                          ->orWhere('datatables.number', 'like', "%$search%")
                          ->orWhere('datatables.email', 'like', "%$search%")
                          ->orWhere('datatables.citys', 'like', "%$search%")
                          ->orWhere('datatables.gender', 'like', "%$search%")
                          ->orWhere('datatables.hobby', 'like', "%$search%");
                });
            })
            ->orderBy('datatables.id', 'desc')
            ->paginate(10);

        return view('front/list', compact('data'))->with('success', 'Product created successfully.');
    }

    public function login(){
        return view("front/login");
    }

    public function ragister(){
        return view("front/ragister");
    }

    public function user_login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ],[
        'email.required' => 'Email field is required.',
        'email.email' => 'Email field must be email address.',
        'password.required' => 'password field is required.',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $users = Auth::user();
        session()->put('userid', $users->id);
        session()->flash('msg', 'Signed in');
        return redirect()->route('index')->with('userlogin','Login Successfully.');
    }
    session()->flash('emsg', 'Login details are not valid');
    return redirect()->back()->withInput();
}

    public function createuser(Request $request): RedirectResponse
    {
        $request ->validate([
        "name"=> "required",
        "email"=> "required",
        "password"=> "required",
        ],[
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email field must be email address.',
            'password.required' => 'password field is required.',
        ]);

        $insert = new User();
        $insert->name = $request->input('name');
        $insert->email = $request->input('email');
        $insert->password = $request->input('password');

        $insert->save();
        return redirect()->route('login')
                        ->with('success','Data Insert  Successfully.');
    }
}

