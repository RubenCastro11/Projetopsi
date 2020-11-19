<h3> Atores </h3>
@foreach($atores as $ator)
<li>
<a href="{{route('atores.show',['id'=>$ator->id_ator])}}">
    {{$ator->nome}}
</a>
</li>
@endforeach   