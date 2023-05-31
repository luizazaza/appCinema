
@extends('padrao')
@section('content')
<style>
    .titulo{
        font-family: 'Courier New', Courier, monospace;
    }
    .geral-card{
        display: flex;
        width: 80%;
        margin-left: 135px;
    }
    #margin{
        margin-left: 2%;
    }
    .card{
        background-color: #2a2b38;
	    background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
	    background-position: bottom center;
	    background-repeat: no-repeat;
    }
    .btn-geral{
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
        text-decoration:none;
    }
    .btn-geral:active,
    .btn-geral:focus{  
        background-color: #7D0202;
        color: #ffeba7;
        box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
    }
    .btn-geral:hover{  
        background-color: #7D0202;
        color: #ffeba7;
        box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
    }


</style>
<br><br>
<center>
    <img src="https://redepara.com.br/imagens/galeria/118804/thumbs/31677e1147a7449e9e6dca278045674f.jpg" alt="banner Guardiôes da galáxia" width="70%">

    <br><br><br>

        <text class="txt" style="font-family: 'Courier New', Courier, monospace; font-size:30px;">LANÇAMENTOS</text>

    <br><br><br>

@foreach($dadosfilme as $dadosfilmes)
    <div class="geral-card">
        <div class="card" style="width: 18rem; background-color: #15151f; color: #fff">
            <img src="https://image.tmdb.org/t/p/w500/mgFdvrwlzYi6wLq3zgzOwkiT43k.jpg" height="380px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$dadosfilmes->nomefilme}}</h5>
                <a href="{{ route('pg-filme', ['id' => $dadosfilmes->id]) }}" class="btn-geral">Saber mais</a>


            </div>
        </div>
     </div>
@endforeach    
    
    <br><br>
</center>

@endsection