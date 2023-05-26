<style>
  body{
    background-color: #1f2029;
    color: #fff;
  }

  .itens_menu{
    color:white;
    text-decoration:none;
    padding:20px;
    margin-right:7px;
    font-weight:bold;
    text-transform: uppercase;
  }

  .itens_drop{
    color:black;
    text-decoration:none;
    padding:20px;
    margin-right:7px;
    font-family:'Courier New', Courier, monospace;
    font-weight:bold;
    padding:20px;
  }

  .itens_menu:hover{
    color:red;
  }

  .itens_drop:hover{
    color:red;
  }

</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CINEMA ADM</title>
</head>
<body style="background-color: #1f2029; color: #fff;">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="nav-link active" aria-current="page" href="{{url('/')}}" style="color: red; font-size: 24px; font-weight: bold; font-family: 'Courier New', Courier, monospace;">CINETEC</a>
          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="itens_menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Filme</a>
                <ul class="dropdown-menu">

                  <li><a class="itens_drop" class="dropdown-item" href="{{url('/cadastro-Filme')}}">Cadastrar</a></li>
                  <li><a class="itens_drop" class="dropdown-item" href="{{'/gerenciar-filme'}}">Gerenciar</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="itens_menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Funcionário</a>
                <ul class="dropdown-menu">

                    <li><a class="itens_drop" class="dropdown-item" href="{{url('/cadastro-funcionario')}}">Cadastrar</a></li>
                    <li><a class="itens_drop" class="dropdown-item" href="{{url('/gerenciar-funcionario')}}">Gerenciar</a></li>

                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="itens_menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Poltronas</a>
                <ul class="dropdown-menu">

                    <li><a class="itens_drop" class="dropdown-item" href="{{url('/cadastro-poltrona')}}">Cadastrar</a></li>
                    <li><a class="itens_drop" class="dropdown-item" href="{{url('/gerenciar-poltrona')}}">Gerenciar</a></li>

                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
<div class="container">

@yield('content')  

</div>

    </header>

    <footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>   
   
</footer>

</body>
</html>