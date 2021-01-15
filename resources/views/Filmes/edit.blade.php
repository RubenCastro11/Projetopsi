<form action="{{route('filmes.update',['id'=>$filme->id_filme])}}" method="post">
@csrf
@method('patch')

Título: <input type="text" name="titulo" value="{{old('titulo')}}"><br><br>
@if($errors->has('titulo'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Género: <input type="text" name="id_genero" value="{{old('id_genero')}}"><br><br>
@if($errors->has('id_genero'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif


Sinopse: <input type="text" name="sinopse" value="{{old('sinopse')}}"><br><br>
@if($errors->has('sinopse'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Quantidade: <input type="text" name="quantidade" value="{{old('quantidade')}}"><br><br>
@if($errors->has('quantidade'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Idioma: <input type="text" name="idioma" value="{{old('idioma')}}"><br><br>
@if($errors->has('idioma'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif


Idator: <input type="text" name="id_ator" value="{{old('id_ator')}}"><br><br>
@if($errors->has('id_ator'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Ator: <input type="text" name="ator" value="{{old('id_ator')}}"><br><br>
@if($errors->has('id_ator'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

<input type="submit" value="enviar">
</form>