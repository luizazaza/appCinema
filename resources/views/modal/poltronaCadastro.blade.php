<style>
.container
{
  display:flex;
  margin-top:50px;
  width:57%;
  flex-wrap:wrap;
  justify-content: center;
  align-items: center;
}
form
{
  margin:3px;
}
.btn-primary
{
  font-size:0.9rem;
}
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


<div class="container" style="color: #fff; background-color: #2a2b38; background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); background-position: bottom center; background-repeat: no-repeat;">

@for ($i = 1; $i <= 95; $i++)
<form method = "post" action="{{route('cadastro-poltrona')}}">
@csrf
<input type="button" class="btn-danger" name="minhaEntrada" value="{{$i}}"  data-bs-target="#exampleModal{{$i}}" data-bs-toggle="modal" data-valor="{{ $i }}">

<div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #2a2b38; background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); background-position: bottom center; background-repeat: no-repeat;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Reservar poltrona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nome do cliente:</label>
            <input type="text" class="form-control" name="nomeclie" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Número da poltrona:</label>
            <input type="text" class="form-control" value="{{$i}}" name="id" id="message-text" readonly required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-geral" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn-geral">Reservar</button>
      </div>
    </div>
  </div>
</div>
</form>
@endfor
</div>