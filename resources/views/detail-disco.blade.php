@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="container-login100">
	<form class="logincadastrodisco validate-form">
		<div class="disco9">
			<input type="text" id="image22" class="oi" size="30" value="{{ $market->name }}" disabled>
			<input type="text" id="image22" class="oi" size="30" value="{{ $market->artist }}" disabled>
			<input type="text" id="image22" class="oi" size="30" value="{{ $market->year }}" disabled>
			<input type="text" id="image22" class="oi" size="30" value="{{ $market->price }}" disabled>
			<input type="textarea" id="image22" class="oi" size="30" value="{{ $market->description }}" disabled>
			<input type="text" id="image22" class="oi" size="30" value="{{ $marketOwner->email }}" disabled>
		</div>
		<br>
		<div class="disco9">
			<div class="ImageContainer2">
				<img src="/img/discos/{{ $market->img }}" class="img-fluid" id="image22" alt="imagem do disco">
			</div>
		</div>
	</form>
</div>

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
