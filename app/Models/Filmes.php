<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmes extends Model
{
    use HasFactory;
    protected $primaryKey='id_filme';
    protected $table='filmes';

    protected $fillable=[
    	'titulo',
    	'id_genero',
    	'sinopse',
    	'quantidade',
    	'idioma',
    	'id_ator'

    ];
    
    public function ator(){
        return $this-> belongsTo ('App\Models\Atores','id_ator');
        
    }
    public function genero(){
        return $this-> belongsTo ('App\Models\Generos','id_genero');
    }
}
