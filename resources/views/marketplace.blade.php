@extends('layouts.main')

@section('title', 'Museu do Vinil')
<head>
<link rel="icon" type="/image/png" href="/images/icons/icon-discoteca.png" />
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
</head>
<header class="masthead">
    <div class="container">
        <div class="input-group-prepend">
            <form action="/market" method="get">
                <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Search" id="search" name="search">
            </form>
        </div>
        @if($search)
        <p>Buscando por: {{$search}}</p>
        @endif
    </div>
</header>

@section('content')

<section class="page-section" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Marketplace</h2>
            <h3 class="section-subheading text">Veja o que outros usuários estão vendendo</h3>
        </div>
        <div class="row">
            @foreach($items as $item)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="/market/{{ $item->id }}">
                        <img class="img-fluid img-disco" src="/img/discos/{{ $item->img }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $item->name }}</div>
                        <div class="portfolio-caption-subheading text-muted">{{ $item->price }}</div>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $items->links() }}

            @if(count($items) == 0 && $search)
            <p>Não é possivel encontrar essa busca: {{$search}}</p>
            <a href="/market">Ver todas os discos</a>
            @elseif(count($items) == 0)
            <p>Não há notícias disponíveis</p>
            @endif
        </div>
    </div>
</section>

@endsection