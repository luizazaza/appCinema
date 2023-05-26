<style>
.btn-danger
{
  background-image: url("https://cdn.discordapp.com/attachments/699132574718492723/1110650975905132715/chair.png");
  background-repeat: no-repeat, repeat;
  background-position: center;
  background-size: cover;
  width:50px;
  height:50px;
  color: white;
  font-weight: bold;
  transition-duration: 0.2s;
}
.btn-danger:hover
{
  opacity: 0.5;
  transition-duration: 0.2s;
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

@extends('padrao')

@section('content')
        <form enctype="multipart/form-data" method="post" action="{{route('cadastro-filme')}}">
        @csrf
            <div class="mb-3 form-check">
                <label for="filmeInput" class="form-label">Filme:</label>
                <input type="text" name="nomefilme" class="form-control" id="filmeInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="atoresInput" class="form-label">Atores:</label>
                <input type="text" name="atoresfilme" class="form-control" id="atoresInput">
            </div>
            <div class="mb-3 form-check">
                <label for="dataLancamentoInput" class="form-label">Data de Lançamento:</label>
                <input type="date" name="datalancamentofilme" class="form-control" id="dataLancamentoInput" >
            </div>
            <div class="mb-3 form-check">
                <label for="sinopseInput" class="form-label">Sinopse:</label>
                <textarea class="form-control" name="sinopsefilme" id="sinopseInput" rows="3"></textarea>
            </div>
            <div class="mb-3 form-check">
                <label for="capaInput" class="form-label">Capa:</label>
                <input class="form-control" name="capafilme" type="file" id="capaInput">
              </div>
            <button type="submit" class="btn-geral">Salvar</button>
        </form>
@endsection