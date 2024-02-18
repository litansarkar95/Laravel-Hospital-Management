<?php

namespace App\Http\Controllers\backend\basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\Doctor;

class DoctorAdminController extends Controller
{
    public function create(){

        $specialist = Specialist::all();
        return view('admin.basic.doctor_create',compact('specialist'));
    }

    public function insert(Request $request){

        $doctor = new  Doctor;
        $image = $request->file;

        $imagename = time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->picture = $imagename;

        $doctor->name =$request->name;
        $doctor->phone_number =$request->phone_number;
        $doctor->specialists_id =$request->specialist;

        $doctor->save();

        toastr()->success('Item deleted successfully!', 'Congrats');
        return redirect()->back();
    }
}
