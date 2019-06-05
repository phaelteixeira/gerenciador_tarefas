@extends('layout',["current"=>"usuario"])

@section('body')
<div>
  <form action="{{route('usuario.store')}}" method="POST">
  @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" placeholder="nome">
    </div>
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo" placeholder="sexo">
    </div>
    <div class="form-group">
        <label for="nacimento">Data de nascimento</label>
        <input type="text" class="form-control" id="nascimento" placeholder="nascimento">
    </div>
    <div class="form-group">
      <label for="email">Endereço de email</label>
      <input type="text" class="form-control" id="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" placeholder="telefone">
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" placeholder="login">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
@endsection