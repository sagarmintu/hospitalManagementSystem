<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;
        $imageName = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imageName);
        $doctor->image = $imageName;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');

    }

    public function show_appointment()
    {
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data = appointment::find($id);
        $data->status = "Cancelled";
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $doctor = doctor::all();
        return view('admin.show_doctor', compact('doctor'));
    }

    public function delete_doctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Doctor Deleted Successfully');
    }

    public function update_doctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function edit_doctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $image = $request->file;
        if($image)
        {
            $imageName = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage',$imageName);
            $doctor->image = $imageName;
        }
        
        $doctor->save();
        return redirect('showdoctor')->with('message', 'Doctor Updated Successfully');
    }
}