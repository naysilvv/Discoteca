<div id="updateMarket{{ $market->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/market/update/{{ $market->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{ $market->name }}" type="text" name="name" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Artista</label>
                        <input value="{{ $market->artist }}" type="text" name="artist" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Ano</label>
                        <input value="{{ $market->year }}" type="text" name="year" class="form-control-edtdisco" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="4">
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input value="{{ $market->price }}" type="text" name="price" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input value="{{ $market->description }}" type="text" name="description" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem do disco:</label>
                        <input type="file" id="image" name="img" class="form-control-file">
                        <br>
                        <img class="image-preview" src="/img/discos/{{ $market->img }}" width="100" height="50">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Salvar">
                </div>
            </form>
        </div>
    </div>
</div>