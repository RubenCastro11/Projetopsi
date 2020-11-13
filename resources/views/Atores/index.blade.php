@foreach($atores as $ator)
<li>
<a href="{{route('ator.show',['ida'=>$ator->id_ator])}}">
    {{$ator->nome}}
</a>
</li>
@endforeach   