<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Feliz Aniversario</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/pastelicon.jpeg" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center">
                <h1>TE AMO<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#" class="active">Inicio</a></li>
                    <li><a href="#felicitaciones">Feliz Aniversario</a></li>
                    <li><a href="#love">Love</a></li>

                </ul>
            </nav>

        </div>
    </header>
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Feliz Aniversario <br> <span>Mi Niña</span></h2>
                        <p data-aos="fade-up">¡Hola, Amor! Hoy quiero darte algo especial por nuestro tercer aniversario. Sé que es sencillo, pero espero que te guste esta página que hice para ti. Aquí podrás ver algunos momentos que hemos vivido juntos. ¡Espero que lo disfrutes!.
                        </p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#felicitaciones"
                            class="btn-get-started">Felicidades</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(https://media1.tenor.com/m/58PKyK5xlIoAAAAC/anime.gif)">
            </div>
            <div class="carousel-item" style="background-image: url(https://media1.tenor.com/m/2hzy4e41AS0AAAAC/zhang-namra.gif);">
            </div>
            <div class="carousel-item" style="background-image: url(https://media1.tenor.com/m/JdpApI0hbZ8AAAAC/anime-kiss.gif)">
            </div>
            <div class="carousel-item" style="background-image: url(https://media1.tenor.com/m/MxDomL_TXZIAAAAC/anime-gif-anime.gif)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <main id="main">
            <section id="felicitaciones" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Felicitaciónes</h2>
                    </div>

                    <div class="slides-2 swiper">
                        <div class="swiper-wrapper">

                            @foreach ($congra as $c)
                                <div class="swiper-slide ">
                                    <div class="testimonial-wrap ">
                                        <div class="testimonial-item ">
                                            @if ($c->img == null)
                                                <img src="/assets/img/felicitaciones/no-img.jpeg"
                                                    class="testimonial-img" alt="">
                                            @else
                                                <img src="/assets/img/felicitaciones/{{ $c->img }}"
                                                    class="testimonial-img" alt="">
                                            @endif

                                            <h3 class="mayus">{{ $c->name }}</h3>
                                            <h4>{{ $c->identificador }}</h4>
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                {{ $c->description }}
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
            <section id="love" class="features section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Love</h2>
                    </div>

                    <ul class="nav nav-tabs row  g-2 d-flex">

                        <li class="nav-item col-3">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4><b>N</b>uestro Inicio</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4><b>C</b>reciendo Juntos</h4>
                            </a>
                        </li>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4><b>N</b>uestros Sueños</h4>
                            </a>

                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4><b>N</b>uestro Futuro</h4>
                            </a>
                        </li>



                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                    data-aos="fade-up" data-aos-delay="100">
                                    <h3>1.Nuestro Inicio</h3>
                                    <p>
                                        Desde que nos conocimos, supe que algo único estaba a punto de comenzar. Nuestra relación ha sido más que amor, también ha sido un viaje juntos de amistad, apoyo y crecimiento mutuo. Durante estos últimos tres años, hemos disfrutado de momentos inolvidables juntos, repletos de risas y complicidad, que han fortalecido nuestro vínculo de manera profunda. Al recordar nuestro pasado, me doy cuenta de lo mucho que hemos crecido juntos, y eso es algo que atesoro con gran cariño en mi corazón.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                    data-aos-delay="200">
                                    <img src="https://media1.tenor.com/m/XXPkLLIct-8AAAAC/kiss-cuddles.gif" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>3.Nuestros Sueños </h3>
                                    <p>
                                        Cada vez que hablamos del futuro juntos o hacemos planes, me llena de esperanza y felicidad. Pienso en un camino emocionante y lleno de experiencias, logros y aprendizajes que vivir juntos. Juntos podemos hacer realidad cualquier sueño, ya sea viajando o o construyendo un hogar, sé que cualquier sueño que tengamos es posible si estamos juntos. Estoy seguro de que, pase lo que pase, estare ahí el uno para el otro, apoyándonos incondicionalmente.
                                    </p>
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="https://i.pinimg.com/originals/a8/81/e2/a881e2cffe71075591c6ca8a6b86b2f9.gif" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-3">
                            <div class="row">

                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>4.Nuestro Futuro</h3>
                                    <p>
Estoy pensando en nuestro futuro juntos, aunque todavía no tengo claro cómo será. Quiero estar contigo en los próximos años, y quizás toda una vida, construyendo un hogar lleno de amor, respeto y alegría. Me veo compartiendo cada logro y alegría, y enfrentando juntos cualquier obstáculo como un equipo. Guardo en mi corazón el sueño de casarme contigo y formar una familia con mucho cariño. Sé que a medida que pasa el tiempo, continuaremos creciendo juntos y construyendo la vida que ambos anhelamos.
                                    </p>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="https://i.pinimg.com/564x/bb/b5/29/bbb52978e5f1c6ad6d4f8c2abf6284f3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">

                                <div
                                    class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                    <h3>2.Creciendo Juntos</h3>
                                    <p>
                                        construyendo un hogar. Siempre estaremos juntos, apoyándonos pase lo que pase.
                                        Durante estos 3 años he tenido el honor de ser testigo de tu crecimiento personal y de vislumbrar un poco de lo que te depara el futuro. Me siento orgulloso de ver tus logros y cómo progresas en todo lo que te propones. Juntos hemos superado desafíos, enfrentado obstáculos y aprendido de ellos, siempre apoyándonos unos a otros. Cada vez que avanzas, me animas a superarme más. Estoy feliz de estar contigo en cada momento y anticipar lo que viene por delante juntos.
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2 text-center">
                                    <img src="https://media1.tenor.com/m/CgDL5Bz-8fIAAAAC/yash.gif" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>



        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/vendor/aos/aos.js"></script>
        <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="/assets/vendor/php-email-form/validate.js"></script>

        <script src="/assets/js/main.js"></script>

</body>

</html>
