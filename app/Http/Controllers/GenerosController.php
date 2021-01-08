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
        $generos=Generos::where('id_genero',$idgeneros)->with('filmes')->first();
        return view('generos.show',[
            'genero'=>$generos
        ]);
    }

    public function create(){
        return view('generos.create');
    }
    public function store(Request $req){

        $novoGenero =$req->validate([
            'designacao'=>['required','min:3','max:30'],
            'observacoes'=>['nullable', 'min:3','max:255'],         
        ]);

        $genero = Generos::create($novoGenero);

        return redirect()->route('generos.show',[
            'id'=>$genero->id_genero
        ]);

    }
}
