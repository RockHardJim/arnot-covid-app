<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Validator, Auth, Hash};
use App\Models\{
    User
};

class AuthController extends Controller
{
    //
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function login(Request $request){
        $v = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required|min:5|max:15'
        ]);

        if($v->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Hi, we could not properly validate your information due to incomplete data sent'
            ]);
        } else {
            if(Auth::attempt($request->only('email', 'password'))){
                return response()->json([
                    'status' => 'passed',
                    'message' => 'Hi, we have successfully logged you in please wait while we redirect you'
                ]);
            }else{
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Hi, we could not verify your user details ensure you have submitted correct details'
                ]);
            }
        }
    }

    public function register(Request $request){
        $v = Validator::make($request->all(),[
            'email' => 'required|email',
            'employee_code' => 'required',
            'name' => 'required',
            'cellphone' => 'required|min:10|max:10',
            'surname' => 'required',
            'password' => 'required|min:5|max:15',
            'vehicle_registration' => 'required',
            'id_number' => 'required|min:13|max:13'
        ]);

        if($v->fails()){
            return response()->json([
                'status' => 'failed',
                'message' => 'Hi, we could not properly validate your information due to incomplete data sent'
            ]);
        } else {
            if($this->lookup_email($request->email)){
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Hi, it appears this email is already in use please use an alternative email to register your account'
                ]);
            } else {
                if($this->lookup_id($request->id_number)){
                    return response()->json([
                        'status' => 'failed',
                        'message' => 'Hi, it appears this identity number is already in use please contact your manager for help'
                    ]);
                } else {
                    if($this->lookup_cellphone($request->cellphone)){
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'Hi, it appears this cellphone number is already in use please contact your manager for help'
                        ]);
                    }else {
                        $this->user::create([
                            'email' => $request->email,
                            'id_number' => $request->id_number,
                            'name' => $request->name,
                            'cellphone' => $request->cellphone,
                            'surname' => $request->surname,
                            'vehicle_registration' => $request->vehicle_registration,
                            'employee_code' => $request->employee_code,
                            'password' => Hash::make($request->password)
                        ]);

                        return response()->json([
                            'status' => 'passed',
                            'message' => 'Hi, we have successfully registered your account you can now login'
                        ]);
                    }
                }
            }
        }
    }


    private function lookup_email($email){
        if($this->user::where('email', $email)->first()){
            return true;
        } else {
            return false;
        }
    }

    private function lookup_id($identity_number){
        if($this->user::where('id_number', $identity_number)->first()){
            return true;
        } else {
            return false;
        }
    }

    private function lookup_cellphone($cellphone){
        if($this->user::where('cellphone', $cellphone)->first()){
            return true;
        } else {
            return false;
        }
    }
}
