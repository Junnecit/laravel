<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    use HasFactory;

    protected $table = 't_subjects'; // change if your table name is different

    protected $fillable = [
        'subject_code',
        'subject_title',
        'subject_description',
        'subject_lab_unit',
        'subject_lec_unit',
        'subject_total_unit',
    ];
}
