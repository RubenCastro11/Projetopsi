<h3> Géneros </h3>
@foreach($generos as $genero)
<li>
<a href="{{route('generos.show',['id'=>$genero->id_genero])}}">
    {{$genero->id_genero}}
</a>
</li>
@endforeach   