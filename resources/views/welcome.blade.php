@extends('layouts.app')

@section('title', 'Ortographic')

@section('nav')
<li><a href="/" class="active">Inicio</a></li>
<li><a href="/acerca-de">Acerca de</a></li>
<li><a href="/galeria-de-fotos">Galeria de fotos</a></li>
@if (Route::has('login'))

    @auth
    <li><a href="{{ url('/home') }}">
            Empezar a practicar
        </a></li>
    @else
    <li class="dropdown"><a href="#"><span>Practicar</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
            <li><a href="/login">Iniciar sesión</a></li>
            @if (Route::has('register'))
            <li><a href="/register">Crear una cuenta</a></li>
            <li><a href="#">Jugar como invitado</a></li>
            @endif
        </ul>
    </li>
    @endauth
@endif
<li><a href="/">Contacto</a></li>

@endsection

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <img src="{{ asset('assets/img/pagina-principal.jpg') }}" alt="" data-aos="fade-in">

    <!-- Donde las letras se vuelven tu juego. -->
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2>Ortographic</h2>
        <p><span class="typed" data-typed-items="Donde las letras se vuelven tu juego., ¿Crees tener buena ortografía?"></span><span class="typed-cursor typed-cursor--blink"></span></p>
        <div class="social-links">
            <!-- <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a> -->
            <a href="/home" style="width: auto; padding: 10px"><i class="bi bi-controller" style="margin: 10px;"></i> Empezar a practicar</a>
        </div>
    </div>

</section><!-- /Hero Section -->
@endsection