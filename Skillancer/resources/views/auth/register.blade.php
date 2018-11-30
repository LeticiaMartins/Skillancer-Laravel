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
{{ __('Register') }}
				<form name= "signup" action="{{ route('register') }}" method= "POST">
          @csrf

					<h1>crie sua conta</h1>

					<div class="form-wrapper" >
						<label name= "username" type="text" placeholder="Nome" class="form-control">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif


					<div class="form-wrapper">
						<input name= "username" type="text" placeholder="Sobrenome" class="form-control">

					<div class="form-wrapper">
						<input name= "username" type="text" placeholder="Nome de Usuárix" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>

					</div>


					<div class="form-wrapper">
						<label type="text" placeholder="Email" class="form-control">{{ __('E-Mail Address') }}</label>
						<i class="zmdi zmdi-email"></i>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
					</div>

					<div class="form-wrapper">
						<label type="password" placeholder="Senha" class="form-control">{{ __('Password') }}</label>
						<i class="zmdi zmdi-lock"></i>

            <div class="col-md-6">
                <input id="password" type="password-confirm" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
					</div>


					<div class="form-wrapper">
						<label type="password-confirm" placeholder="Confirmar Senha" class="form-control">{{ __('Confirm Password') }}</label>
						<i class="zmdi zmdi-lock"></i>

            <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
             </div>
					</div>
					<button>Enviar
            {{ __('Register') }}
					</button>
				</form>
			</div>
		</div>

@stop
