<h3> Filmes</h3>
@foreach($filmes as $filme)
<li>
<a href="{{route('filmes.show',['id'=>$filme->id_filme])}}">
    {{$filme->titulo}}
</a>
</li>
@endforeach   