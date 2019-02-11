
@extends ('masterPage.masterPrincipal') @section('content')

<main style="overflow-x:hidden">
    <div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_54_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                @foreach($slider as $itemSlider)
                <!-- SLIDE  -->
                <li data-index="{{$itemSlider -> id_slider}}" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="rev-slider-files/assets/100x50_notgeneric_bg1.jpg"
                    data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                    data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{$itemSlider->imagen}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-140-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','46','36','28']"
                        data-lineheight="['46','46','36','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 46px; font-weight: 700;font-family:Montserrat;">{{$itemSlider -> titulo}}</div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-140-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-fontweight="['400','500','500','500']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-weight: bold;font-family:Montserrat; font-size: 20px">{{$itemSlider -> subtitulo}}</div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-140-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;cursor:default;"><i class="pe-7s-compass"></i> </div>

                    <!-- LAYER NR. 4 -->


                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption rev-scroll-btn " id="slide-140-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55"
                        data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]' data-basealign="slide"
                        data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100; color: transparent;border-color:rgba(255, 255, 255, 0.5);border-style:solid;border-width:1px 1px 1px 1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <span></span>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <div class="container margin_60">

        <div class="main_title">
            <h2><span>Paquetes Privados<span></h2></div>
					@foreach($paquetes as $key => $item)
            <div class="row">
                <div class="paquetePrivado col-md-12">
                    <div class="imageContainer">
                        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="tour_container">
                                <div class="ribbon_3 popular"><span>PAQUETE</span></div>
        <div class="img_container">
            <a href="/">
                                            <img src="{{asset($item->imagen)}}" class="img-responsive" alt="image">
                                        </a>
        </div>
        <div class="tour_title">
            <h3><strong>{{$item -> titulo_imagen}}</strong></h3>
        </div>
    </div>
    </div>
    </div>
    <div class="paqueteDescription">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="tour_list_desc">
                <h3><strong>{{ $item -> nombre }}</strong> </h3>
                <p>{!! $item->descripcion !!}</p>
                <div class="guiaRapida">
                    <a href="{{$item->guia == '' ? '#' : $item->guia}}" {{$item->guia == '' ? 'disabled' : ''}}target="_blank"><button>{{$item->guia == "" ? 'GUÍA RÁPIDA NO DISPONIBLE' : 'VER GUÍA RÁPIDA'}}</button></a>
                </div>
                <div class="diasPaquete">
                    <p class="paqueteTitle">PAQUETES</p>
                    <ul>
                        @php $cont = 0; $diaMenor = 0; $descripciones = ""; @endphp @foreach($dias as $itemDias) @if($itemDias->id_paquete == $item->id_paquete) @php $cont == 0 ? $diaMenor = $itemDias->cantidad : $cont = $cont; $cont++; @endphp
                        <li>
                            <a href="{{ route('paquetes-detalle',[$item->id_paquete,$itemDias->id_dias])}}">
                                <div class="paqueteItem">
                                    <!--  -->
                                    <p>{{$itemDias -> cantidad}}</p>
                                    <p>
                                        @if($itemDias->descripcion != "") @php $descripciones .= $itemDias->cantidad . " DÍAS*: " .$itemDias->descripcion . "\n"; @endphp DÍAS* @else DÍAS @endif
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endif @endforeach
                    </ul>
                </div>
                <div class="descPaquetes">
                    <p style="white-space: pre-line">
                        {{$descripciones}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <p class="titlePrice">{{$item->subtituloprecio}}</p>
            <div class="price_list">
                <div><sup>$</sup>{{$item -> precio}}*<span class="normal_price_list">${{$item->preciotachado}}</span><small>Precio de paquete {{$diaMenor}} Días</small>
                   <small>En habitaciones cuádruple</small>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- End col-md-4 -->
    @endforeach



    <hr>

    <div class="boutiqueHoteles">
        <div class="main_title">
            <h2> <span>HOTELES BOUTIQUE RECOMENDADOS</span></h2>

        </div>


        <div class="row">
            @if($hotelesBoutique->isEmpty())
            <p style="text-align: center; margin: auto; display: block; font-size: 18px; font-weight: bold;">No hay Hoteles Boutique recomendados por el momento</p>
            @else @foreach($hotelesBoutique as $item)
            <div class=" col-md-4 col-sm-6 wow zoomIn " data-wow-delay="0.1s ">
                <div class="hotel_container ">
                    <div class="ribbon_3 popular "><span>TOP</span></div>
                    <div class="img_container " style="background-image: url({{asset($item->imagen)}})">
                    </div>
                    <div class="hotel_title">
                        <h3><strong>{{$item->nombre}} - <a href="{{$item->pagina == null ? '' : 'http://'.$item->pagina}}">{{$item->pagina == null ? 'Página no disponible' : 'Visitar página'}}</a></strong> </h3>
                        <p></p>
                        <!-- end rating -->

                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box -->
            </div>
            @endforeach @endif


            <!-- End col-md-4 -->

        </div>


    </div>
    <div class="fourStarsHoteles">
        <div class="main_title" style="margin-top: 3%;">
            <h2> <span>HOTELES 4 ESTRELLAS RECOMENDADOS</span></h2>
        </div>

        <div class="row">
            @if($hotelesCuatroEstrella->isEmpty())
            <p style="text-align: center; margin: auto; display: block; font-size: 18px; font-weight: bold;">No hay Hoteles 4 Estrellas recomendados por el momento</p>
            @else @foreach($hotelesCuatroEstrella as $item)
            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="hotel_container">
                    <div class="ribbon_3 popular"><span>TOP</span></div>
                    <div class="img_container " style="background-image: url({{asset($item->imagen)}})">
                    </div>
                    <div class="hotel_title">
                        <h3><strong>{{$item->nombre}} - <a href="{{$item->pagina == null ? '' : 'http://'.$item->pagina}}">{{$item->pagina == null ? 'Página no disponible' : 'Visitar página'}}</a></strong> </h3>
                        <!-- end rating -->

                        <!-- End wish list-->
                    </div>
                </div>
                <!-- End box -->
            </div>
            <!-- End col-md-4 -->
            @endforeach @endif


        </div>
        <!-- End row -->
        <p class="text-center" style="margin-top: 30px;">
            <a href="/hoteles-all" class="btn_1 medium"><i class="icon-eye-7"></i>Ver todos los hoteles</a>
        </p>
    </div>
    <div class="container-fluid">
        <div class="main_title">

        </div>
        <div class="col-md-4 atractivosList">
            <span><h2 class="rutaTitle">ATRACTIVOS NATURALES Y CULTURALES</h2></span>
            <div class="panel-group" id="accordion">
                @foreach($atractivos as $itemA)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#_{{$itemA->id_atractivos}}">{{$itemA->nombre}}<i class="indicator icon-plus pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="_{{$itemA->id_atractivos}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="chiapasList">
                                @foreach($atractivosDetalle as $itemB) @if($itemB->id_atractivos == $itemA->id_atractivos)
                                <li><a href="{{URL::action('descAtractivoController@show',$itemA->id_atractivos)}}#{{$itemB->titulo}}">{{$itemB->titulo}}</a></li>
                                @endif @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
        <div class="col-md-8">
            <span><h2 class="rutaTitle">NUESTRA RUTA DE TRABAJO</h2></span>
            <!-- START MAP -->
            <div style="position: relative; overflow: hidden" class="imageRutaContent">
                <button class="timeSwitch"><i class="icon-menu"></i></button>
                <img style="width: 100%; " alt="Image" class="sp-image" src="{{$ruta[0]->imagen}}" data-src="{{$ruta[0]->imagen}}" data-small="img/slider_single_tour/6_small.jpg" data-medium="{{$ruta[0]->imagen}}" data-large="img/slider_single_tour/6_large.jpg" data-retina="img/slider_single_tour/6_large.jpg">
                <div class="infoTiempo">
                {!!$ruta[0]->descripcion!!}
                </div>
            </div>

            <!-- END MAP -->
        </div>
    </div>
    <div class="white_bg">
        <div class="container margin_60">
            <!-- End row -->
            <div class="banner colored">

                <p style="font-size: 18px">
                    Comuníquese con nosotros al número {{$infoGeneral[0]->telefono}} y le damos grandiosos tips antes de cotizar su viaje
                </p>
            </div>
            <!--MAPA-->
            <div>

            </div>
            <!-- End row -->
        </div>
        <!-- End container -->

    </div>
    <!-- End white_bg -->


    <section class="promo_full">
        <div class="promo_full_wp magnific">
            <iframe width="100%" height="500" src="{{$infoGeneral[0]->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <!-- End section -->

    <div class="container margin_60">

        <div class="main_title">
            <h2> <span>¿POR QUÉ ELEGIRNOS?</span> </h2>
            <p>
                Le ofrecemos los siguientes servicios
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class=" icon-star-empty-2"></i>
                    <h4>Nuestros 16 Paquetes son <span>PRIVADOS</span>. Solo para ud., Amigos y Familiares</h4>
                    <p style="white-space: pre-line">
                        Nosotros sugerimos la hora de inicio de los tours y el tiempo que dedicaremos a las visitas. !Pero ustedes deciden! ¡Sabrán de antemano las horas y minutos, que tendremos en carretera! La sección de itinerarios detallados le indica a qué hora terminan
                        los tours y así usted, puede organizar su tiempo para otras actividades con su familia.
                    </p>

                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon-chat-5"></i>
                    <h4>Más de 50 Tips y Respuestas a Preguntas Frecuentes.</h4>
                    <h5 style="color: #f00">(Los Tips se encuentras en Atractivos Naturales y Culturales de Chiapas)</h5>
                    <p style="white-space: pre-line">
                        Más información: De los Atractivos Naturales y Culturales con los que cuenta Chiapas y con información gráfica que le podrá ayudar a hacer su propio itinerario. Posibilidad de incluir actividades de aventura: Rappel en diferentes niveles, Cañonismo, Tirolesas,
                        Descenso de Cascadas en Balsa (Rafting) y Caminata en la Selva.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3>Asistencia</h3>
                    <p style="white-space: pre-line; text-align: left">
                        En requerimientos especiales como: * Habitaciones Handicap * Asientos para Bebés * Solicitud de Cunas * Renta de Silla de Ruedas * Disponibilidade de Guías en Diferentes Idiomas: - Inglés - Francés - Italiano - Alemán
                    </p>

                </div>
            </div>

        </div>
        <!--End row -->

        <!-- End row -->

    </div>
    <!-- End container -->
</main>
<!-- End main -->

@endsection 
@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours | viajes a chiapas con amigos y familiares</title>
<meta name="description" content="Chiapas Family Tours es una empresa que ofrece tours y viajes a pueblos mágicos, zonas arqueológicas con actividades de aventura en los lugares más bellos de este estado."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/" />
<meta property="og:description" content="Chiapas Family Tours es una empresa que ofrece tours y viajes a pueblos mágicos, zonas arqueológicas con actividades de aventura en los lugares más bellos de este estado."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/index.php" />
@endsection


@push('inicioScripts')
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('rev-slider-files/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<!-- Map -->

<script type="text/javascript" src="{{asset('js/map_home.js')}}"></script>
<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
    var tiempo = false;
    $(".timeSwitch").click(() => {
        if (!tiempo) {
            $(".infoTiempo").addClass('active');
            tiempo = true;
        } else {
            $(".infoTiempo").removeClass('active');
            tiempo = false;
        }

    });
</script>
<script type="text/javascript">
    var tpj = jQuery;

    var revapi54;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_54_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_54_1");
        } else {
            revapi54 = tpj("#rev_slider_54_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "rev-slider-files/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "off",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 778,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [700, 550, 860, 480],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                    disable_onmobile: "on"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>

<!-- Map -->
<script src="{{asset('js/infobox.js')}}"></script>
@endpush