@extends('layouts.app')

@section('title', 'Ortographic galeria')

@section('link-head')
<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{asset('assets/css/galeria.css')}}" rel="stylesheet">

@endsection

@section('style')
<style>
    body {
        color: var(--default-color);
        background-color: var(--background-color);
        font-family: var(--default-font);
        background: url(assets/img/bg.jpg) top center no-repeat;
        background-size: cover;
        position: relative;
    }
</style>
@endsection

@section('name-nav')
<h1 class="sitename">Ortographic</h1>
@endsection

@section('nav')
<li><a href="/">Inicio</a></li>
<li><a href="/acerca-de">Acerca de</a></li>
<li><a href="/galeria-de-fotos" class="active">Galeria de fotos</a></li>
<li class="dropdown"><a href="#"><span>Practicar</span> <i
            class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
        <li><a href="/login">Iniciar sesión</a></li>
        <li><a href="/register">Crear una cuenta</a></li>
        <li><a href="#">Jugar como invitado</a></li>
    </ul>
</li>
<li><a href="/">Contacto</a></li>
@endsection

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section transparent-background">

    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>Pagina en construcción</h2>
                <p>Estamos trabajando en ello. Pronto se actualizara la pagina!</p>
            </div>
            <div class="countdown d-flex justify-content-center" data-count="2025/12/3">
                <div>
                    <h3 class="count-days">482</h3>
                    <h4>Días</h4>
                </div>
                <div>
                    <h3 class="count-hours">6</h3>
                    <h4>Horas</h4>
                </div>
                <div>
                    <h3 class="count-minutes">49</h3>
                    <h4>Minutos</h4>
                </div>
                <div>
                    <h3 class="count-seconds">41</h3>
                    <h4>Segundos</h4>
                </div>
            </div>

            <!-- <div class="col-lg-5 hero-newsletter">
                <p>Subscribe now to get the latest updates!</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div> -->

            <div class="social-links">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </div>

</section><!-- /Hero Section -->

@endsection

@section('link-js')
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/galeria.js')}}"></script>
@endsection