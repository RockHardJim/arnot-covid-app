<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Validator, Auth};
use Illuminate\Support\Str;
use App\Models\{Answer, Temperature, Token};
use App\Helpers\SMS;

class QuizController extends Controller
{
    //
    private $score;
    private $answer;
    private $token;

    public function __construct()
    {
        $this->score = 0;
        $this->answer = new Answer();
        $this->token = new Token();
    }

    public function answer(Request $request){
        $admission_token = md5(Auth::user()->email . Str::random(17));
        $date = date("Y-m-d");

        try {
            if ($request->question_1 !== 'No') {
                foreach ($request->question_1 as $Q1) {
                        $this->score += 20;
                        $this->answer::create([
                            'admission_token' => $admission_token,
                            'date' => $date,
                            'question' => 'question_1',
                            'employee_code' => Auth::user()->employee_code,
                            'answer' => $Q1,
                            'score' => $this->score
                        ]);
                    }
                }else{
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_1',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_1,
                    'score' => 20
                ]);
            }

            if ($request->question_2 == 'Yes') {
                $this->score = 100;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_2',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_2,
                    'score' => $this->score
                ]);
            } else {
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_2',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_2,
                    'score' => $this->score
                ]);
            }
            if($request->question_3 == 'Yes'){
                $this->score = 130;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_3',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_3,
                    'score' => $this->score
                ]);
            }else{
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_3',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_3,
                    'score' => $this->score
                ]);
            }

            if($request->question_3 == 'Yes'){
                foreach ($request->question_4 as $Q4) {
                        $this->score = 70;
                        $this->answer::create([
                            'admission_token' => $admission_token,
                            'date' => $date,
                            'question' => 'question_4',
                            'employee_code' => Auth::user()->employee_code,
                            'answer' => $Q4,
                            'score' => $this->score
                        ]);
                }
            }else{
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_4',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => 'No',
                    'score' => '20'
                ]);
            }


            if($request->question_5 == 'Yes'){
                $this->score = 80;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_5',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_5,
                    'score' => $this->score
                ]);
            }else{
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_5',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_5,
                    'score' => $this->score
                ]);
            }
            if($request->question_6 == 'Yes'){
                $this->score = 90;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_6',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_6,
                    'score' => $this->score
                ]);
            }else{
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_6',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_6,
                    'score' => $this->score
                ]);
            }
            if($request->question_7 == 'Yes'){
                $this->score = 50;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_7',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_7,
                    'score' => $this->score
                ]);
            }else{
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_7',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_7,
                    'score' => $this->score
                ]);
            }
            if($request->question_8 == 'Yes'){
                $this->score = 90;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_8',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_8,
                    'score' => $this->score
                ]);
            }else{
                $this->score = 10;
                $this->answer::create([
                    'admission_token' => $admission_token,
                    'date' => $date,
                    'question' => 'question_8',
                    'employee_code' => Auth::user()->employee_code,
                    'answer' => $request->question_8,
                    'score' => $this->score
                ]);
            }

            $score = 0;
            $scores = $this->answer::where('admission_token', $admission_token)->get();
            foreach($scores as $b){
                $score += $b->score;
            }

            $this->create_token($admission_token, $score);
            return response()->json([
                'status' => 'success',
                'token' => $admission_token,
                'message' => 'Hi, we have successfully recorded your response please wait while we direct you to your score before receiving your access token'
            ]);

        }catch(\Exception $e){
            return response()->json([
                'status' => 'failed',
                'message' => 'Hi, we have encountered the following error '. $e->getMessage() .' while processing your request please contact your line manager for help'
            ]);
        }
    }


    private function create_token($admission_token, $score){
        $sms = new SMS();
        if($score >= env('MAX_RISK'))
        {
            $sms->rejected(Auth::user()->name, Auth::user()->surname, Auth::user()->cellphone);
        }
        if($score >= 170 && $score <= 250){
            $signature = strtoupper(Str::random(6));
            $this->token::create([
                'admission_token' => $admission_token,
                'employee_token' => Auth::user()->id_number,
                'state' => 'frozen',
                'signature' => $signature,
                'scores' => $score
            ]);
            $sms->preliminary(Auth::user()->name, Auth::user()->surname, Auth::user()->cellphone, $signature);
        }
        if($score <= 150 )
        {
            $signature = strtoupper(Str::random(6));
            $this->token::create([
                'admission_token' => $admission_token,
                'employee_token' => Auth::user()->id_number,
                'state' => 'frozen',
                'signature' => $signature,
                'scores' => $score
            ]);
            $sms->accepted(Auth::user()->name, Auth::user()->surname, Auth::user()->cellphone, $signature);
        }

    }
    public function checkin(Request $request){

    }

    private function score($token){
        
    }
}
