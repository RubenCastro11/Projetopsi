<h3> Filme </h3>
Id: {{$filmes->id_filme}}<br>
Titulo: {{$filmes->titulo}}<br>
Género: {{$filmes->id_genero}}<br>
Sinopse: {{$filmes->sinopse}}<br>
Quantidade: {{$filmes->quantidade}}<br>
Idioma: {{$filmes->idioma}}<br>
Idator: {{$filmes->id_ator}}<br> 

<a href="{{route('filmes.edit', ['id'=>$filmes->id_filme])}}" class="btn btn-primary"> Editar 

</a>



