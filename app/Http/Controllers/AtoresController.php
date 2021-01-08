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
        $atores=Atores::where('id_ator',$idatores)->with('filmes')->first();
        return view('atores.show',[
            'atores'=>$atores

        ]);
    }
    public function create(){
        return view('atores.create');
    }
    public function store(Request $req){

        $novoAtor =$req->validate([
            'nome'=>['required','min:3','max:50'],
            'nacionalidade'=>['nullable', 'min:3','max:20'],
            'data_nascimento'=>['nullable','date'],
            'fotografia'=>['image','nullable','max:255']          
        ]);

        $ator = Atores::create($novoAtor);

        return redirect()->route('atores.show',[
            'id'=>$ator->id_ator
        ]);



    }

   
}
