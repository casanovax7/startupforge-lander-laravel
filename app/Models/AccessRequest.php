<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'school',
        'use_case',
    ];
}
