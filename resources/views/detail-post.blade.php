@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="col-lg-8 col-md-10 mx-auto">
	<div class="card-body">
		<div class="text-center">
			<img src="/img/posts/{{ $post->img }}" class="img-fluid" alt="{{ $post->title }}">
			<h2 class="section-heading text-uppercase">{{ $post->title }}</h2>
			<p class="card-text">{{ $post->content }}</p>
		</div>
	</div>
</div>

@endsection