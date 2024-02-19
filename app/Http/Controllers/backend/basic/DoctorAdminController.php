<?php

namespace App\Http\Controllers\backend\basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\Doctor;

use Illuminate\Support\Facades\DB;

class DoctorAdminController extends Controller
{
    public function create(){

        $specialist = Specialist::all();

        $doctorcnt = DB::table('doctors')
            ->join('specialists', 'doctors.specialists_id', '=', 'specialists.id')
            ->select('doctors.*', 'specialists.name as sname')
            ->orderByDesc('id')
            ->get();


        return view('admin.basic.doctor_create',compact('specialist','doctorcnt'));
    }

    public function insert(Request $request){

        $doctor = new  Doctor;
        $image = $request->file;
  if($image){
    $imagename = time().'.'.$image->getClientoriginalExtension();

    $request->file->move('doctorimage',$imagename);

    $doctor->picture = $imagename;
  }
       

        $doctor->name =$request->name;
        $doctor->phone_number =$request->phone_number;
        $doctor->specialists_id =$request->specialist;

        $doctor->save();

        toastr()->success('Item deleted successfully!', 'Congrats');
        return redirect()->back();
    }
}
