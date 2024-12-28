<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row['name'],
            'number'    => $row['number'],
            'email'    => $row['email'],
            'citys'    => $row['citys'],
            'gender'    => $row['gender'],
        ]);
    }
    public function rules(): array
    {
        return [
            'name'  => 'required',
            'number' => 'required',
            'email'  => 'required',
            'citys' => 'required',
            'gender' => 'required',
        ];
    }
}
