<h3> Ator </h3>
Id: {{$atores->id_ator}}<br>
Nome: {{$atores->nome}}<br>
Nacionalidade: {{$atores->nacionalidade}}<br>
Datanasc: {{$atores->data_nascimento}}<br>
@if (count($atores->filmes)>0)
@foreach ($atores->filmes as $filme)
{{$filme->titulo}}
@endforeach
@else
@endif