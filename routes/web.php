<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    
  
//logout..
Route::get('/logout','AdminController@logout');
Route::get('/stdn_logout','StdnController@logout');
Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
//student login
Route::post('/studentlogin','StdnController@login_dashboard');
Route::get('/student_dashboard','StdnController@student_dashboard');

//addnew
Route::get('/addnew','AddNewController@addnew');
Route::post('/save_teacher','AddNewController@saveteacher');
//delete teacher
Route::get('/teacher_delete/{teacher_id}','AllTeachersController@teacherdelete');
//allteachers
Route::get('/allteachers','AllTeachersController@allteachers');
//pendingproposals
Route::get('/pendingproposals','PendingProposalsController@pendingproposals');
//approvedstudents
Route::get('/approvedstudents','ApprovedStudentsController@approvedstudents');
//search

Route::get('/facultylist','FacultylistController@facultylist');


//contactform
Route::get('/contact','ContactController@contact');
