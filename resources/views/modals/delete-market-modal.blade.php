<div id="deleteMarket{{ $market->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/market/{{ $market->id }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Deletar Disco</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza de que deseja excluir estes registros?</p>
                    <p class="text-warning"><small>Essa ação nao pode ser desfeita.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Deletar">
                </div>
            </form>
        </div>
    </div>
</div>