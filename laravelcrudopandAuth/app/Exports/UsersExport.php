<?php

namespace App\Exports;

use App\Models\crudmodel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return crudmodel::select("name", "number", "email", "citys", "gender")->get();
    }
}
