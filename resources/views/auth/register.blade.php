@extends('layouts.app2')
<title>Registrate</title>
@section('content')
    <div class="wrapper">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="color: #ffffff" class="card-header"><h3>Registrate</h3></div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="color: #ffffff" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <span>
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </span>
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #ffffff" for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #ffffff" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #ffffff" for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                        <label style="color: #ffffff" for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                                                    <div class="col-md-6">
                            <input type="file" name="imagen" class="input">
                        </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Ya tienes una cuenta?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
