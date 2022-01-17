@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="container-login100">
	<form action="/market" method="POST" class="logincadastrodisco validate-form" id="form" enctype="multipart/form-data">
		@csrf
		<hr class="my-4" />
		<span class="login100-form-title p-b-43">
			Cadastre seu Disco
		</span>

		<div class="row">

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" id="name" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Nome do disco</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="artist" id="artist" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Artista</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-xs-6">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="year" id="year" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="4">
						<span class="focus-input100"></span>
						<span class="label-input100">Ano</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="number" name="price" id="price" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Valor</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-xs-7">
				<div class="form-group">
					<div class="max-width">
						<div class="ImageContainer">
							<img src="/img/photo.png" id="image" alt="selecione uma imagem">
						</div>
					</div>
					<input type="file" name="img" id="flimage" accept="image/*" required>
				</div>
			</div>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
			<input class="input100" type="text" name="description" required>
			<span class="focus-input100"></span>
			<span class="label-input100">Descrição</span>
		</div>
		<div class="flex-sb-m w-full p-t-3 p-b-32">
		</div>
		<div class="container-login100-form-btn">
			<button class="login100-form-btn" id="send">
				Registrar
			</button>
		</div>
	</form>
</div>

@endsection