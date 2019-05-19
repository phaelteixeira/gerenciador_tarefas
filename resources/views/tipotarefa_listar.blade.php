@extends('layout')

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $user)
        <tr>       
            <td>{{$user->id}}</td>
            <td>{{$user->nome}}</td>
            <td>
            <form action = "{{route('tipotarefa.destroy', $tipos)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tipotarefa.edit', $tipos)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection