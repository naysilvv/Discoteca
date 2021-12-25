<div id="updatePost{{ $post->id }}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/post/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input value="{{ $post->title }}" type="text" name="name" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input value="{{ $post->description }}" type="text" name="description" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem do disco:</label>
                        <input type="file" id="image" name="img" class="form-control-file">
                        <br>
                        <img class="image-preview" src="/img/discos/{{ $post->img }}" width="100" height="50">
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