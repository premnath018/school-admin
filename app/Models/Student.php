<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'class',
        'gender',
        'religion',
        'community',
        'mother_tongue',
        'father_name',
        'mother_name',
        'parent_number',
    ];

}
