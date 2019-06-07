@extends('layout',["current"=>"tarefa"])

@section('body')
<div>
<form action="{{route('tarefa.update',$tarefa)}}" method="POST">
  @csrf
  @method('POST')
  <div class="form-group">
      <label for="titulo">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="{{$tarefa->titulo}}">
  </div>
  <div class="form-group">
      <label for="usuario">Usuario Responsavel</label>
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" value="{{$tarefa->usuario}}">
  </div>
  <div class="form-group">
      <label for="privacidade">Privacidade</label>
      <input type="text" class="form-control" id="privacidade" name="privacidade" placeholder="privacidade" value="{{$tarefa->privacidade}}">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao" value="{{$tarefa->descricao}}">
  </div>
  <div class="form-group">
      <label for="tipo">Tipo</label>
      <input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo" value="{{$tarefa->tipo}}">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="status" value="{{$tarefa->status}}">
  </div>
  <div class="form-group">
    <label for="conclusao">Data conclusao</label>
    <input type="text" class="form-control" id="conclusao" name="conclusao" placeholder="conclusao" value="{{$tarefa->conclusao}}">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection