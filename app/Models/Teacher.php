<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'date_of_birth', 'address', 'subject_taught', 'class_assigned_id'
    ];

    public function classAssigned()
    {
       // return $this->belongsTo(Class::class, 'class_assigned_id');
    }
}
