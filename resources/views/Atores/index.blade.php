<h3> Atores </h3>
@foreach($atores as $ator)
<li>
<a href="{{route('atores.show',['id'=>$ator->id_ator])}}">
    {{$ator->nome}}
</a>
</li>
@endforeach   

<button>
<a href="{{route('atores.create')}}" class="btn btn-primary">Adicionar ator
    
</a>