@extends('layouts.main')

@section('title', 'Museu do Vinil')

<header class="masthead">
    <div class="container">
        <div class="input-group-prepend">
            <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search">
        </div>
    </div>
</header>

@section('content')

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Notícia
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="/post/{{ $post->id }}" class="btn btn-primary">Ler matéria</a>
                </div>
                <div class="card-footer text-muted">
                    <p>{{ $post->created_at }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection