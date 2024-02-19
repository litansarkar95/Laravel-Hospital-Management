<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use\App\Models\Appointment;

use DB;

class HomeController extends Controller
{



    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->usertype == 0){
                $data = DB::table('specialists')->get();
            return view('front.home')->with('data', $data);
            }else{

             return view('admin.dashboard');
            }

        }else{
             return redirect()->back();
        }
    }



    public function index(){
        $data = DB::table('specialists')->get();
        return view('front.home')->with('data', $data);
     }



     public function GetDoctorSpecialistsId($id){
        echo json_encode(DB::table('doctors')->where('specialists_id', $id)->get());
    }



    public function appointment(Request $request){
        $data = new Appointment;

        $data->name           = $request->name;
        $data->email          = $request->email;
        $data->phone          = $request->phone;
        $data->specialists_id = $request->departement;
        $data->doctor_id      = $request->doctor_id;
        $data->date           = $request->date;
        $data->message        = $request->message;
        $data->status         = 'In Progress';
        
        if(Auth::id()){

        $data->patient_id     = Auth::user()->id;

        }

        $data->save();
        toastr()->success('Appointment Successfully!', 'Congrats');
        return redirect()->back();
    }
}
