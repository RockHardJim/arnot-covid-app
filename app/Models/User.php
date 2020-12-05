<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'vehicle_registration', 'surname', 'email', 'password', 'employee_code', 'id_number', 'cellphone'
    ];
    //

    protected $hidden = [
        'password', 'remember_token',
    ];
}
