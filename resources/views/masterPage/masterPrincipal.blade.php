<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>Chiapas Family Tours - Principal</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('img/iconChiapas.png') }}" type="img/iconChiapas">
    <!-- Google web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">

    <!-- BASE CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{asset('css/base.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/preloader.css')}}">
    <style>
        html,
        body {
            height: 100%;
        }
    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('rev-slider-files/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('rev-slider-files/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('rev-slider-files/css/settings.css')}}">

    <!-- REVOLUTION LAYERS STYLES -->
    <style>
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        
        .gm-style .marker_info_2 img {
            max-width: 100% !important;
        }
        
        .marker_info_2 {
            width: 240px;
            height: 340px;
            border-radius: 3px;
            text-align: center;
            background: #FFF;
            background: rgba(255, 255, 255, 0.9);
            position: relative;
            z-index: 9999999;
            font-family: "Montserrat", Arial, sans-serif;
        }
        
        .tp-caption.NotGeneric-Title,
        .NotGeneric-Title {
            color: rgba(255, 255, 255, 1.00);
            font-size: 70px;
            line-height: 70px;
            font-weight: 800;
            font-style: normal;
            text-decoration: none;
            background-color: transparent;
            border-color: transparent;
            border-style: none;
            border-width: 0px;
            border-radius: 0 0 0 0px
        }
        
        .tp-caption.NotGeneric-SubTitle,
        .NotGeneric-SubTitle {
            color: rgba(255, 255, 255, 1.00);
            font-size: 13px;
            line-height: 20px;
            font-weight: 500;
            font-style: normal;
            text-decoration: none;
            background-color: transparent;
            border-color: transparent;
            border-style: none;
            border-width: 0px;
            border-radius: 0 0 0 0px;
            letter-spacing: 4px
        }
        
        .tp-caption.NotGeneric-Icon,
        .NotGeneric-Icon {
            color: rgba(255, 255, 255, 1.00);
            font-size: 30px;
            line-height: 30px;
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(255, 255, 255, 0);
            border-style: solid;
            border-width: 0px;
            border-radius: 0px 0px 0px 0px;
            letter-spacing: 3px
        }
        
        .tp-caption.NotGeneric-Button,
        .NotGeneric-Button {
            color: rgba(255, 255, 255, 1.00);
            font-size: 14px;
            line-height: 14px;
            font-weight: 500;
            font-style: normal;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(255, 255, 255, 0.50);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            letter-spacing: 3px
        }
        
        .tp-caption.NotGeneric-Button:hover,
        .NotGeneric-Button:hover {
            color: rgba(255, 255, 255, 1.00);
            text-decoration: none;
            background-color: transparent;
            border-color: rgba(255, 255, 255, 1.00);
            border-style: solid;
            border-width: 1px;
            border-radius: 0px 0px 0px 0px;
            cursor: pointer
        }
    </style>
</head>

