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

<div class="container px-4 px-lg-5">
  
    <div class="row gx-4 gx-lg-5 justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-10 col-lg-6 col-xl-7">
            <div class="post-preview">
                <a href="/post/{{ $post->id }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->description }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    {{ date('d/m/Y'), strtotime($post->created_at) }}
                </p>
            </div>
                    <!-- Divider-->
            <hr class="my-4" />
                    <!-- Post preview-->
           
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