<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use session;
session_start();
class AllTeachersController extends Controller
{
    public function allteachers(){
        $allteacher_info=DB::table('teacher_tbl')->get();
        return view('admin.allteachers')->with('teachersinfo',$allteacher_info);
    }


    public function teacherdelete($teacher_id){
        DB::table('teacher_tbl')
        ->where('teacher_id',$teacher_id)
        ->delete();
        return Redirect::to('allteachers');
    }
    
}