<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FacultylistController extends Controller
{
    public function facultylist(){
        $allteacher_info=DB::table('teacher_tbl')->get();
        return view('student.facultylist')->with('teachersinfo',$allteacher_info);
    }
}
