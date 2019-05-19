<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciador de tarefas</title>
  <link href="{{asset('css/app.css')}}" rel = "stylesheet">
  <link href="{{asset('css/style.css')}}" rel = "stylesheet">
</head>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><h3>Gerenciador de tarefas</h3> </div>
        <div class="list-group list-group-flush">
            <a href="usuario_cadastrar" class="list-group-item list-group-item-action bg-light">Usuario</a>
            <a href="tarefa_cadastrar" class="list-group-item list-group-item-action bg-light">Tarefas</a>
            <a href="tipotarefa_cadastrar" class="list-group-item list-group-item-action bg-light">Tipo de tarefas</a>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

          <div class="container-fluid">
               
          </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
</body>
</html>