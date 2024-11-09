@extends('layouts.app')

@section('title', 'Acerca de Ortographic')

@section('nav')
<li><a href="/">Inicio</a></li>
<li><a href="/acerca-de" class="active">Acerca de</a></li>
<li><a href="/galeria-de-fotos">Galeria de fotos</a></li>
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