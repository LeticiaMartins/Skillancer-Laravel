<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Skillancers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/css/style.css">
		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

		<style>

		.logo{

			margin-bottom:550px;
			margin-left: 140px;
		}

		h1{
			position: fixed;
			font-family: "Kaushan Script", cursive;
			color: #fcf7eb;
			text-decoration: none;
			font-weight: 700;
			margin-top: -300px;
			letter-spacing: 1px;
			margin-left: 3px;
		}

		</style>
	</head>

	<body>
<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">

<a href="index.php"><h1>Skillancers</h1></a>

<div class= "logo">
            <a class= "fontelogo" href="index.php"><img src="images/logo.png" alt="" width= "50" height= "50"></a>
        </div>

    <div class="inner">
        <div class="image-holder">
            <img src="images/bloom.jpg" alt="">
        </div>

        <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
    </div>
</div>
</body>
</html>
