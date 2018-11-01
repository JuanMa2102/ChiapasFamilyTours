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
                <div class="paqueteItem " style="{{$item->id_dias==$id_dia ? 'background-color: #46D34D' : ' ' }}">
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
                        @foreach($galeria as $key => $item)
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/1_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/5_small.jpg')}}" data-medium="{{asset($item->imagen)}}" data-large="{{asset('img/slider_single_tour/1_large.jpg')}}"
                                data-retina="{{asset('img/slider_single_tour/1_large.jpg')}}"> @if($key >= 1) @if($key%2 == 0)
                            <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                                {{$item->descripcion}}
                            </p>
                            @else
                            <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            @endif @endif
                        </div>
                        @endforeach
                    </div>

                    <div class="sp-thumbnails">
                        @foreach($galeria as $item)
                        <img alt="Image" class="sp-thumbnail" src="{{asset($item->imagen)}}"> @endforeach
                    </div>

                </div>

                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Hoteles participantes</h3>
                    </div>
                    <div class="col-md-9">
                        <h4>Paris in love</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate
                            an, labitur tibique te qui.
                        </p>
                        <h4>What's include</h4>
                        <p>
                            Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                        </p>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>Ut est saepe munere ceteros</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="list_ok">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                    <li>Quidam percipitur instructior an eum</li>
                                    <li>No scripta electram necessitatibus sit</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End row  -->
                    </div>
                </div>
                <hr>

                <div class="row itinerarioPart">
                    <div class="col-md-3">
                        <h3>Itinerario</h3>
                    </div>

                    <div class="col-md-9">
                        
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <p class="hidden-sm hidden-xs">
                                <a class="btnComparacion" target="_blank" href="{{ URL::action('itinerarioDetalladoController@show',$id_dia) }}">ITINERARIO DETALLADO CON SUGERENCIAS</a>
                            </p>
                        </div>

                    </div>
                    <hr>
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

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <?php $i = 0; ?> @foreach($diasDetalle as $itemDetalle) @if($i++==4)
                                        <!-- Se quitó el error por el momento -->
                                        @endif
                                        <li>
                                            {{$itemDetalle->inclusion}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <ul class="list_ok">
                                        <?php $i = 0; ?> @foreach($diasDetalle as $itemDetalle) @if($i++>=4)
                                        <li>
                                            {{$itemDetalle->inclusion}}
                                        </li>
                                        @endif @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- End row  -->
                    </div>
                </div>
                <hr>

                <hr>
            </div>
            <!--End  single_tour_desc-->

            <aside class="col-md-5" id="sidebar">
                {!! Form::open(array('url' => 'paquetesPrivadosPorDia','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!} {{Form::token()}}
                <div class="theiaStickySidebar barraCotizacion">
                    <div class="box_style_1 expose">
                        <h3 class="inner">- ENVIAR SOLICITUD -</h3>
                        <p>Introduzca los siguientes datos</p>

                        <div class="infoCotizacion">
                            <p>De preferencia, reserve sus boletos antes de cotizar, ya que en base a la fecha de salida de su boleto, se le hará su itinerario. Si necesita más información vea la sección de preguntas más frecuentes <a target="_blank" href="\preguntasFrecuentes">aquí</a>.
                                O póngase en <a target="_blank" href="\contactos">contacto</a> con nosotros.</p>
                        </div>
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
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="ejemplo@dominio.com">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group telefonoGroup">
                                    <label><i class="icon-phone"></i>Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" value="{{old('telefono')}}" name="telefono" placeholder="Ingrese su teléfono aquí.">
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
              <option cosmico="{{$itemDias->id_paquete}}" nomDia="{{$itemDias->cantidad}} Días{{$itemDias->descripcion}}" value="{{$itemDias->id_dias}}">{{$itemDias->cantidad}} Días{{$itemDias->descripcion}}</option>
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
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
@endsection @push('paquetesPrivadosPorDiaScript')
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
        $(document).on('change', '#paqueteCotizacion', function(e) {
            // console.log(this.options[e.target.selectedIndex].value);
            var idPaquete = this.options[e.target.selectedIndex].value;
            $("select[name='diasCotizacion'] option[name='seleccione']").prop("selected",true);
            $("select[name='diasCotizacion'] option").removeClass('active');
            $("select[name='diasCotizacion'] option[cosmico='" + idPaquete + "']").addClass('active');

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

<script src="{{ asset('js/addPaquetes.js') }}"></script>
<!-- JS CSL -->
@endpush