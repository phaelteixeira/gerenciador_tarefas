@extends('layout',["current"=>"tarefa"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Usuario Responsavel</th>
      <th scope="col">Privacidade</th>
      <th scope="col">Descrição</th>
      <th scope="col">Tipo</th>
      <th scope="col">Status</th>
      <th scope="col">Data de conclusao</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefas as $t)
        <tr>       
            <td>{{$t->id}}</td>
            <td>{{$t->titulo}}</td>
            <td>{{$t->usuario}}</td>
            <td>{{$t->privacidade}}</td>
            <td>{{$t->descricao}}</td>
            <td>{{$t->tipo}}</td>
            <td>{{$t->status}}</td>
            <td>{{$t->conclusao}}</td>
            <td>
            <form action = "{{route('tarefa.destroy', $t)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tarefa.edit', $t)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection