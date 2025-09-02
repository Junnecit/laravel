<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = 't_students';
    protected $fillable = [
        'student_id',
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'date_of_birth',
        'phone_number'
    ];

}
