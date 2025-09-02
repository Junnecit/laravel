<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class facultyModel extends Model
{
    protected $table = 't_faculty';
    protected $fillable = [
        'department_id',
        'first_name',
        'middle_name',
        'last_name',
        'department',
        'email',
        'phone_number',
    ];

}