@extends('layouts.app')

@section('title', 'Acerca de Ortographic')

@section('nav')
<li><a href="/">Inicio</a></li>
<li><a href="/acerca-de" class="active">Acerca de</a></li>
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

@section('content')
<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Acerca de Ortographic</h1>
                    <p class="mb-0">Ortographic es una plataforma diseñada para ayudarte a mejorar tu ortografía
                        de una manera divertida y educativa. Nos comprometemos a ofrecerte una experiencia
                        interactiva que haga que aprender ortografía sea más fácil y entretenido que nunca.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Inicio</a></li>
                <li class="current">Acerca de Ortographic</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Stats Section -->
<section id="stats" class="stats section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-emoji-smile"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Usuarios registrados</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-journal-richtext"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Reactivos para practicar</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-headset"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Soporte las 24 horas</p>

                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-people"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Personas por sala</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- /Stats Section -->

<section class="acerca-de">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Importancia de la ortografía</h2>
        <div><span>¿Por qué</span> <span class="description-title"> es importante tener buena ortografía?</span>
        </div>
    </div><!-- End Section Title -->

    <div class="container" style="text-align: justify;" data-aos="fade-up">
        <p>
            La ortografía correcta es una habilidad fundamental en la comunicación escrita. No se trata
            simplemente de seguir reglas gramaticales, sino de transmitir tus ideas de manera clara y efectiva.
            Una buena ortografía no solo facilita la comprensión de tu mensaje, sino que también demuestra tu
            atención al detalle y tu respeto por el lector. En entornos profesionales, académicos y personales,
            la ortografía adecuada puede marcar la diferencia entre una comunicación exitosa y una que caiga en
            el olvido. Es una herramienta poderosa que puede aumentar tu credibilidad, mejorar tu imagen y abrir
            puertas hacia nuevas oportunidades. Por lo tanto, dedicar tiempo y esfuerzo a mejorar tus
            habilidades ortográficas no solo es una inversión en ti mismo, sino también en tu capacidad para
            comunicarte con eficacia en el mundo que te rodea.
        </p>
    </div>
</section>


<!-- Interests Section -->
<section id="interests" class="interests section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>¿Cómo usar Ortographic?</h2>
        <div><span>Descarga nuestros</span> <span class="description-title"> manuales</span></div>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <!-- <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                            <h3><a href="" class="stretched-link">Sed perspiciatis</a></h3>
                        </div>
                    </div> -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="features-item">
                    <i class="bi bi-mortarboard" style="color: #e361ff;"></i>
                    <h3><a href="" class="stretched-link">Manual de usuario</a></h3>
                </div>
            </div><!-- End Feature Item -->

            <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                <div class="features-item">
                    <i class="bi bi-mortarboard" style="color: #4233ff;"></i>
                    <h3><a href="" class="stretched-link">Manual de instalación</a></h3>
                </div>
            </div><!-- End Feature Item -->
        </div>
    </div>

</section><!-- /Interests Section -->

<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Equipo</h2>
        <div><span>Equipo de</span> <span class="description-title">Trabajo</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <!-- <div class="col-lg-4">
                        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div> -->
            <div class="col-lg-8 content">
                <h2>Asesores &amp; programadores web.</h2>
                <!-- <p class="fst-italic py-3">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p> -->
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nombre: </strong> <span>Eidal
                                    Marquez Ambrosio.</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Cargo: </strong>
                                <span>Autor 1.</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nombre: :</strong> <span>Roberto
                                    Ruiz Mendoza.</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Cargo: </strong> <span>Asesor
                                    técnico.</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nombre: </strong> <span>Maia
                                    Michelle Morales Ramíres.</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Cargo: </strong> <span>Autor
                                    2.</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nombre: </strong>
                                <span>Elva Yuridia Morales Luis.</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Cargo: </strong>
                                <span>Asesor metodológico.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <p class="py-3">
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque.
                        </p> -->
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>En que lenguaje esta construido Ortographic</h2>
        <div><span>Framework</span> <span class="description-title">Laravel</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

                <div class="progress">
                    <span class="skill"><span>JavaScript</span> <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

                <div class="progress">
                    <span class="skill"><span>PHP</span> <i class="val">95%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div><!-- End Skills Item -->

            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>Check my</span> <span class="description-title">Testimonials</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000"
            data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 1,
                            "spaceBetween": 40
                        },
                        "1200": {
                            "slidesPerView": 3,
                            "spaceBetween": 20
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                        <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                            rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                            risus at semper.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                quis sint minim.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                illum veniam.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                nisi cillum quid.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->
@endsection