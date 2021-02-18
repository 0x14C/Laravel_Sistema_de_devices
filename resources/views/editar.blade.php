<html> 
<head>
  <title>Editar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
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
<div class="card">
<div class="card-body"> 


  <form method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control"  name="Nome" placeholder="nome da antena" value="{{$data->Nome}}">
      </div>

      <div class="form-group col-md-6">
        <label for="inputPassword4">Endereço IP</label>
        <input type="text" class="form-control" name="IP" placeholder="endereço ip" value="{{$data->IP}}">
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">SSID</label>
      <input type="text" class="form-control" name="SSID" placeholder="ssid da antena" value="{{$data->SSID}}">
    </div>

    <div class="form-group">
      <label for="inputAddress2">Canal</label>
      <input type="text" class="form-control" name="Canal" placeholder="canal da antena" value="{{$data->Canal}}">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Coordenada</label>
        <input type="text" class="form-control" name="Coordenada" value="{{$data->Coordenada}}">
      </div>

      <div class="form-group">
      <label for="inputAddress2">Fita</label>
      <input type="text" class="form-control" name="Fita" placeholder="Informações contida na Antena" value="{{$data->Fita}}">
    </div>
      
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block" value="Adicionar">Salvar</button>
  </form>
  </div>
  </div>
  
</body>

</html>