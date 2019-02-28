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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131289317-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131289317-1');
</script>

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
    @php
$infoGeneral = DB::table('tbl_general')
->where('activo','=',1)
->get();
$atractivos = DB::table('tbl_atractivos')
        ->where('activo','=',1)
        ->get();
$atractivosDetalle = DB::table('tbl_atractivosdetalles')
->where('activo','=',1)
->get();
$dias = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->get();
$paquetes = DB::table('tbl_paquete')
->where('activo','=',1)
->get();
@endphp
<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
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
                    <div class="col-6">
                        <div class="topPhone">
                            <i class="icon-phone"></i><strong>{{$infoGeneral[0]->telefono}}</strong></div>
                        </div>
                    <div class="col-6">
                        
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div id="logo_home">
                        <h1><a href="/" title="Chiapas Family Tours">{{$infoGeneral[0]->nombre}}</a></h1>
                    </div>
                </div>
                <nav class="col-md-10 col-sm-10 col-xs-10">
                    <a class="cmn-toggle-switch"><span class="icon-menu"></span></a>
                    <div class="main-menu">
                        <div id="header_menu">
						<img class="logo_menu" src="{{ asset('img/CHFTcslimage/chiapasfamily.png') }}" alt="chiapas">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="/" class="show-submenu">Inicio </a>

                            </li>
                            <li class="megamenu submenu">
                                <a href="/paquetesPrivados" class="show-submenu">Paquetes Privados </i></a>
                                <div class="menu-wrapper">
                                	<div class="row">
                                    @php $cont = 0; $diaMenor = 0; $descripciones = ""; @endphp
                                        @foreach($paquetes as $key => $item)
                                        <div class="col-md-3">
											<h3><strong>{{$item->nombre}}</strong></h3>
											<ul>
                                                @foreach($dias as $itemDias)
                                                @if($itemDias->id_paquete == $item->id_paquete)
                                                <li>
                                                    <a href="{{ route('paquetes-detalle',[$item->id_paquete,$itemDias->id_dias])}}">
                                                       {{$itemDias->cantidad}} DÍAS {{$itemDias->descripcion == "" ? '' : ' - '.$itemDias->descripcion}}
                                                    </a>
                                                </li>
                                                @endif
                                                @endforeach
											</ul>
										</div>
                                        @endforeach
                                    </div><!-- End row -->
                                </div>

                            </li>
                            <li class="submenu">
                                <a href="/hoteles-all" class="show-submenu">Hoteles</i></a>
                            </li>

                            <li class="submenu">
                                <a href="/actividadesDeAventura" class="show-submenu">Actividades de Aventura</i></a>

                            </li>
                            <li class="megamenu submenu">
                                <a href="#" class="show-submenu">Atractivos</i></a>
                                <div class="menu-wrapper">
                                	<div class="row">
                                    @foreach($atractivos as $itemA)
                                        <div class="col-lg-4">
											<h3><strong>{{$itemA->nombre}}</strong></h3>
											<ul>
                                                @foreach($atractivosDetalle as $itemB)
                                                @if($itemB->id_atractivos == $itemA->id_atractivos)
                                                <li><a href="{{URL::action('descAtractivoController@show',$itemA->id_atractivos)}}#{{$itemB->titulo}}">{{$itemB->titulo}}</a></li>
                                                @endif
                                                @endforeach
											</ul>
										</div>
                                        @endforeach
                                    </div><!-- End row -->
                                </div>
                            </li>
                            <li class="submenu">
                                <a href="/traslados" class="show-submenu">Traslados</i></a>

                            </li>
                            <li class="submenu">
                                <a href="/preguntasFrecuentes" class="show-submenu">Preguntas frecuentes </i></a>
                            </li>
                            <li class="submenu">
                                <a href="/contactos" class="show-submenu">Contacto </i></a>

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

	<!-- ================= CONTENT SECTION ================  -->
	@yield('content')
	<!-- ================= END CONTENT SECTION ============ -->

    <div class="containerFixed">
        <div class="messageBox">
            @if(session()->has('success'))
            <h3>¡Envío Exitoso!</h3>
            <p>{{session()->get('success')}}</p>
            @endif
            @if(session()->has('error'))
            <h3>¡Error!</h3>
            <p>{{session()->get('error')}}</p>
            @endif
        </div>
    </div>

    <footer style="z-index: -1 !important;" id="pattern_3" class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>¿Necesita ayuda?</h3>
                    <a href="tel://019616164137" id="telefono">Teléfono: {{$infoGeneral[0]->telefono}}</a>
                    <a href="mailto:reserva@chiapasfamilytours.com" id="email_footer">{{$infoGeneral[0]->email}}</a>
                    <p>{{$infoGeneral[0]->horario}}</p>
                    <div class="socialNetworks">
                        <ul>
                            <li><a href="https://www.facebook.com/chiapasfamilytours/" id="fb-icon"><i class="icon-facebook"></i></a></li>
                            <li><a href="#" id="tw-icon"><i class="icon-twitter"></i></a></li>
                            <li><a href="#" id="inst-icon"><i class="icon-instagramm"></i></a></li>
                        </ul>
                    </div>
                    <h3>Aceptamos Pagos Mediante:</h3>
                    <div class="socialNetworks">
                        <ul>
                            <li><img src="{{asset('img/paypay_logo.png')}}" alt=""></li>
                            <li><img src="{{asset('img/oxxo_logo.png')}}" alt=""></li>
                            <li><img src="{{asset('img/banorte_logo.png')}}" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3">
                    <h3>Acerca de</h3>
                    <ul>
                        <li><a href="/">Inicio</a>
                        </li>
                        <li><a href="/nosotros">Nosotros</a>
                        </li>
                        <li><a href="/paquetesPrivados">Paquetes Privados</a>
                        </li>
                        <li><a href="/hoteles-all">Hoteles</a>
                        </li>
                        <li><a href="/actividadesDeAventura">Actividades de aventura</a>
                        </li>
                        <li><a href="/traslados">Traslados</a>
                        </li>
                        <li><a href="/preguntasFrecuentes">Preguntas frecuentes</a>
                        </li>
                        <li><a href="/politicas">Políticas de la empresa</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Comentarios de clientes</h3>
                    <!--Post-->
                    <p>Vea lo que dicen nuetros clientes <a style="text-decoration: underline" href="/clientes">Aquí</a></p>
                    <div class="certificateImageContent">
                        <div class="titleCertificate">
                            <h3>Registro Nacional de Turismo</h3>
                        </div>
                        <a href="{{asset('img/registroNacionalTurismo.jpg')}}" target="_blank"><div class="certificate" style="background-image: url({{asset('img/registroNacionalTurismo.jpg')}})">
                        </div></a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h3>Contáctenos</h3>
                    <p>Puede enviarnos un formulario en la sección de contactos</p>
                    <a style="text-decoration: underline" href="/contactos">Ir a contactos</a>
                </div>
            </div>
            <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                       
                        <p>© Impulsado por <a href="http://www.creativasoftline.com">Creativa Softline</a> - Todos los derechos reservados</p>
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
    <script>
        $(".cmn-toggle-switch").click(function(){
            $(".main-menu").toggleClass("active");
        });
        $("#close_in").click(function(){
            $(".main-menu").removeClass("active");
        });
    $("#toTop").click(()=>{
        $("html, body").animate({scrollTop : 0},700);
    });
    $('a.open_close').click(function() {
    $('.main-menu').toggleClass('show');
    $('.layer').toggleClass('layer-is-visible');
});
$('a.show-submenu').click(function() {
    $(this).next().toggleClass("show_normal");
});
$('a.show-submenu-mega').click(function() {
    $(this).next().toggleClass("show_mega");
});
if ($(window).width() <= 480) {
    $('a.open_close').click(function() {
        $('.cmn-toggle-switch').removeClass('active')
    });
}
    </script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script>
    $(window).on("load",() => {
        var contenedor = $("#contenedorCarga");
        $(contenedor).css({
                "visibility":"hidden",
                "opacity":"0"
            });
            @if(session()-> has('success') || session()-> has('error'))
            $(".containerFixed").css('display', 'block');
            setTimeout(() => {
                $(".messageBox").css('transform', 'scale(0)');
            }, 5000);
            setTimeout(()=>{
                $(".containerFixed").css('display', 'none');
            },5500);
            @endif

        });

    </script>
    @stack('contactScripts')
    @stack('inicioScripts')
    @stack('hotelesRestaurantesScript')
    @stack('descAtractivoScript')
    @stack('seccionDescripcionScript')
    @stack('transladosScript')
    @stack('actividadesDeAventuraScripts')
    @stack('paquetesPrivadosPorDiaScript')
    <!-- Preloader -->

    


</body>

</html>