@extends ('masterPage.masterPrincipal') @section ('content')

<?php $diasCantidad = 2 ?> @foreach($paquetes as $itemPaquete) @if($itemPaquete->id_paquete == $id)
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset($itemPaquete->imagen)}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>{{$itemPaquete->nombre}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@endif @endforeach
<!-- End section -->


<main>
    <!-- End Position -->

    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-7" id="single_tour_desc">
                <div class="containerDiasPaquete">
                    <div class="diasPaquete">

                        <ul>
                            @php $descripciones = ""; @endphp @foreach($diasPaquete as $item)
                            <li>
                                <a href="{{ route('paquetes-detalle',[$id,$item->id_dias])}}">  
                                    <div class="paqueteItem" style="{{ $item->id_dias == $id_dia ? 'background-color: #46D34D' : '' }}">
                                        <?php if($item->id_dias==$id_dia ) $diasCantidad = $item->cantidad ?>
                                        <p>{{$item->cantidad}}</p>
                                        <p>
                                        @if($item->descripcion != "")
                                        @php
                                        $descripciones .= $item->cantidad . " DÍAS*: " .$item->descripcion . "\n";
                                        @endphp
                                        DÍAS*
                                        @else
                                        DÍAS
                                        @endif
                                        </p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>


                    </div>

                    <div class="descPaquetes">
                        <p style="white-space: pre-line">
                            {{$descripciones}}
                        </p>
                    </div>
                </div>
                <!-- Map button for tablets/mobiles -->

                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        @foreach($galeria as $item)
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="{{$item->imagen}}" data-medium="{{$item->imagen}}">
                           
                        </div>
                        @endforeach


                    </div>
                    <div class="sp-thumbnails">
                        @foreach($galeria as $item)
                        <img alt="Image" class="sp-thumbnail" src="{{$item->imagen}}"> @endforeach
                    </div>
                </div>


                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Hoteles Participantes</h3>
                    </div>
                    <div class="col-md-9">
                        <ul class="listHoteles">
                            <h3 style="font-weight: bold;">{{$hoteles[0]->municipio}}</h3>
                            @php
                            $temp = $hoteles[0]->id_municipio;
                            @endphp
                            @foreach($hoteles as $item)
                            @if($item->id_municipio != $temp)
                            <h3 style="font-weight: bold;">{{$item->municipio}}</h3>
                            @php
                            $temp = $item->id_municipio;
                            @endphp
                            @endif
                            <li>- {{$item->nombreHotel}} - <span style="{{$item->tipoHotel == 'Boutique' ? 'color:#056192;font-weight: bold' : '' }}">{{$item->tipoHotel}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <hr>

                <div class="row itinerarioPart">
                    <div class="col-md-3">
                        <h3>Itinerario</h3>
                    </div>

                    <div class="col-md-9">
                        <p class="itinerarioCortoCustom" style="white-space: pre-line">{!!$itinerarioCorto->itinerariocorto!!}</p>

                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <a class="btnComparacion" href="{{ URL::action('itinerarioDetalladoController@show',$id_dia) }}">ITINERARIO DETALLADO CON SUGERENCIAS</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row itinerarioPart">
                    
                    <div class="col-md-12 infoPaqueteCosto">
                        <!-- BTN HOTEL -->
                        <!-- Sin Precio -->
                        <table class="table">
                            <h3 style="font-weight:bold;">PRECIO DEL PAQUETE POR PERSONA</h3>
                            <thead>
                                <tr>
                                    <th>Hotel</th>
                                    <th>Habitación Cuádruple</th>
                                    <th>Habitación Doble</th>
                                    <th>Hoteles incluidos</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                @foreach($tipoHotel as $item)
                                @if($item->descripcion != "Cabañas 4 Estrellas")
                                @php
                                $contAsociados = 0;
                                $hoteles2 = DB::table('tbl_hoteles')
                                ->select('tbl_hoteles.id_hotel')
                                ->join('tbl_hoteldia','tbl_hoteles.id_hotel','=','tbl_hoteldia.id_hotel')
                                ->where('tbl_hoteles.id_TipoHotel',$item->id_tipoHotel)
                                ->where('tbl_hoteldia.id_dias',$id_dia)
                                ->where('tbl_hoteldia.activo',1)
                                ->get();
                                @endphp
                                @if(Count($hoteles2) > 0)
                                <tr>
                                    <td>{{$item->descripcion}}</td>
                                    <td>@foreach($precioHotel as $itemP) @if($itemP->id_tipoHotel == $item->id_tipoHotel && $itemP->id_dias == $id_dia ) ${{$itemP->preciocuadruple}} @endif @endforeach</td>
                                    <td>
                                        @foreach($precioHotel as $itemP) @if($itemP->id_tipoHotel == $item->id_tipoHotel && $itemP->id_dias == $id_dia ) ${{$itemP->precio}} @endif @endforeach
                                    </td>
                                    <td>
                                    Todos los hoteles {{$item->descripcion}}
                                        @foreach($hoteles as $itemB) 
                                        @if($itemB->asociado == 1 && $itemB->tpHotel == $item->id_tipoHotel) 
                                                {!!$contAsociados == 0 ? " excepto:<br> " . $itemB->nombreHotel . ' / ' : " " . $itemB->nombreHotel.' / '!!}
                                                @php $contAsociados++; @endphp
                                        @endif 
                                        @endforeach
                                    </td>
                                </tr>
                                @endif
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        {!! $precioHotel[0]->descripcion !!}
                        <!-- END BTN HOTEL -->
                        <!-- End row  -->
                    </div>
                </div>
                <hr>
                <div class="row itinerarioPart">
                    <div class="col-md-3">
                        <h3>Incluye</h3>
                    </div>
                    <div class="col-md-9">
                        <p style="white-space: pre-line">{!!$diasDetalle->inclusiones!!}</p>
                    </div>
                    <!-- End row  -->
                </div>

                <hr>
            </div>
            <aside class="col-md-5" id="sidebar">
            <div class="theiaStickySidebar barraCotizacion">
                {!! Form::open(array('url' => 'paquetesPrivadosPorDia','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!} {{Form::token()}}
                
                    <div class="box_style_1 expose">
                        <h3 class="inner">- SOLICITUD -</h3>
                        <div class="llamar">
                            <span style="margin: auto; display: block; text-align: center; font-size: 450%;"><i class="icon_set_1_icon-57"></i></span>
                            <p style="display: block; margin: auto; font-size: 125%; text-align: center; margin-top: 1%;">Comuníquese con nosostros a los siguientes números:</p>
                            <p style="font-weight: 500;display: block; margin: auto; font-size: 150%; text-align: center; margin-top: 1%;">{{$general->telefono}}</p>
                            <p style="display: block; margin: 3% auto; font-size: 150%; text-align: center;">Ó</p>
                        </div>
                        <p style="display: block; margin: auto; font-size: 120%; text-align: center; margin-top: 1%;">Introduzca los siguientes datos</p>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group nombreGroup">
                                    <label><i class="icon-user"></i>Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre aquí.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group apellidoGroup">
                                    <label><i class="icon-user"></i>Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido aquí.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group correoGroup">
                                    <label><i class="icon-email"></i>E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group telefonoGroup">
                                    <label><i class="icon-phone"></i>Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" value="{{old('telefono')}}" name="telefono" placeholder="Ingrese su teléfono aquí.">
                                    <small style="color: #f00">*Este campo no es indispensable.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group adultosGroup">
                                    <label>Adultos</label>
                                    <input class="form-control" min="1" type="number" value="{{old('numeroAdultos')}}" name="numeroAdultos" id="numeroAdultos">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group menoresGroup">
                                    <label>Menores de 10 años</label>
                                    <input class="form-control" class="form-control" value="{{old('numeroMenores')}}" type="number" min="0" name="numeroMenores" id="numeroMenores">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group llegadaGroup">
                                    <label><i class="icon-calendar-7"></i> Fecha de llegada</label>
                                    <input class="date-pick form-control" class="form-control" value="{{old('llegada')}}" data-date-format="yyyy-m-d" type="text" id="llegada" name="llegada">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group salidaGroup">
                                    <label><i class="icon-calendar-7"></i> Fecha de salida</label>
                                    <input class="date-pick form-control" value="{{old('salida')}}" class="form-control" data-date-format="yyyy-m-d" type="text" id="salida" name="salida">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group paqueteGroup">
                                    <label><i class="icon-lightbulb-1"></i> Paquete</label>
                                    <select class="form-control" id="paqueteCotizacion" name="paqueteCotizacion">
                                                    <option name="seleccione" value="0" >Seleccione...</option>
                                                    @foreach($paquetes as $item)
                                                    <option name="paquete" id="{{ $item->id_paquete }}" nomPack="{{ $item->nombre }}" value="{{$item->id_paquete}}">{{$item->nombre}}</option>
                                                    @endforeach
                                                </select>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group diasGroup">
                                    <div class="input-group ">
                                        <label><i class="icon-clock-2"></i> Días</label>
                                        <select class="form-control" name="diasCotizacion" id="diasCotizacion">
                                                        <option name="seleccione" value= "0" >Seleccione...</option>
                                                        @foreach($dias as $itemDias)
                                                        <option cosmico="{{$itemDias->id_paquete}}" nomDia="{{$itemDias->cantidad}} Días{{$itemDias->descripcion}} " value="{{$itemDias->id_dias}}">{{$itemDias->cantidad}} Días{{$itemDias->descripcion}}</option>
                                                        @endforeach
                                                    </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Añadir</label>
                                        <button type="button" class="addPaquete form-control"><i class=" icon-plus-circled"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5></h5>
                            <!-- usamos Input con id oculta para mandarla al store -->
                            <div class="paquetesAddedContainer">

                            </div>
                        </div>

                        <div style="width: 100%; height: 1px; background-color: #ccc; margin: 1% 0% 3% 0%;"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mensajeGroup">
                                    <textarea placeholder="Comentarios" class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí."></textarea>
                                </div>
                            </div>

                        </div>
                        <br>

                        <input type="submit" value="Enviar solicitud" class="btn_full" id="submit-cotizacion">

                    </div>
                    <!--/box_style_1 -->
               
                {!! Form::close() !!}
                <div class="box_style_1">
                    <span class="tape"></span>
                    {!! Form::open(array('url' => 'share','autocomplete'=>'off','method'=>'POST', 'files' => 'true')) !!} {{Form::token()}}
                        <div class="group-form">
                            <label for="mine">De:</label>
                            <input type="text" required class="form-control" id="mine" name="mine" placeholder="Ingrese nombre y apellido">
                            <input type="hidden" value="{{url()->current()}}" name="url">
                            <input type="hidden" value="{{$id}}" name="paqueteActual">
                            <input type="hidden" value="{{$id_dia}}" name="diaActual">
                        </div>
                        <div class="group-form">
                            <label for="friend">Para:</label>
                            <input type="email" required class="form-control" id="friend" name="friend" placeholder="Ingrese correo de amigo">
                        </div>
                        <div class="group-form">
                            <label for="emailMessage">Mensaje:</label>
                            <textarea name="emailMessage" class="form-control" id="emailMessage" cols="30" rows="10" placeholder="Deje un mensaje. Ejem. Nos gustó este paquete, ¿Qué opinas?"></textarea>
                        </div>
                        <div class="shareButtonContent">
                                    <button type="submit" class="shareButton"><i class="icon-share"></i> COMPARTIR ESTE PAQUETE</button>
                                    </div>
                    {!! Form::close() !!}
                    
                </div>
                </div>
                <!--/sticky -->
              
            </aside>
            <!--End  single_tour_desc-->
        </div>

    </div>
    <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
<!-- MailBox -->
<div class="mailBox">
    <div class="mailContent">
    <div class="closeButtonContent">
        <button class="closeButton"><i class="icon-cancel-7"></i></button>
    </div>
    
    </div>
</div>

@endsection 
@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: Paquete {{$info->paquete}} día {{$info->cantidad}}</title>
<meta name="description" content="Esta sección le da información específica del paquete {{$info->paquete}} en su día {{$info->cantidad}}"/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/paquetesPrivadosPorDia/{{$id}}/{{$id_dia}}" />
<meta property="og:description" content="Esta sección le da información específica del paquete {{$info->paquete}} en su día {{$info->cantidad}}"/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/paquetesPrivadosPorDia/{{$id}}/{{$id_dia}}" />
@endsection


@push('paquetesPrivadosPorDiaScript')
<script src="{{ asset('js/addPaquetes.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/paquetes_por_dia.js') }}">
</script>
<!-- CSS -->
<link href="{{asset('css/slider-pro.min.css')}}" rel="stylesheet">
<link href="{{asset('css/date_time_picker.css')}}" rel="stylesheet">

<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">


<script src="{{asset('js/icheck.js')}}"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<!-- Date and time pickers -->
<script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function($) {

        $(document).on('change', '#paqueteCotizacion', function(e) {
            console.log(this.options[e.target.selectedIndex].value);
            var idPaquete = this.options[e.target.selectedIndex].value;
            $("select[name='diasCotizacion'] option[name='seleccione']").prop("selected", true);
            $("select[name='diasCotizacion'] option").removeClass('active');
            $("select[name='diasCotizacion'] option[cosmico='" + idPaquete + "']").addClass('active');

        });
        $(document).on('change', '#tipoHotel', function(e) {
            console.log(this.options[e.target.selectedIndex].value);
            var idTipoHotel = this.options[e.target.selectedIndex].value;
            $("select[name='hotelElegido'] option[name='seleccione']").prop("selected", true);
            $("select[name='hotelElegido'] option").removeClass('active');
            $("select[name='hotelElegido'] option[cosmico='" + idTipoHotel + "']").addClass('active');

        });
        $('#Img_carousel').sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>

<!-- Date and time pickers -->
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/bootstrap-timepicker.js')}}"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>

<!--Review modal validation -->
<script src="{{asset('assets/validarcotizacion.js')}}"></script>

<!-- Map -->
<script src="{{asset('js/infobox.js')}}"></script>

<!-- Fixed sidebar -->
<script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>

<script>
    jQuery('#sidebar').theiaStickySidebar({
        additionalMarginTop: 80
    });
    $(".shareSwitch").click(function(){
        $(".mailBox").addClass("active");
        setTimeout(function() {
            $(".mailContent").addClass("active");
        }, 100);
        
    });
    $(".mailContent .closeButtonContent .closeButton").click(function(){
        $(".mailContent").removeClass("active");
        setTimeout(function() {
            $(".mailBox").removeClass("active");
        }, 500);
    });
</script>


<!-- JS CSL -->

@endpush