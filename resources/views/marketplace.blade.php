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
                        <img class="img-fluid" src="/img/discos/{{ $item->img }}" alt="..." width="600" height="450"/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $item->name }}</div>
                        <div class="portfolio-caption-subheading text-muted">{{ $item->price }}</div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

@endsection