<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes;

class FilmesController extends Controller
{
    //
    public function index(){
        $filmes=Filmes::all();
        return view('filmes.index',[
            'filmes'=>$filmes
        ]);
    }
    public function show(Request $request){
        $idfilmes = $request->id;
        $filmes=Filmes::where('id_filme',$idfilmes)->with(['ator','genero'])->first();
        return view('filmes.show',[
            'filmes'=>$filmes
        ]);
    }
}
