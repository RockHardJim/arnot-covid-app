<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function prevention(){
        return view('site.prevention');
    }

    public function login(){
        return view('site.auth.login');
    }

    public function register(){
        return view('site.auth.register');
    }

    public function tracker(){
        return view('site.default.tracker');
    }

    public function guidelines(){
        return view('site.default.guidelines');
    }

    public function dashboard(){
        if(Auth::user()->role == 'employee'){
            return view('site.dashboard.employee.index');
        }elseif(Auth::user()->role == 'manager'){

        }elseif(Auth::user()->role == 'admin'){

        }
    }
}
