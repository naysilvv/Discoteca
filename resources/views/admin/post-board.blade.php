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
            @if (count($posts) > 0)
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    @include('modals.update-post-modal', array('post' => $post))
                    @include('modals.delete-post-modal', array('post' => $post))
                    <tr>
                        <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                        <td><a href="/post/{{ $post->id }}">{{ $post->description }}</a></td>
                        <td>
                            <a href="#updatePost{{ $post->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deletePost{{ $post->id }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Você ainda não tem discos registrados, <a href="/post/create">cadastre um disco aqui</a></p>
            @endif
            <div class="clearfix">
                <div class="hint-text">Mostrando <b>9</b> de <b>25</b> entradas</div>
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

@endsection