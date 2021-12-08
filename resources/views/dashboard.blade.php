@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Museu do Vinil</b></h2>
                    </div>
                </div>
            </div>
            @if (count($markets) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Artista</th>
                        <th>Valor</th>
                        <th>Ano</th>
                        <th>Acao</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($markets as $market)
                    <tr>
                        <td><a href="/market/{{ $market->id }}">{{ $market->name }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->artist }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->price }}</a></td>
                        <td><a href="/market/{{ $market->id }}">{{ $market->year }}</a></td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> de <b>25</b> entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Proximo</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Disco</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Artista</label>
                        <input type="text" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Ano</label>
                        <input type="text" class="form-control-edtdisco" required>
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" class="form-control-edtdisco" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Adicionar">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
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
                        <input value="{{ $market->year }}" type="text" name="year" class="form-control-edtdisco" required>
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
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
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

@else
<p>Você ainda não tem discos registrados, <a href="/market/create">cadastre um disco aqui</a></p>
@endif

@endsection