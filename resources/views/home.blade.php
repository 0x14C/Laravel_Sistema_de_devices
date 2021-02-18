
<html> 

<head>
<title> Home </title>
<link />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>


</head>
<body> 

<!--Colocar esse código em JS dentro do datables.js-->
<script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ route('raiz')}}">NWT</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('raiz')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('cadastrar.get')}}">Cadastrar</a>
      </li>
    </ul>
  </div>

 

</nav>

</br>
<div class="container-fluid"> 

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Endereço IP</th>
                <th>SSID</th>
                <th>Canal</th>
                <th>Coordenada</th>
                <th>Fita</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listar as $item)
            <tr>
                <td>{{$item->id}}</td>  
                <td>{{$item->Nome}}</td>
                <td>{{$item->IP}}</td>
                <td>{{$item->SSID}}</td>
                <td>{{$item->Canal}}</td>
                <td>{{$item->Coordenada}}</td>
                <td>{{$item->Fita}}</td>
                <td> <a href="{{ route('editar.get', ['id'=>$item->id]) }}"> Editar</a> 
                     <a href="{{ route('deletar.get', ['id'=>$item->id]) }}"> Excluir</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
        
    </table>
    
</div>
</body>
</html>