@extends('layouts.main-dashboard')

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
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    @include('modals.update-post-modal', array('post' => $post))
                    @include('modals.delete-post-modal', array('post' => $post))
                    <tr>
                        <td>{{$loop->index + 1}}</td>
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
            <p>Você ainda não tem posts registrados, <a href="/post/create">cadastre um post aqui</a></p>
            @endif
            <div class="clearfix">
                <div class="hint-text">Mostrando {{$posts->count()}} Posts</div>
            </div>
        </div>
    </div>
</div>

@endsection