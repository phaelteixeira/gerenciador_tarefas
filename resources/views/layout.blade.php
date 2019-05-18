<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gerenciador de tarefas</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    @yield('content')
    <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CRUD</h3>
            </div>

            <ul class="list-unstyled components">
                <li @if($current == "principal") class = "active" @endif>
                    <a href="/">Página Inicial</a>
                </li>
                <li @if($current == "tarefas") class = "active" @endif>
                    <a href="#categoriasSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Tarefas</a>
                    <ul class="collapse list-unstyled" id="categoriasSubmenu">
                        <li>
                            <a href="{{route('')}}">Criar</a>
                        </li>
                        <li>
                            <a href="{{route('')}}">Listar</a>
                        </li>
                    </ul>
                </li>
                <li @if($current == "produtos") class = "active" @endif >
                    <a href="#produtosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Produtos</a>
                    <ul class="collapse list-unstyled" id="produtosSubmenu">
                        <li>
                            <a href="{{route('produtos.create')}}">Novo</a>
                        </li>
                        <li>
                            <a href="{{route('produtos.index')}}">Listar</a>
                        </li>
                    </ul>
                </li>
                <li @if($current == "clientes") class = "active" @endif>
                    <a href="#clientesSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Clientes</a>
                    <ul class="collapse list-unstyled" id="clientesSubmenu">
                        <li>
                            <a href="/clientes/novo">Nova</a>
                        </li>
                        <li>
                            <a href="/clientes">Listar</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <form action = "{{route('logout')}}" method = "POST">
                    @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
            
        </nav>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>