<body>
    <!-- preloader -->
    <div id="contenedorCarga">
        <figure id="logoChiapas">
            <img class="logo" src="{{ asset('img/CHFTcslimage/chiapasfamily.png') }}" alt="chiapas">
        </figure>
        <div id="carga"></div>
    </div>
    <!-- End preloader -->
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>

        <!-- NAV -->
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>

                                <a href="#"><i class="icon-facebook"></i> </a>


                            </li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>

                            <li> <a href="#"><i class="icon-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End row -->
            </div>
            <!-- End container-->
        </div>
        <!-- End top line-->

        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div id="logo_home">
                        <h1><a href="/" title="Chiapas Family Tours">Chiapas Family Tours</a></h1>
                    </div>
                </div>
                <nav class="col-md-10 col-sm-10 col-xs-10">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
						<img class="logo" src="{{ asset('img/CHFTcslimage/chiapasfamily.png') }}" alt="chiapas">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="/" class="show-submenu">Inicio </a>

                            </li>
                            <li class="submenu">
                                <a href="/paquetesPrivados" class="show-submenu">Paquetes Privados </i></a>

                            </li>
                            <li class="submenu">
                                <a href="/hotelesRestaurantes" class="show-submenu">Hoteles & Restaurantes</i></a>
                            </li>

                            <li class="submenu">
                                <a href="/actividadesDeAventura" class="show-submenu">Actividades de Aventura</i></a>

                            </li>
                            <li class="submenu">
                                <a href="/preguntasFrecuentes" class="show-submenu">Preguntas frecuentes </i></a>
                            </li>
                            <li class="submenu">
                                <a href="/contactos" class="show-submenu">Contacto </i></a>

                            </li>
                            <li class="submenu">
                                <a href="/traslados" class="show-submenu">Traslados</i></a>

                            </li>


                        </ul>
                    </div>
                    <!-- End main-menu -->

                </nav>
            </div>
        </div>
        <!-- container -->
        <!-- END NAV -->
    </header>
    <!-- End Header -->

	================= CONTENT SECTION ================ 
	@yield('content')
	================= END CONTENT SECTION ============

    <footer style="z-index: -1 !important;" id="pattern_3" class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                    <p>Monday to Friady 08.00am - 06.00pm</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                        <li><a href="#">Blog</a>
                        </li>
                        <li><a href="#">Gallery</a>
                        </li>
                        <li><a href="#">Login</a>
                        </li>
                        <li><a href="#">Register</a>
                        </li>
                        <li><a href="#">Terms and conditions</a>
                        </li>
                        <li><a href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Latest post</h3>
                    <!--Post-->
                    <div class="post">
                        <figure>
                            <a href="#"><img src="img/post-thumb-1.jpg" alt="">
                            </a>
                        </figure>
                        <h4><a href="#">Planning for the future</a></h4>
                        <i class="icon-calendar-empty"></i> Jun 12,2016
                    </div>
                    <!--Post-->
                    <div class="post">
                        <figure>
                            <a href="#"><img src="img/post-thumb-2.jpg" alt="">
                            </a>
                        </figure>
                        <h4><a href="#">Unique places to discover</a></h4>
                        <i class="icon-calendar-empty"></i> Jun 14,2016
                    </div>
                    <!--Post-->
                    <div class="post">
                        <figure>
                            <a href="#"><img src="img/post-thumb-3.jpg" alt="">
                            </a>
                        </figure>
                        <h4><a href="#">We love travel</a></h4>
                        <i class="icon-calendar-empty"></i>Jun 17,2016
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="lang">
										<option value="English" selected>English</option>
										<option value="French">French</option>
										<option value="Spanish">Spanish</option>
										<option value="Russian">Russian</option>
									</select>
                    </div>
                    <div class="styled-select">
                        <select class="form-control" name="currency" id="currency">
										<option value="USD" selected>USD</option>
										<option value="EUR">EUR</option>
										<option value="GBP">GBP</option>
										<option value="RUB">RUB</option>
									</select>
                    </div>
                </div>
            </div>
            <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-google"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-instagram"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-pinterest"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-vimeo"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a>
                            </li>
                            <li><a href="#"><i class="icon-linkedin"></i></a>
                            </li>
                        </ul>
                        <p>© Citytours 2015</p>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End footer -->

    <div id="toTop"></div>
    <!-- Back to top button -->


    <!-- Common scripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts_min.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    @stack('contactScripts')
    @stack('inicioScripts')
    @stack('hotelesRestaurantesScript')
    @stack('descAtractivoScript')
    @stack('seccionDescripcionScript')
    @stack('transladosScript')
    @stack('actividadesDeAventuraScripts')
    @stack('paquetesPrivadosPorDiaScript')
    <!-- Preloader -->
    <script>
        window.onload = function() {
            var contenedor = document.getElementById('contenedorCarga')
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';
        }
    </script>


</body>

</html>