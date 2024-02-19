<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DoctorController extends Controller
{
    public function index()
    {
        $data = DB::table('specialists')->get();

        $doctorcnt = DB::table('doctors')
            ->join('specialists', 'doctors.specialists_id', '=', 'specialists.id')
            ->select('doctors.*', 'specialists.name as sname')
            ->orderByDesc('id')
            ->get();

        return view('front.doctor',[
          
            'data' => $data,
            'doctorcnt'=> $doctorcnt,
        ]);
    }
}
