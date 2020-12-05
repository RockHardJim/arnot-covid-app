<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    //

    protected $table = 'tokens';
    protected $fillable = ['admission_token', 'employee_token', 'state', 'signature', 'scores'];
}
