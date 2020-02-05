<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="es" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="es" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html
    lang="es"
    class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boda - [Manuela y Juan Pablo]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="author" content="Manuela y Juan Pablo"/>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta
        name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}} ">

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link
        href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

    <!-- Animate.css -->
    <link
        rel="stylesheet" href="{{ asset('css/animate.css')  }}" >
    <!-- Icomoon Icon Fonts-->
    <link
        rel="stylesheet" href="{{ asset('css/icomoon.css')  }}">
    <!-- Simple Line Icons -->
    <link
        rel="stylesheet" href="{{ asset('css/simple-line-icons.css')  }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')  }}">
    <link
        rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')  }}">
    <!-- Magnific popup  -->
    <link
        rel="stylesheet" href="{{ asset('css/magnific-popup.css')  }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">

    <link
        rel="stylesheet" href="{{ asset('css/style.css')  }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js')  }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js')  }}"></script>
    <![endif]-->

</head>
<body>
<header role="banner" id="qbootstrap-header">
    <div
        class="container">
        <!-- <div class="row"> -->
        <nav class="navbar navbar-default">
            <div
                class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-qbootstrap-nav-toggle qbootstrap-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <i></i>
                </a>
                <a class="navbar-brand" href="#">Nuestra Boda</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#" data-nav-section="home">
                            <span>Bienvenidos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-nav-section="story">
                            <span>Historia de Amor</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-nav-section="when-where">
                            <span>¿Donde y Cuando?</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-nav-section="rsvp">
                            <span>Confirmar Asistencia</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- </div> -->
    </div>
</header>

