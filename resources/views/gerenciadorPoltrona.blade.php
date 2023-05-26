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


<div class="container mt-5">
<form method="get" action="{{route('gerenciar-poltrona')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="id" id="inputPesquisar" placeholder="Digite o número da poltrona" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn-geral">Pesquisar</button> </div>
  </div>
</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <td scope="col">Código</td>
      <td scope="col">Nome do cliente</td>
      <td scope="col">Número da poltrona</td>
      <td scope="col">Alterar</td>
      <td scope="col">Excluir</td>
    </tr>
  </thead>
  <tbody>



    @if(empty($_GET['id']))
    @else
    @foreach($dadospoltrona as $dadospoltrona)



    <tr>

      <th scope="row">{{$dadospoltrona->id}}</th>
      <td>{{$dadospoltrona->nomeclie}}</td>
      <td>{{$dadospoltrona->id}}</td>

      <td>
      <button type="button" class="btn-geral" data-bs-toggle="modal" data-bs-target="#modalAlterarPol-{{$dadospoltrona->id}}">Alterar</button>
      @include('modal.poltronaAlterar')
      </td>

      <td>
        <button type="button" class="btn-geral" data-bs-toggle="modal" data-bs-target="#modalDeletePol-{{$dadospoltrona->id}}">Excluir</button>
        @include('modal.poltronaDeletar')
      </td>  

    </tr>



<!-- Modal -->

   @endforeach
  </tbody>
</table>

</div>
@endif







@endsection