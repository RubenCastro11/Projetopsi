<form action="{{route('atores.update',['id'=>ator->id_ator])}}" method="post">
@csrf
@method('patch')

Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
@if($errors->has('nome'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Nacionalidade: <input type="text" name="nacionalidade" value="{{old('nacionalidade')}}"><br><br>
@if($errors->has('nacionalidade'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif


Data Nascimneto: <input type="text" name="data_nascimento" value="{{old('data_nascimento')}}"><br><br>
@if($errors->has('data_nascimento'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

Fotografia : <input type="text" name="fotografia" value="{{old('fotografia')}}"><br><br>

<input type="submit" value="enviar">
</form>



