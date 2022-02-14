<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddNewController extends Controller
{
    public function addnew(){
        return view('admin.addnew');
    }
    public function saveteacher(Request $request){
        $request->validate([
            'teacher_name' => 'required',
            'teacher_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'teacher_initial' => 'required',
            'teacher_email' => 'required',
            'teacher_phone' => 'required',
            'teacher_workfield' => 'required',
            
        ]);
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_initial']=$request->teacher_initial;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_phone']=$request->teacher_phone;
        $data['teacher_workfield']=$request->teacher_workfield;
        
        $image=$request->file('teacher_image');

    if ($image){
        $image_name=Str::random(40);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
       if($success){
            $data['teacher_image']=$image_url;

               DB::table('teacher_tbl')->insert($data);
               Session::put('exception','Teacher added successfully!!');
               return Redirect::to('/addnew');
        }
    }
    $data['image']=$image_url;
            DB::table('teacher_tbl')->insert($data);
            Session::put('exception','Teacher added successfully!!');
            return Redirect::to('/addnew');

            DB::table('teacher_tbl')->insert($data);
            Session::put('exception','Teacher added successfully!!');
            return Redirect::to('/addnew');

    
    }
}
