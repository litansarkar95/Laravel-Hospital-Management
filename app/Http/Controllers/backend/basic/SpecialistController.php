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

    public function delete(Specialist $id) {
        $id->delete();

      toastr()->success('Item deleted successfully!', 'Congrats');
        return redirect()->back();
    }


    public function edit($id){

        $specialid= Specialist::findOrFail($id);

        $specialist = Specialist::all();
        return view('admin.basic.specialist-edit', compact('specialist','specialid'));

    }


    public function updatespecialist(Request $request,$id){

        $specialid = Specialist::findOrFail($id);
      
        $validateData = $request->validate([
            'name' => 'required',    
        ]
           
        );
       
        $specialid->update([
            'name'=> $validateData['name']
        ]);
     
    
        toastr()->success('Specialist is updated successfully!', 'Congrats');
        return redirect()->route('specialist');

    }
   
}
