<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atores;

class AtoresController extends Controller
{
    //
    public function index(){
        $atores=Atores::paginate(4);
        return view('atores.index',[
            'atores'=>$atores
        ]);
    }
   
}
