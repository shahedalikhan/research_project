<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovedStudentsController extends Controller
{
    public function approvedstudents(){
        return view('admin.approvedstudents');
    }
}
