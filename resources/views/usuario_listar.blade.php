@extends('layout',["current"=>"usuario"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Login</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $user)
        <tr>       
            <td>{{$user->id}}</td>
            <td>{{$user->nome}}</td>
            <td>{{$user->sexo}}</td>
            <td>{{$user->nascimento}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->telefone}}</td>
            <td>{{$user->login}}</td>
            <td>{{$user->senha}}</td>
            <td>
            <form action = "{{route('usuario.destroy', $user)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('usuario.edit', $user)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection