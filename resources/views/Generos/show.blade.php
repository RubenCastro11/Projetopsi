<h3> Género </h3>
Id: {{$genero->id_genero}}<br>
Designação: {{$genero->designacao}}<br>
Observações: {{$genero->observacoes}}<br>
Filmes:<br>

@foreach ($genero->filmes as $filme)
    
        {{$filme->titulo}}<br>
    
    
@endforeach

<button>
<a href="{{route('generos.edit', ['id'=>$genero->id_genero])}}" class="btn btn-primary"> Editar 

</a>

