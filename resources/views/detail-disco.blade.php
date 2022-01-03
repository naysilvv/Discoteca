@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/img/discos/{{ $market->img }}" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $market->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span>R$ {{ $market->price }}</span>
                    </div>
                    <p class="lead">Artista: {{ $market->artist }}</p>
					<p class="lead">Ano: {{ $market->year }}</p>
					<p class="lead">Descrição: {{ $market->description }}</p>
					<p class="lead">Email: {{ $marketOwner->email }}</p>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi bi-hand-index-thumb-fill"></i>
                                Entrar em contato
                        </button>
                    </div>
                </div>
        </div>
    </div>
</section>
@endsection

<!-- About
		
<div class="container-login100">
	<div class="row">
		<div>
			<input type="text" class="oi" value="Nayara4" disabled>
			<input type="text" class="oi"  value="Nayara2" disabled>
		/div>
		<div class="col-md-6 col-xs-5">
			<div class="form-group">
				<div class="ImageContainer2">
					<img src="disco.png" id="image2" alt="imagem do disco">
				</div>
			</div>
		</div> 
	</div>
</div>
-->
