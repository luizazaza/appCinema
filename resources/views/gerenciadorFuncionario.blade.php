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

<form method="get" action="{{route('gerenciar-funcionario')}}">
  <div class="mb-3 row">
    <label for="inputPesquisar" class="col-sm-2 col-form-label">Pesquisar:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nomefun" id="inputPesquisar" placeholder="Digite o nome do funcionário" >
    </div>
    <div class="col-sm-2"> <button type="submit" class="btn-geral">Pesquisar</button> </div>
  </div>

</form>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <td>Código</td>
      <td>Nome</td>
      <td>Email</td>
      <td>Alterar</td>
      <td>Excluir</td>
    </tr>
  </thead>
  <tbody>
    @if(empty($_GET['nomefun']))
    @else
    @foreach($dadosfuncionario as $dadosfuncionarios)
    
    <tr>
      <th scope="row">{{$dadosfuncionarios->id}}</th>
      <td>{{$dadosfuncionarios->nomefun}}</td>
      <td>{{$dadosfuncionarios->emailfun}}</td>
      <td>
      <button type="button" class="btn-geral" data-bs-toggle="modal" data-bs-target="#modalAlterarFun-{{$dadosfuncionarios->id}}">
        Alterar
      </button>
      </td>
      <td>
      <button type="button" class="btn-geral" data-bs-toggle="modal" data-bs-target="#modalDeleteFun-{{$dadosfuncionarios->id}}">
        Excluir
      </button>
      </td>
    </tr>

    @include('modal.funcionarioAlterar')
    @include('modal.funcionarioDeletar')

   @endforeach
  </tbody>
</table>
</div>
@endif
@endsection