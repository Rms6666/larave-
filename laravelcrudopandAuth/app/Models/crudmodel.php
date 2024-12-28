<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crudmodel extends Model
{
    use HasFactory;
    protected $table = 'datatables';
    protected $fillable = [
        'name',
        'number',
        'email',
        'citys',
        'hobby',
        'gender',
        'image',
        'country',
        'state',
        'city',
    ];
}
