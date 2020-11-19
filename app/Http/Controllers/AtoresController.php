<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atores;

class AtoresController extends Controller
{
    //
    public function index(){
        $atores=Atores::all();
        return view('atores.index',[
            'atores'=>$atores
        ]);
    }
    public function show(Request $request){
        $idatores = $request->id;
        $atores=Atores::where('id_ator',$idatores)->first();
        return view('atores.show',[
            'atores'=>$atores
        ]);
    }
   
}
