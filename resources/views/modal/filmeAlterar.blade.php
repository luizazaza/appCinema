<!-- Modal -->
<div class="modal fade" id="modalAlterarFil-{{$dadosfilme->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="color: #fff; background-color: #2a2b38; background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg'); background-position: bottom center; background-repeat: no-repeat;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar filme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method = "post" action="{{route('alterar-banco-filme',$dadosfilme->id)}}">
    @method('PUT')
    @csrf
            <div class="mb-3 form-check">
                <label for="nomeInput" class="form-label">Nome do filme:</label>
                <input type="text" name="nomefilme" value="{{$dadosfilme->nomefilme}}" class="form-control" id="nomeInput" >
            </div>

            <div class="mb-3 form-check">
                <label for="emailInput" class="form-label">Atores:</label>
                <input type="text" name="atoresfilme" class="form-control" value="{{$dadosfilme->atoresfilme}}" id="emailInput">
            </div>

            <div class="mb-3 form-check">
                <label for="whatsappInput" class="form-label">Data de lançamento:</label>
                <input type="date" name="datalancamentofilme"class="form-control" value="{{$dadosfilme->datalancamentofilme}}" id="whatsappInput" >
            </div>
            
            <div class="mb-3 form-check">
                <label for="cpfInput" class="form-label">Sinopse do filme:</label>
                <input type="textarea" name="sinopsefilme" class="form-control" value="{{$dadosfilme->sinopsefilme}}" id="cpfInput">
            </div>

            <div class="mb-3 form-check">
                <label for="senhaInput" class="form-label">Capa:</label>
                <input type="file" name="capafilme"class="form-control" value="{{$dadosfilme->capafilme}}" id="senhaInput">
            </div>

           
            <button type="submit" class="btn-geral" class="btn-geral">Salvar</button>
        </form>

      
    
    
    </div>
      <div class="modal-footer">
        <button type="button" class="btn-geral" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>