<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $table = 'temperatures';
    protected $fillable = ['admission_token', 'employee_number', 'temperature', 'center'];
}
