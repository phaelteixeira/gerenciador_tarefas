@extends('layout',["current"=>"tipo"])

@section('body')
<div>
<form action="{{route('tipotarefa.update',$tipos)}}" method="POST">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{$tipos->nome}}">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection