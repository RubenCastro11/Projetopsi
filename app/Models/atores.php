<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    use HasFactory;
    protected $primaryKey='id_ator';
    protected $table='atores';
    
    public function filmes(){
        return $this-> hasMany('App\Models\Filmes','id_ator');
    }
    
}
