@extends('layouts.main')

@section('title', 'Museu do Vinil')

<header class="masthead">
    <div class="container">
        <div class="input-group-prepend">
            <form action="/" method="get">
                 <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search" id="search" name="search">
            </form>
        </div>
        @if($search)
        <p>Buscando por: {{$search}}</p>
         @endif
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
                    <p>{{ date('d/m/Y'), strtotime($post->created_at) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
     @if(count($posts) == 0 && $search)
            <p>Não é possivel encontrar essa busca: {{$search}}</p>
            <a href="/">Ver todas as postagens</a>
        @elseif(count($posts) == 0)
            <p>Não há notícias disponíveis</p>
        @endif    
</div>
 
@endsection