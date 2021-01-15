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
    public function create(){
        return view('filmes.create');
    }
    public function store(Request $req){

        $novoFilme =$req->validate([
            'titulo'=>['required','min:3','max:100'],
            'id_genero'=>['nullable','min:1','max:11'], 
            'sinopse'=>['nullable', 'min:3','max:11'], 
            'quantidade'=>['nullable', 'min:1','max:600'], 
            'idioma'=>['nullable', 'min:3','max:11'], 
            'id_ator'=>['nullable','min:1','max:11'], 

        ]);

        $filme = Filmes::create($novoFilme);

        return redirect()->route('filmes.show',[
            'id'=>$filme->id_filme
        ]);
    }
    public function edit(Request $request){

        $idFilme=$request->id;

        $filme = Filmes::where('id_filme', $idFilme)->first();

        return view('filmes.edit',[
            'filme'=>$filme
        ]);
    }
    public function update (Request $request ){

        $idFilme=$request->id;

        $filme = Filmes::where('id_filme', $idFilme)->first();

        $atualizarFilme = $request->validate([
        
            'titulo'=>['required','min:3','max:100'],
            'id_genero'=>['nullable','min:1','max:11'], 
            'sinopse'=>['nullable', 'min:3','max:11'], 
            'quantidade'=>['nullable', 'min:1','max:600'], 
            'idioma'=>['nullable', 'min:3','max:11'], 
            'id_ator'=>['nullable','min:1','max:11'], 
        ]);
        $filme->update($atualizarFilme);

        return redirect()->route('filmes.show',[
            'id'=>$filme->id_filme
        ]);
    }
    

}