<div class="qbootstrap-hero" data-section="home">
    <div class="qbootstrap-overlay"></div>
    <div class="qbootstrap-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url( {{ asset('images/fondos/fondo2.jpg') }})">
        <div class="display-t">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="animate-box svg-sm colored">
                            <img src="{{ asset('images/flaticon/svg/004-nature.svg') }}" class="svg" alt="Manuela y Juan Pablo">
                            <h1 class="holder">
                                <span>La boda de</span>
                            </h1>
                            <h2>Manuela &amp; Juan Pablo</h2>
                            <p>29.02.2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qbootstrap-couple" class="qbootstrap-section-gray">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Manuela y Juan Pablo">
                    <h2>Tendran su boda</h2>
                    <p>Albert Einstein dijo que las leyes de gravitación no pueden ser las responsables de que las personas caigan en el amor. ¿Cómo rayos se pueden explicar en términos físicos y químicos un fenómeno biológico tan importante como el primer amor? Pon tu mano en la estufa encendida por un minuto y se sentirá como si fuese una hora. Siéntate junto a tu persona especial por una hora y sentirás como si fuese un minuto, a eso se le llama relatividad.</p>
                    <p>
                        <strong>El 29 de febrero de 2020 &mdash; Medellin, Antioquia</strong>
                    </p>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                    <img src="{{asset('images/novios/pablo.jpg')}}" class="img-responsive" alt="Manuela y Juan Pablo">
                    <h3>Juan Pablo Hurtado</h3>
                    <span>Novio</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                    <h2 class="amp-center"><img src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg img-responsive" alt="Manuela y Juan Pablo"></h2>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                    <img src="{{asset('images/novios/manuela.jpg')}}" class="img-responsive" alt="Manuela y Juan Pablo">
                    <h3>Manuela Mesa Arroyave</h3>
                    <span>Novia</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qbootstrap-countdown" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/fondos/fondo1.png')}});" data-section="wedding-day">
    <div class="overlay"></div>
    <div class="display-over">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 section-heading text-center svg-sm colored">
                    <img src="{{asset('images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg')}}" class="svg" alt="Manuela y Juan Pablo">
                    <h2 class="">El Día De La Boda</h2>
                    <span class="datewed">Sábado, febrero 29, 2020</span>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p class="countdown">
                        <span id="days"></span>
                        <span id="hours"></span>
                        <span id="minutes"></span>
                        <span id="seconds"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="qbootstrap-story" data-section="story">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm-2">
                    <img src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg" alt="Manuela y Juan Pablo">
                    <h2>Nuestra Historia de Amor</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline animate-box">
                    <li class="animate-box">
                        <div class="timeline-badge" style="background-image:url({{asset('images/historia/01.jpeg')}});"></div>
                        <div class="timeline-panel">
                            <div class="overlay"></div>
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Cuando nos conocimos</h3>
                                <span class="date">14 de Abril, 2010</span>
                            </div>
                            <div class="timeline-body">
                                <p>Casualmente vivíamos en el mismo edificio, Manuela dejo las llaves en casa ese día en la mañana y mientras ella esperaba que alguien llegara, como caído del cielo llegue yo y sin pensarlo dos veces decidí presentarme sin saber que de ahí en adelante nunca nos íbamos a separar.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge" style="background-image:url({{asset('images/historia/02.jpeg')}});"></div>
                        <div class="timeline-panel">
                            <div class="overlay overlay-2"></div>
                            <div class="timeline-heading">
                                <h3 class="timeline-title">¿Quieres ser mi novio?</h3>
                                <span class="date">19 de Abril, 2020</span>
                            </div>
                            <div class="timeline-body">
                                <p>Solo habían pasado 5 días de conocernos y no habíamos parado de pensarnos y hablar por un minuto, ese día después de llegar del colegio el me pregunta ¿Nosotros que somos? Mi respuesta fue ¿quieres ser mi novio?.</p>
                            </div>
                        </div>
                    </li>
                    <li class="animate-box">
                        <div class="timeline-badge" style="background-image:url({{asset('images/historia/03.jpeg')}});"></div>
                        <div class="timeline-panel">
                            <div class="overlay"></div>
                            <div class="timeline-heading">
                                <h3 class="timeline-title">Nuevos Rumbos</h3>
                                <span class="date">26 de Febrero, 2017</span>
                            </div>
                            <div class="timeline-body">
                                <p>Cada día que pasábamos juntos traía sus nuevos retos y obstáculos los cuales enfrentamos tomados de la mano, salimos adelante hasta tomar la decisión de vivir una nueva aventura y nos fuimos a vivir solos.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted animate-box">
                        <div class="timeline-badge" style="background-image:url({{asset('images/historia/04.jpeg')}});"></div>
                        <div class="timeline-panel">
                            <div class="overlay overlay-2"></div>
                            <div class="timeline-heading">
                                <h3 class="timeline-title">¿Quieres ser mi esposa?</h3>
                                <span class="date">6 de Diciembre, 2019</span>
                            </div>
                            <div class="timeline-body">
                                <p>Después de un largo día de trabajo nos encontramos para asistir a un evento en el museo moderno de Medellín. Habíamos hecho manualidades y estuvimos en varias atracciones, encontramos un túnel de luces perfecto para tomarnos una foto, ahí sin pensarlo dos veces le pregunte ¿quieres ser mi esposa? Y manuela dijo que Si.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="qbootstrap-when-where" data-section="when-where">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Manuela y Juan Pablo">
                    <h2>Ceremonia &amp; Recepción</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p>Nos complace invitarte a nuestra ceremonia y recepción.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 text-center animate-box">
                <div class="wedding-events">
                    <div class="ceremony-bg" style="background-image: url({{asset('images/donde/ceremonia.png')}});"></div>
                    <div class="desc">
                        <h3>Ceremonia Notarial</h3>
                        <div class="row">
                            <div class="col-md-2 col-md-push-5">
                                <div class="icon-tip">
                                            <span class="icon">
                                                <i class="icon-heart-o"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-calendar"></i>
                                    <span>Sábado</span>
                                    <span>29 Feb. 2020</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-clock2"></i>
                                    <span>10:00 AM</span>
                                    <span>11:00 AM</span>
                                </div>
                            </div>
                        </div>
                        <p>Nuestra ceremonia se realizara en la Notaria 13 de Medellin.</p>
                        <p>
                            <a href="https://goo.gl/maps/Jbpy518QS2ncPWKB9" target="_blank" class="btn btn-primary btn-sm">Ubicación</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center animate-box">
                <div class="wedding-events">
                    <div class="ceremony-bg" style="background-image: url({{asset('images/donde/recepcion.jpg')}});"></div>
                    <div class="desc">
                        <h3>Recepción</h3>
                        <div class="row">
                            <div class="col-md-2 col-md-push-5">
                                <div class="icon-tip">
                                            <span class="icon">
                                                <i class="icon-heart-o"></i>
                                            </span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-calendar"></i>
                                    <span>Sábado</span>
                                    <span>29 Feb. 2020</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-clock2"></i>
                                    <span>01:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <p>La recepción se realizara en el restaurante El Arriero en Caldas.</p>
                        <p>
                            <a href="https://goo.gl/maps/YKMtTLbGEYXAJx1y8" target="_blank" class="btn btn-primary btn-sm">Ubicación</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="map" class="qbootstrap-map"></div>
            </div>
        </div>
    </div>
</div>


<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" style="background-image: url({{asset('images/fondos/fondo3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="{{ asset('images/flaticon/svg/005-two.svg') }}" class="svg" alt="Manuela y Juan Pablo">
                    <h2>Nombre Inivitado,</h2>
                    <h2>Estas invitado</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3>Porque de cualquier forma hiciste parte de nuestra historia, y esperamos que continúes haciendo parte en esta nueva aventura.</h3>
                            <h3>Por favor confírmanos tu asistencia:</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-default btn-block">Si, Claro que voy</button>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-default btn-block" style="background: #5c5050;color: rgb(255, 254, 254);">No, no voy a poder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row row-bottom-padded-sm">
            <div class="col-md-12">
                <p class="copyright text-center">&copy; 2020, Hecho con ❤️ por Manuela y Juan Pablo
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<!-- YTPlayer -->
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!-- Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/magnific-popup-options.js')}}"></script>
<!-- Main JS (Do not remove) -->
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
