@extends('layout',["current"=>"usuario"])

@section('body')
<div>
<form action="{{route('tipotarefa.store')}}" method="POST">
@csrf
  <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection