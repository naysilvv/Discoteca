@extends('layouts.main')

@section('title', 'Museu do Vinil')

@section('content')

<div class="container-login100">
	<form action="/market" method="POST" class="logincadastrodisco validate-form" enctype="multipart/form-data">
		@csrf
		<span class="login100-form-title p-b-43">
			Cadastre seu Disco
		</span>

		<div class="row">

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Nome do disco</span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="artist">
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
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
				</div>
			</div>


			<div class="col-md-6 col-xs-6">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="year">
						<span class="focus-input100"></span>
						<span class="label-input100">Ano</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6 col-xs-7">
				<div class="form-group">
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="price">

						<span class="focus-input100"></span>
						<span class="label-input100">Valor</span>

					</div>

				</div>
			</div>
			<div class="col-md-2 col-xs-7">
				<div class="form-group">
					<div class="max-width">
						<div class="ImageContainer">
							<img src="/img/photo.png" id="image" alt="selecione uma imagem">
						</div>
					</div>

					<input type="file" name="img" id="flimage" accept="image/*">

				</div>

			</div>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
			<input class="input100" type="text" name="description">
			<span class="focus-input100"></span>
			<span class="label-input100">Descrição</span>
		</div>
		<div class="flex-sb-m w-full p-t-3 p-b-32">
		</div>
		<div class="container-login100-form-btn">
			<button class="login100-form-btn">
				Registrar
			</button>
		</div>
	</form>
</div>

@endsection