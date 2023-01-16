<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    //
    public function index()
    {
        $doctor_list = Doctor::all();
        return view('doctor.index',compact('doctor_list'));
    }
    public function create()
    {
        
        return view('doctor.create');
    }




    public function store(Request $request)
    {
        $request->validate([
           'dr_name'  => 'required',
           'dr_email'  => 'required|email',
           'dr_phone'  => 'required|min:11',
        ]);


        $doctor = new Doctor();

        $doctor->name = $request->dr_name;
        $doctor->email = $request->dr_email;
        $doctor->phone = $request->dr_phone;

        $doctor->save();
        
        return redirect()->route('doctors');
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
       return view('doctor.edit',compact('doctor'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
           'name'  => 'required',
           'email'  => 'required|email',
           'phone'  => 'required|min:11',
        ]);


        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;

        $doctor->save();
        
        return redirect()->route('doctors');
    }


    public function delete($id)
    {
       $doctor = Doctor::find($id);

       $doctor->delete();
        
        return redirect()->route('doctors');
    }
}
