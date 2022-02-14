<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class StdnController extends Controller
{
    public function student_dashboard(){
        return view('student.dashboard');
    }
    public function logout()
    {
        Session::put('stdn_name',null);
        Session::put('stdn_id',null);

        return Redirect::to('/');
    }

    public function login_dashboard(Request $request)
    {
        $email=$request->stdn_email;
        $password=md5($request->stdn_password);
        $result =DB::table('stdn')
        ->where('stdn_email',$email)
        ->where('stdn_password',$password)
        ->first();

        if($result){
            Session::put('stdn_email',$result->stdn_email);
            Session::put('stdn_id',$result->stdn_id);
              return Redirect::to('/student_dashboard');
        }
        else{
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/');
        }
    }
}
