
@extends('padrao')
@section('content')
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');

body{
    background-color: #1f2029;
    font-family: Arial, Helvetica, sans-serif;
}
.geral-infoComp{
    margin-top: 7%;
    width: 100%;
}
.compra{
    background-color: #2a2b38;
	background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
	background-position: bottom center;
	background-repeat: no-repeat;
	background-size: 300%;
    border-radius: 15px;
    color: #fff;
    margin-bottom: 5%;
    margin-left: auto;
    margin-right: auto;
    width: 65%;
    white-space: normal;
}
.form-geral{
    display: flex;
}
#img-comp-card{
    width: 500px;
    height: 550px;
    border-radius: 15px;
    object-fit: cover;
}
.form-info-comp{
    margin-left: 3%;
    margin-top: 1%;
}
.btn-comprar{  
    border-radius: 4px;
    height: 44px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    -webkit-transition : all 200ms linear;
    transition: all 200ms linear;
    padding: 0 30px;
    letter-spacing: 1px;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -moz-align-items: center;
    -ms-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    -moz-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    -ms-flex-pack: center;
    text-align: center;
    border: none;
    background-color: #ffeba7;
    color: #7D0202;
    box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
    margin-left: 5.5em;
    align: center;
    
  }
  .btn-comprar:active,
  .btn-comprar:focus{  
    background-color: #7D0202;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
  }
  .btn-comprar:hover{  
    background-color: #7D0202;
    color: #ffeba7;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
  }
.form-flex-qtde{
    display: flex;
    vertical-align: middle;
    width: 110%;
}
.input-qtde{
    height: 30px;
    margin-top: 6%;
    margin-left: 3%;
    border:0;
    border-bottom:1px solid #555;  
    background:transparent;
    padding:8px 0 5px 0;
    font-size:16px;
    color: #fff;
}
.input-perfil:focus{
    border:none;	
    outline:none;
    border-bottom:1px solid #fdee2f	
  }
.comp-titulo{
    height: 70px;
}
.descComp{
    word-wrap: break-word;
    max-width: 400px;
}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/frmCompra.css">
    <title>Filmes</title>
</head>
<body>
@if($dadosfilme)
<div class="geral-infoComp">
    <div class="compra">
        <form method="POST" action="pagamento.php">
            <div class="form-geral">
                <div class="form-img">
                    <img id="img-comp-card" src="https://image.tmdb.org/t/p/w500/mgFdvrwlzYi6wLq3zgzOwkiT43k.jpg}"/>
                </div>
                <div class="form-info-comp">
                    <h1 class="comp-titulo">{{$dadosfilme->nomefilme}}</h1>
                    
                    
                    <br><br> 
                    <p class="catComp"><b>Data de lançamento: </b>{{$dadosfilme->datalancamentofilme}}</p>
                    <h2>Sinopse</h2>
                    <p class="descComp">{{$dadosfilme->sinopsefilme}}</p>
                    <h2>Atores</h2>
                    <ul>
                        <li>{{$dadosfilme->atoresfilme}}</li>
                    </ul>
                    <!-- <input type="submit" class="btn-comprar" name="Comprar2" value="Agendar" onclick="redirecionar()"> -->
                </div>
            </div>
        </form>
    </div>
</div>
@else
    <p>Nenhum filme encontrado.</p>
@endif
    
</body>
</html>

@endsection