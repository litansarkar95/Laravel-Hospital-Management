<?php

namespace App\Http\Controllers\backend\basic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specialist;

class SpecialistController extends Controller
{
    public function index(){

        $specialist = Specialist::all();

        return view('admin/basic/specialist-list',compact('specialist'));
    }

    public function insert(Request $request){

        $specialist = new Specialist;

        $specialist->name = $request->name;


        $specialist->save();
        toastr()->success('Specialist has been save successfully!', 'Congrats');
        return redirect()->back();
    }

   
}
