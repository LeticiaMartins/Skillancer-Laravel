@extends('layouts.app')

@section('css-custom', '/css/cadastro.css')
@section('content')

<style>



.box{
	position: relative;

}

.box1 {
	position: absolute;
	    top: 0;
	    width: 271px;
	    left: 0;
	    box-sizing: border-box;
	    margin: 0px;
	    padding: 0;
}
.box1 a{
	position: relative;
    left: -14px;
    font-size: 12px;
}


.form-group input {
    width: 100%;
}

.form-check{
	position: absolute;
    display: block;
    padding-left: 1.25rem;
    left: -129px;
    top: 0;
}
.form-check-input {
    position: static;
    margin-top: .3rem;
    margin-left: -1.25rem;
}
</style>

<div class="wrapper">

    <div class="inner">
        <div class="image-holder">
            <img src="images/bloom.jpg" alt="">
        </div>

        <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-10">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-10">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Senha" required>

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
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label" for="remember">{{('Lembrar')}}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0 box">
                    <div class="col-md-8 offset-md-4 box1">
                        <button type="submit" class="btn btn-primary">
                            {{('Login')}}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{('Forgot Your Password?')}}
                        </a>
                    </div>
                </div>
            </form>
    </div>
</div>
  @stop
