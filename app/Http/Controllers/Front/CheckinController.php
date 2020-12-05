<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;

class CheckinController extends Controller
{
    //
    private $answer;

    public function __construct()
    {
        $this->answer = new Answer();
    }

    public function checkin($step){
        return view('site.dashboard.employee.checkin')->with('step', $step);
    }

    public function checkedin($token){
        if($this->answer::where('admission_token', $token)->get()){
            $data = $this->answer::where('admission_token', $token)->get();
            $score = 0;
            foreach($data as $daa){
                $score += $daa->score;
                }


            return view('site.dashboard.employee.checkedin', ['scores' => $score])->with('data', $data);
        }else{
            return redirect(route('dashboard'));
        }
    }

    public function gate($token){

    }
}
