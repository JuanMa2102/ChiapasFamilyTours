@extends ('masterPage.masterPrincipal') @section ('content')

<main>
    <div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    </div>
    <!-- END REVOLUTION SLIDER -->

    <div class="container margin_60" style="margin-top: 10%">

        <div class="main_title">
            <h1><span>Paquetes Privados<span></h1>
            <p>INCLUYE:  EL GUIA  EXPERTO,  LA TRANSPORTACION PRIVADA, LOS HOTELES , LOS DESAYUNOS Y  TODAS LAS ENTRADAS  A LOS SITIOS A VISITAR. </p>
					</div>
					@foreach($paquetes as $item)
					<div class="row">
						<div class="paquetePrivado col-md-12">
							<div class="imageContainer">
								<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
									<div class="tour_container">
										<div class="ribbon_3 popular"><span>PAQUETE</span></div>
        <div class="img_container">
            <a href="/paquetesPrivados">
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
    <!-- End col-md-4 -->


    <!-- End col-md-4 -->

    </div>

    <!-- End container -->
</main>


@endsection


@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: paquetes privados</title>
<meta name="description" content="En esta sección podrá ver específicamente nuestros paquetes privados. Visite la guía rápida que tenemos para usted."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/paquetesPrivados" />
<meta property="og:description" content="En esta sección podrá ver específicamente nuestros paquetes privados. Visite la guía rápida que tenemos para usted."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/paquetesPrivados" />
@endsection