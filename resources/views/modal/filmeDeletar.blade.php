<div class="modal fade" id="modalDeleteFil-{{$dadosfilme->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="color: #fff; background-color: #2a2b38; background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); background-position: bottom center; background-repeat: no-repeat;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Filme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Deseja excluir o(a) filme(a): {{$dadosfilme->id}} ?</br>
      Esta operação não podera ser revertida.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-geral" data-bs-dismiss="modal">Cancelar</button>
        <form method="post" action="{{route('apagar-filme',$dadosfilme->id)}}">
        @method('delete')
        @csrf 
        <button type="submit" class="btn-geral">Excluir</button>
      </form>
      </div>
    </div>
  </div>
</div>