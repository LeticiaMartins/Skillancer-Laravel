@extends('layouts.app')

@section('content')

<style>

.bg {
 background-size: cover;
 background-repeat: no-repeat;
 background-position:center;
 align-items: center;
}

.box1{
    margin:90px ;
    
}


footer{
    margin-bottom: 0px;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 box1">
            <div class="card">
                <div class="card-header">{{ __('Redefinir senha') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label  for="email" class="col-md-4 col-form-label text-md-right">{{ __('Seu e-mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar link para redefinir senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
