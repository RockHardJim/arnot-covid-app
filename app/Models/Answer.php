<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['admission_token', 'date', 'question', 'employee_code', 'answer', 'score'];
}
