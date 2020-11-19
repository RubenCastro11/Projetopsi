<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosController extends Controller
{
    //
     public function index(){
        $generos=Generos::all();
        return view('generos.index',[
            'generos'=>$generos
        ]);
    }
    public function show(Request $request){
        $idgeneros = $request->id;
        $generos=Generos::where('id_genero',$idgeneros)->first();
        return view('generos.show',[
            'genero'=>$generos
        ]);
    }
}
