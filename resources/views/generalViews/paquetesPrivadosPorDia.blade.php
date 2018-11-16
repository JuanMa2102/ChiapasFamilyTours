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
                            @foreach($diasPaquete as $item)
                            <li>
                                <a href="{{ route('paquetes-detalle',[$id,$item->id_dias])}}">  
                                    <div class="paqueteItem" style="{{ $item->id_dias == $id_dia ? 'background-color: #46D34D' : '' }}">
                                        <?php if($item->id_dias==$id_dia ) $diasCantidad = $item->cantidad ?>
                                        <p>{{$item->cantidad}}</p>
                                        <p>DÍAS{{$item->descripcion}}</p>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
                <!-- Map button for tablets/mobiles -->

                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">
                        <div id="Img_carousel" class="slider-pro sp-horizontal" style="width: 100%; max-width: 960px;">


                            <div class="sp-slides-container">
                                <div class="sp-mask sp-grab" style="width: 750px; height: 390.625px;">
                                    <div class="sp-slides" style="transform: translate3d(-3670px, 0px, 0px);">
                                        @foreach($galeria as $key => $item)
                                        <div class="sp-slide {{$key == 0 ? 'sp-selected' : ''}}" data-index="{{$item->id_galeria}}" data-init="true" data-loaded="true" style="width: 750px; height: 390.625px; left: 3670px;">
                                            <div class="sp-image-container" style="width: 750px; height: 390.625px;"><img class="sp-image" data-default="{{$item->imagen}}" data-retina="img/slider_single_tour/1_large.jpg" data-large="img/slider_single_tour/1_large.jpg" data-medium="{{$item->imagen}}" data-small="img/slider_single_tour/1_small.jpg"
                                                    alt="Image" src="{{$item->imagen}}" style="width: 100%; height: auto; margin-left: 0px; margin-top: -51.5px;"></div>

                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="sp-arrows sp-fade-arrows">
                                    <div class="sp-arrow sp-previous-arrow"></div>
                                    <div class="sp-arrow sp-next-arrow"></div>
                                </div>
                            </div>
                            <div class="sp-thumbnails-container sp-bottom-thumbnails" style="width: 750px;">
                                <div class="sp-thumbnails sp-grab" style="width: 932px; height: 80px;">
                                    @foreach($galeria as $key => $item)
                                    <div class="sp-thumbnail-container {{$key==0 ? 'sp-selected-thumbnail' : ''}}" data-loaded="true" style="width: 100px; height: 80px;"><img alt="Image" class="sp-thumbnail" src="{{$item->imagen}}" data-index="0" data-init="true" style="width: auto; height: 100%; margin-left: -9px; margin-top: 0px;"></div>
                                    @endforeach
                                </div>
                                <div class="sp-thumbnail-arrows sp-fade-thumbnail-arrows">
                                    <div class="sp-thumbnail-arrow sp-previous-thumbnail-arrow" style="display: none;"></div>
                                    <div class="sp-thumbnail-arrow sp-next-thumbnail-arrow" style="display: block;"></div>
                                </div>
                            </div>
                        </div>
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
                        <ul class="list_ok">
                            @foreach($hoteles as $item)
                            <li>{{$item->nombreHotel}} - {{$item->tipoHotel}}</li>
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
                        <p>{{$itinerarioCorto->itinerariocorto}}</p>

                        <div class="row">
                            <div class="col-md-12">
                                <p class="hidden-sm hidden-xs">
                                    <a class="btnComparacion" target="_blank" href="{{ URL::action('itinerarioDetalladoController@show',$id_dia) }}">ITINERARIO DETALLADO CON SUGERENCIAS</a>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row itinerarioPart">
                    <div class="col-md-3">
                        <h3>Costo</h3>
                    </div>
                    <div class="col-md-9 infoPaqueteCosto">
                        <!-- BTN HOTEL -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Hotel</th>
                                    <th>Habitación Doble</th>
                                    <th>Habitación Triple</th>
                                    <th>Habitación Cuádruple APROVECHE</th>
                                    <th>Habitación Individual
                                        <th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Boutique</td>
                                    <td>$3000</td>
                                    <td>$2000</td>
                                    <td>$1800</td>
                                    <td>$2500</td>
                                </tr>
                                <tr>
                                    <td>4 Estrellas</td>
                                    <td>$3000</td>
                                    <td>$2000</td>
                                    <td>$1800</td>
                                    <td>$2500</td>
                                </tr>

                            </tbody>
                        </table>
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
                        <p style="white-space: pre-line">{{$dias[0]->inclusiones}}</p>
                    </div>
                    <!-- End row  -->
                </div>

                <hr>
            </div>
            <aside class="col-md-5" id="sidebar">
                {!! Form::open(array('url' => 'paquetesPrivadosPorDia','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!} {{Form::token()}}
                <div class="theiaStickySidebar barraCotizacion">
                    <div class="box_style_1 expose">
                        <h3 class="inner">- ENVIAR SOLICITUD -</h3>
                        <div class="llamar">
                            <span style="margin: auto; display: block; text-align: center; font-size: 450%;"><i class="icon_set_1_icon-57"></i></span>
                            <p style="display: block; margin: auto; font-size: 150%; text-align: center; margin-top: 1%;">Llámenos al 9611060320</p>
                            <p style="display: block; margin: auto; font-size: 200%; text-align: center; margin-top: 1%;">O</p>
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
                                    <small>*Con rafting</small>
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
                                <div class="form-group tipoGroup">
                                    <div class="input-group">
                                        <label>Seleccione categoría de hotel</label>
                                        <select name="tipoHotel" class="form-control" id="tipoHotel">
                                                        <option name = "seleccione" value="0" >Seleccione...</option>
                                                        @foreach($tipoHotel as $item)
                                                        <option value="{{$item->id_tipoHotel}}">{{$item->descripcion}}</option>
                                                        @endforeach
                                                    </select>
                                    </div>
                                    <small>*Hoteles Boutique disponibles únicamente en San Cristobal</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group tipoGroup">
                                    <div class="input-group">
                                        <label>Seleccione Hotel</label>
                                        <select name="tipoHotel" class="form-control" id="tipoHotel">
                                                        <option name = "seleccione" value="0" >Seleccione...</option>
                                                        <option value="1">Hotel Boutique Bo</option>    
                                                    </select>
                                    </div>
                                    <small>*Hoteles Boutique disponibles únicamente en San Cristobal</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mensajeGroup">
                                    <textarea placeholder="Sea más específico con nosotros en esta parte" class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí."></textarea>
                                </div>
                            </div>

                        </div>
                        <br>

                        <input type="submit" value="Enviar solicitud" class="btn_full" id="submit-cotizacion">

                    </div>
                    <!--/box_style_1 -->
                </div>
                <!--/sticky -->
                {!! Form::close() !!}
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
@endsection @push('paquetesPrivadosPorDiaScript')
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
</script>


<!-- JS CSL -->

@endpush