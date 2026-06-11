<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'course',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}