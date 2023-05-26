<div class="modal fade" id="modalDeletePol-{{$dadospoltrona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color: #ffff; background-color: #2a2b38; background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); background-position: bottom center; background-repeat: no-repeat;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir poltrona</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja excluir a Poltrona: {{$dadospoltrona->id}} ?</br>
        Esta operação não poderá ser revertida.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-geral" data-bs-dismiss="modal">Cancelar</button>

        <form method="post" action="{{route('apagar-poltrona',$dadospoltrona->id)}}">
            @method('delete')
            @csrf 
            <button type="submit" class="btn-geral"> Excluir </button>
        </form>
      </div>
    </div>
  </div>
</div>