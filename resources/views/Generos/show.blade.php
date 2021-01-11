<h3> Género </h3>
Id: {{$genero->id_genero}}<br>
Designação: {{$genero->designacao}}<br>
Observações: {{$genero->observacoes}}<br>
Filmes:<br>
<ul>
@foreach ($genero->filmes as $filme)
    <li>
        {{$filme->titulo}}
    </li>
    
@endforeach
</ul>