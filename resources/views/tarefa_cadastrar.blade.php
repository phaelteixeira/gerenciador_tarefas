@extends('layout',["current"=>"tarefa"])

@section('body')
<div>
<form action="{{route('tarefa.store')}}" method="POST">
@csrf
  <div class="form-group">
      <label for="titulo">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo">
  </div>
  <div class="form-group">
      <label for="usuario_responsavel">Usuario Responsavel</label>
      <input type="text" class="form-control" id="usuario_responsavel" name="usuario_responsavel" placeholder="usuario_responsavel">
  </div>
  <div class="form-group">
      <label for="privacidade">Privacidade</label>
      <input type="text" class="form-control" id="privacidade" name="privacidade" placeholder="privacidade">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao">
  </div>
  <div class="form-group">
      <label for="tipo">Tipo</label>
      <input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="status">
  </div>
  <div class="form-group">
    <label for="data">Data conclusao</label>
    <input type="text" class="form-control" id="data" name="data" placeholder="data">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection