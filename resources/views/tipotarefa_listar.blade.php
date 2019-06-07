@extends('layout',["current"=>"tipo"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tipos as $tipo)
        <tr>       
            <td>{{$tipo->id}}</td>
            <td>{{$tipo->nome}}</td>
            <td>
            <form action = "{{route('tipotarefa.destroy', $tipo)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tipotarefa.edit', $tipo)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection