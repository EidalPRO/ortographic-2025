@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('nav')
<li><a href="/">Inicio</a></li>
<li><a href="/login" class="active">Iniciar sesión</a></li>
<li><a href="/register">Crear una cuenta</a></li>
<li><a href="#">Jugar como invitado</a></li>


@endsection

@section('style')
<style>
    .form-container {
        width: 100%;
        height: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    /* From Uiverse.io by Smit-Prajapati */
    .container-form {
        max-width: 350px;
        background: #F8F9FD;
        background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
        border-radius: 40px;
        padding: 25px 35px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
        margin: 20px;
    }

    .heading {
        text-align: center;
        font-weight: 900;
        font-size: 30px;
        color: rgb(16, 137, 211);
    }

    .form {
        margin-top: 20px;
    }

    .form .input {
        width: 100%;
        background: white;
        border: none;
        padding: 15px 20px;
        border-radius: 20px;
        margin-top: 15px;
        box-shadow: #cff0ff 0px 10px 10px -5px;
        border-inline: 2px solid transparent;
    }

    .form .input::-moz-placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input::placeholder {
        color: rgb(170, 170, 170);
    }

    .form .input:focus {
        outline: none;
        border-inline: 2px solid #12B1D1;
    }

    .form .forgot-password {
        display: block;
        margin-top: 10px;
        margin-left: 10px;
    }

    .form .forgot-password a {
        font-size: 11px;
        color: #0099ff;
        text-decoration: none;
    }

    .form .login-button {
        display: block;
        width: 100%;
        font-weight: bold;
        background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
        color: white;
        padding-block: 15px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 20px 10px -15px;
        border: none;
        transition: all 0.2s ease-in-out;
    }

    .form .login-button:hover {
        transform: scale(1.03);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
    }

    .form .login-button:active {
        transform: scale(0.95);
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
    }

    .social-account-container {
        margin-top: 25px;
    }

    .social-account-container .title {
        display: block;
        text-align: center;
        font-size: 10px;
        color: rgb(170, 170, 170);
    }

    .social-account-container .social-accounts {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 5px;
    }

    .social-account-container .social-accounts .social-button {
        background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
        border: 5px solid white;
        padding: 5px;
        border-radius: 50%;
        width: 40px;
        aspect-ratio: 1;
        display: grid;
        place-content: center;
        box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 12px 10px -8px;
        transition: all 0.2s ease-in-out;
    }

    .social-account-container .social-accounts .social-button .svg {
        fill: white;
        margin: auto;
    }

    .social-account-container .social-accounts .social-button:hover {
        transform: scale(1.2);
    }

    .social-account-container .social-accounts .social-button:active {
        transform: scale(0.9);
    }

    .agreement {
        display: block;
        text-align: center;
        margin-top: 15px;
    }

    .agreement a {
        text-decoration: none;
        color: #0099ff;
        font-size: 9px;
    }
</style>
@endsection

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<section class="form-container">

    <div class="container container-form">
        <div class="heading">Iniciar sesión</div>
        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf
            <input required="" class="input" type="email" name="email" id="email" placeholder="Correo electronico">
            @error('email')
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "{{ $message }} Usuario y/o contraseña incorrecta.",
                });
            </script>
            @enderror
            <input required="" class="input" type="password" name="password" id="password" placeholder="Contraseña">
            @error('password')
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "{{ $message }} Contraseña incorrecta.",
                });
            </script>
            @enderror
            <div class="form-check mt-3" style="color: black;">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Recuerdame') }}
                </label>
            </div>
            <span class="forgot-password"><a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></span>
            <input class="login-button" type="submit" value="Aceptar">
        </form>
        <div class="social-account-container">
            <span class="title">O puedes usar estas opciones</span>
            @if (session('error'))
            <script>
                Swal.fire({
                    title: "Error",
                    text: "{{ session('error') }}",
                    icon: "error"
                });
            </script>
            @endif
            <div class="social-accounts">
                <a class="social-button google" href="{{route('authGoogle.redirect')}}">
                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg></a>
                <a class="social-button apple" href="{{ route('auth.redirect') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.1em" class="svg" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                    </svg>
                </a>
            </div>
        </div>
        <span class="agreement"><a href="#">Lee nuestros terminos y condiciones</a></span>
    </div>
</section>

<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection