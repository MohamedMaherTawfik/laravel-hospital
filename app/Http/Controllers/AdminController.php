<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addView(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new Doctor;
        $image=$request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->specialist=$request->speciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('message','Doctor added successfully');
    }
}
