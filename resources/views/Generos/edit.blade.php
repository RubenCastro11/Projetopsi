<form action="{{route('generos.update',['id'=>$genero->id_genero])}}" method="post">
@csrf
@method('patch')    


Designação: <input type="text" name="designacao" value="{{old('designacao')}}"><br><br>
@if($errors->has('designacao'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif


Observações: <input type="text" name="observacoes" value="{{old('observacoes')}}"><br><br>
@if($errors->has('observacoes'))
<b style="color:red">Preenchimento Obrigatório</b><br>
@endif

<input type="submit" value="enviar">
</form>
