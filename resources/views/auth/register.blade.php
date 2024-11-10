@extends('layouts.app')



@section('title', 'Registrarse')

@section('nav')
<li><a href="/">Inicio</a></li>
<li><a href="/login">Iniciar sesión</a></li>
<li><a href="/register" class="active">Crear una cuenta</a></li>
<li><a href="#">Jugar como invitado</a></li>

<li>
        <label class="theme-switch" style="margin-left: 15px;">
            <input type="checkbox" class="theme-switch__checkbox">
            <div class="theme-switch__container">
                <div class="theme-switch__clouds"></div>
                <div class="theme-switch__stars-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 55" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M135.831 3.00688C135.055 3.85027 134.111 4.29946 133 4.35447C134.111 4.40947 135.055 4.85867 135.831 5.71123C136.607 6.55462 136.996 7.56303 136.996 8.72727C136.996 7.95722 137.172 7.25134 137.525 6.59129C137.886 5.93124 138.372 5.39954 138.98 5.00535C139.598 4.60199 140.268 4.39114 141 4.35447C139.88 4.2903 138.936 3.85027 138.16 3.00688C137.384 2.16348 136.996 1.16425 136.996 0C136.996 1.16425 136.607 2.16348 135.831 3.00688ZM31 23.3545C32.1114 23.2995 33.0551 22.8503 33.8313 22.0069C34.6075 21.1635 34.9956 20.1642 34.9956 19C34.9956 20.1642 35.3837 21.1635 36.1599 22.0069C36.9361 22.8503 37.8798 23.2903 39 23.3545C38.2679 23.3911 37.5976 23.602 36.9802 24.0053C36.3716 24.3995 35.8864 24.9312 35.5248 25.5913C35.172 26.2513 34.9956 26.9572 34.9956 27.7273C34.9956 26.563 34.6075 25.5546 33.8313 24.7112C33.0551 23.8587 32.1114 23.4095 31 23.3545ZM0 36.3545C1.11136 36.2995 2.05513 35.8503 2.83131 35.0069C3.6075 34.1635 3.99559 33.1642 3.99559 32C3.99559 33.1642 4.38368 34.1635 5.15987 35.0069C5.93605 35.8503 6.87982 36.2903 8 36.3545C7.26792 36.3911 6.59757 36.602 5.98015 37.0053C5.37155 37.3995 4.88644 37.9312 4.52481 38.5913C4.172 39.2513 3.99559 39.9572 3.99559 40.7273C3.99559 39.563 3.6075 38.5546 2.83131 37.7112C2.05513 36.8587 1.11136 36.4095 0 36.3545ZM56.8313 24.0069C56.0551 24.8503 55.1114 25.2995 54 25.3545C55.1114 25.4095 56.0551 25.8587 56.8313 26.7112C57.6075 27.5546 57.9956 28.563 57.9956 29.7273C57.9956 28.9572 58.172 28.2513 58.5248 27.5913C58.8864 26.9312 59.3716 26.3995 59.9802 26.0053C60.5976 25.602 61.2679 25.3911 62 25.3545C60.8798 25.2903 59.9361 24.8503 59.1599 24.0069C58.3837 23.1635 57.9956 22.1642 57.9956 21C57.9956 22.1642 57.6075 23.1635 56.8313 24.0069ZM81 25.3545C82.1114 25.2995 83.0551 24.8503 83.8313 24.0069C84.6075 23.1635 84.9956 22.1642 84.9956 21C84.9956 22.1642 85.3837 23.1635 86.1599 24.0069C86.9361 24.8503 87.8798 25.2903 89 25.3545C88.2679 25.3911 87.5976 25.602 86.9802 26.0053C86.3716 26.3995 85.8864 26.9312 85.5248 27.5913C85.172 28.2513 84.9956 28.9572 84.9956 29.7273C84.9956 28.563 84.6075 27.5546 83.8313 26.7112C83.0551 25.8587 82.1114 25.4095 81 25.3545ZM136 36.3545C137.111 36.2995 138.055 35.8503 138.831 35.0069C139.607 34.1635 139.996 33.1642 139.996 32C139.996 33.1642 140.384 34.1635 141.16 35.0069C141.936 35.8503 142.88 36.2903 144 36.3545C143.268 36.3911 142.598 36.602 141.98 37.0053C141.372 37.3995 140.886 37.9312 140.525 38.5913C140.172 39.2513 139.996 39.9572 139.996 40.7273C139.996 39.563 139.607 38.5546 138.831 37.7112C138.055 36.8587 137.111 36.4095 136 36.3545ZM101.831 49.0069C101.055 49.8503 100.111 50.2995 99 50.3545C100.111 50.4095 101.055 50.8587 101.831 51.7112C102.607 52.5546 102.996 53.563 102.996 54.7273C102.996 53.9572 103.172 53.2513 103.525 52.5913C103.886 51.9312 104.372 51.3995 104.98 51.0053C105.598 50.602 106.268 50.3911 107 50.3545C105.88 50.2903 104.936 49.8503 104.16 49.0069C103.384 48.1635 102.996 47.1642 102.996 46C102.996 47.1642 102.607 48.1635 101.831 49.0069Z" fill="currentColor"></path>
                    </svg>
                </div>
                <div class="theme-switch__circle-container">
                    <div class="theme-switch__sun-moon-container">
                        <div class="theme-switch__moon">
                            <div class="theme-switch__spot"></div>
                            <div class="theme-switch__spot"></div>
                            <div class="theme-switch__spot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </label>
</li>

@endsection

@section('style')
<style>
    .form-container {
        width: 100%;
        height: 700px;
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
        <div class="heading">Registrarse</div>
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf
            <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario" required autocomplete="name" autofocus>
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
            <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
            @error('password')
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "{{ $message }}.",
                });
            </script>
            @enderror
            <span class="forgot-password"><a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión aquí</a></span>
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

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection