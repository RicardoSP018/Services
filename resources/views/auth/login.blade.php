@extends('layouts.app2')
<title>Iniciar Sesión</title>
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="card">
           <div class="card-header"> <h1 style="color: #ffffff">Iniciar Sesión</h1></div>
                <div class="card-block">
            <form  method="POST" action="{{ route('login') }}">
                @csrf

                <input id="email"
                       type="email"
                       placeholder="Ingresa tu correo"
                       class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

                <input id="password"
                       type="password"
                       placeholder="Ingresa tu contraseña"
                       class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror


                <button type="submit" id="login-botton">
                    {{ __('Ingresar') }}
                </button>
                <br>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a><br>
                    <a style="color: #ffffff">
                        Ó
                    </a><br>
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Registrate') }}
                    </a>
                @endif
            </form>
                </div>
            </div>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
@endsection
