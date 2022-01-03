@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')
<header class="masthead" style="background-image: url('/img/posts/{{ $post->img }}')">
		
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
			  <div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-heading">
				  <h1>{{ $post->title }}</h1>
				  
				  <h2 class="subheading">{{ $post->description }}</h2>
				  
				  <span class="meta">Posted by
					<a href="#">nameauthor</a> 
					{{ date('d/m/Y'), strtotime($post->created_at) }} <span class="reading-time" title="Estimated read time"> </span>
	  
				</span>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">
			<p class="pdetailpost">{{ $post->content }}</p>
		</div>
	</div>
</div>


@endsection