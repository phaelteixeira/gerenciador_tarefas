@extends('layout',["current"=>"usuario"])

<div>
<form action="{{route('usuario.update',$usuarios)}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
  </div>
  <div class="form-group">
      <label for="sexo">Sexo</label>
      <input type="text" class="form-control" id="sexo" name="sexo" placeholder="sexo">
  </div>
  <div class="form-group">
      <label for="data">Data de nascimento</label>
      <input type="text" class="form-control" id="data" name="data" placeholder="data">
  </div>
  <div class="form-group">
    <label for="email">Endereço de email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="email">
  </div>
  <div class="form-group">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone">
  </div>
  <div class="form-group">
      <label for="login">Login</label>
      <input type="text" class="form-control" id="login" name="login" placeholder="login">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" placeholder="senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>