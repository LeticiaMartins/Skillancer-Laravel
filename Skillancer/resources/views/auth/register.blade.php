@extends('layouts.app')

@section('css-custom', '/css/cadastro.css')
@section('content')

		<div class="wrapper" style="background-image: url('/images_cadastro/bg-registration-form-1.jpg');">

		<a href="index.php"><h1>Skillancers</h1></a>

		<div class= "logo">
					<a class= "fontelogo" href="index.php"><img src="/images_cadastro/logo.png" alt="" width= "50" height= "50"></a>
				</div>

			<div class="inner">
				<div class="image-holder">
					<img src="/images_cadastro/homem.jpg" alt="">
				</div>

				<form name= "signup" action="{{ route('register') }}" method= "POST">
					@csrf
					<h1>crie sua conta</h1>


					<div class="form-wrapper">
						<input id="name" name="name" type="text" placeholder="Nome" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('name') }}</strong>
								</span>
						@endif

					<div class="form-wrapper">
						<input id="sobrenome" name= "sobrenome" type="text" placeholder="Sobrenome" class="form-control{{ $errors->has('sobrenome') ? ' is-invalid' : '' }}" value="{{ old('sobrenome') }}">

						@if ($errors->has('sobrenome'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('sobrenome') }}</strong>
								</span>
						@endif

					<div class="form-wrapper">
						<input id="user" name= "username" type="text" placeholder="Nome de Usuário" class="form-control{{ $errors->has('user') ? ' is-invalid' : '' }}" value="{{ old('user') }}">

						@if ($errors->has('user'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('user') }}</strong>
								</span>
						@endif

						<i class="zmdi zmdi-account"></i>

					</div>

					</div>
					<div class="form-wrapper">
						<input id="email" type="text" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
								</span>
						@endif

						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input id="password" type="password" placeholder="Senha" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

						@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif

						<i class="zmdi zmdi-lock"></i>
					</div>


					<div class="form-wrapper">
						<input id="password-confirm" type="password" placeholder="Confirmar Senha" class="form-control" name="password_confirmation" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Enviar
					</button>
				</form>
			</div>
		</div>
    @stop
