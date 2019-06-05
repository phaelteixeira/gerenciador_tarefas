@extends('layout',["current"=>"usuario"])

<div>
<form action="{{route('usuario.update',$usuarios)}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome">
  </div>
  <div class="form-group">
      <label for="sexo">Sexo</label>
      <input type="text" class="form-control" id="sexo" placeholder="sexo">
  </div>
  <div class="form-group">
      <label for="data">Data de nascimento</label>
      <input type="text" class="form-control" id="data" placeholder="data">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Endereço de email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
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