<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\crudcontrollers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

//crud route
Route::get('index',[crudcontrollers::class, 'index'])->name('index');
Route::POST('create',[crudcontrollers::class, 'create'])->name('create');
Route::get('list', [crudcontrollers::class,'list'])->name('list');
Route::delete('datadelete/{id}', [crudcontrollers::class,'datadelete'])->name('datadelete');
Route::get('dataupdate/{id}', [crudcontrollers::class,'dataupdate'])->name('dataupdate');
Route::patch('data/{id}', [crudcontrollers::class,'data'])->name('data');
Route::post('api/fetch-states', [crudcontrollers::class, 'fetchState']);
Route::post('api/fetch-cities', [crudcontrollers::class, 'fetchCity']);

// Download pdf file And excelfile Route
// Route::get('download-pdf', function () {$data = ['title' => 'Welcome to Laravel 10 PDF Generation!'];$pdf = Pdf::loadView('pdf-view', $data);return $pdf->download('sample.pdf');});
Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');
Route::get('download-pdf', [crudcontrollers::class, 'downloadPDF'])->name('download-pdf');
Route::get('/users-import', [UserController::class, 'import'])->name('import');
Route::get('export', [UserController::class, 'export'])->name('export');

//Auth Route
Route::get('/',[crudcontrollers::class, 'login'])->name('login');
Route::get('ragister',[crudcontrollers::class, 'ragister'])->name('ragister');
Route::POST('createuser',[crudcontrollers::class, 'createuser'])->name('createuser');
Route::post('user_login', [crudcontrollers::class, 'user_login'])->name('user_login');
