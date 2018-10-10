@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/CHfTcslimage/canion-sumidero.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
     <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <h1>SAN CRISTOBAL Y SUS ALREDEDORES</h1>
          </div>
        </div>
      </div>
    </div>
</section>
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
            <li>
              <a href="#">
                <div class="paqueteItem" style="background-color: #46D34D">
                  <!--  -->
                  <p>2</p>
                  <p>DÍAS</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="paqueteItem">
                  <!--  -->
                  <p>3</p>
                  <p>DÍAS</p>
                </div>
              </a>
            </li>
            <li>
              <a href="privpack-section-anydays.html">
                <div class="paqueteItem">
                  <!--  -->
                  <p>4</p>
                  <p>DÍAS</p>
                </div>
              </a>
            </li>
            <li>
              <a href="privpack-section-anydays.html">
                <div class="paqueteItem">
                  <!--  -->
                  <p>5</p>
                  <p>DÍAS</p>
                </div>
              </a>
            </li>
            <li>
              <a href="privpack-section-anydays.html">
                <div class="paqueteItem">
                  <!--  -->
                  <p>6</p>
                  <p>DÍAS</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Map button for tablets/mobiles -->

      <div id="Img_carousel" class="slider-pro">
        <div class="sp-slides">

         <div class="sp-slide">
          <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/1_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/1_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/1_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/1_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/1_large.jpg')}}">
        </div>
        <div class="sp-slide">
          <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/2_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/2_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/2_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/2_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/2_large.jpg')}}">
          <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
          Lorem ipsum dolor sit amet </h3>
          <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
           consectetur adipisicing elit
         </p>
         <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         </p>
       </div>

       <div class="sp-slide">
        <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/3_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/3_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/3_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/3_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/3_large.jpg')}}">
        <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
         Lorem ipsum dolor sit amet
       </p>
       <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
         consectetur adipisicing elit
       </p>
     </div>

     <div class="sp-slide">
      <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/4_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/4_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/4_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/4_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/4_large.jpg')}}">
      <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     </p>
   </div>

   <div class="sp-slide">
    <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/5_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/5_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/5_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/5_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/5_large.jpg')}}">
    <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
   </p>
 </div>

 <div class="sp-slide">
  <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/6_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/6_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/6_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/6_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/6_large.jpg')}}">
  <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </p>
</div>

<div class="sp-slide">
  <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/7_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/7_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/7_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/7_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/7_large.jpg')}}">
  <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
 </p>
</div>

<div class="sp-slide">
  <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/8_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/8_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/8_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/8_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/8_large.jpg')}}">
  <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
   Lorem ipsum dolor sit amet
 </p>
 <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
   consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 </p>
</div>

<div class="sp-slide">
  <img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/9_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/9_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/9_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/9_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/9_large.jpg')}}">
</div>
</div>
<div class="sp-thumbnails">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/1_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/2_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/3_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/4_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/5_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/6_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/7_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/8_medium.jpg')}}">
 <img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/9_medium.jpg')}}">
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
      Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
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
   <h4>Día 1</h4>
   <p>
    RECEPCION  EN   EL  AEROPUERTO  “ ANGEL ALBINO CORZO     TRASLADO  AL MALECON  Y  VISITA  DEL CAÑON DEL SUMIDERO  POR  RIO  MAS  VISITA  DEL PUEBLO MAGICO DE   CHIAPA DE CORZO  MAS  TRASLADO AL PUEBLO MAGICO DE   SAN CRISTOBAL DE LAS CASAS   SU VUELO DEBE LLEGAR A TUXTLA  ANTES  DE LAS  14:00 HORAS LLEGANDO  A  SAN CRISTOBAL  BREVE RECORRIDO   POR   EL CENTRO  DE LA  CIUDAD PARA UBICAR  LOS MEJORES   RESTAURANTE, CAFETERIAS  Y  TIENDAS  DE LA CIUDAD.TRASLADO  A  SU  HOTEL  REGISTRO,NOCHE LIBRE.
  </p>
  <h4>Día 2</h4>
  <p>
    9:00 AM  CITY TOUR  DE SAN  CRISTOBAL CONOCIENDO LA IGLESIA  DE SANTO  DOMINGO  , LA  PLAZA DE ARTESANIAS   Y  LA  CATEDRAL, TRASLADO  Y  VISITA DE   LAS COMUNIDADES INDIGENAS DE  ( SAN JUAN CHAMULA Y  ZINACANTAN  )  REGRESAMOS  A       “SAN CRISTOBAL DE LAS CASAS”.   TIEMPO DE SUS ALIMENTOS  Y  A  LA HORA  INDICADA , TRASLADO AL AEROPUERTO. SU VUELO DEBE SALIR  DE  TUXTLA  DESPUES   DE LAS  19:00 HORAS
  </p>
  <!-- End row  -->
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
          <th>Habitación Individual<th>
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
            <li>Traslados Aeropuerto, hotel, aeropuerto</li>
            <li>Los Traslados   y  Los Tours son  Privados(2 días)</li>
            <li>Hospedaje  1  noche  en San Cristobal, hotel boutique  ó  hotel 4  estrellas.</li>
            <li>Alimentos (desayunos americanos ó buffet) </li>
            <li>Lancha compartida y brazalete  en el cañón del sumidero (suplemento lancha privada)</li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-6">
          <ul class="list_ok">
            <li>Entrada a la comunidad indigena de Zinacantan</li>
            <li>Entrada a la comunidad indigena de San Juan Chamula</li>
            <li>Seguro del viajero</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
         <p class="hidden-sm hidden-xs">
          <a class="btnComparacion" target="_blank" href="/comparacionPrecios">VER LISTA DE COMPARACIÓN DE PRECIOS</a>
        </p>
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
  <div class="theiaStickySidebar barraCotizacion">
   <div class="box_style_1 expose">
    <h3 class="inner">- ENVIAR COTIZACIÓN -</h3>
    <p>Introduzca los siguientes datos</p>
    <div class="infoCotizacion">
      <p>De preferencia, reserve sus boletos antes de cotizar, ya que en base a la fecha de salida de su boleto, se le hará su itinerario. Si necesita más información vea la sección de preguntas más frecuentes <a target="_blank" href="faq.html">aquí</a>. O póngase en <a target="_blank" href="contacto.html">contacto</a> con nosotros.</p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label><i class="icon-user"></i>Nombre</label>
          <input type="text">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label><i class="icon-user"></i>Apellido</label>
          <input type="text">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label><i class="icon-email"></i>E-mail</label>
          <input type="email">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label><i class="icon-phone"></i>Teléfono</label>
          <input type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">

          <label>Adultos</label>
          <input class="form-control" type="number" min="1" name="numeroAdultos">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Menores de 10 años</label>
          <input class="form-control" type="number" min="1" name="numeroMenores">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label><i class="icon-calendar-7"></i> Fecha de llegada</label>
          <input class="date-pick form-control" data-date-format="M d, D" type="text">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label><i class="icon-calendar-7"></i> Fecha de salida</label>
          <input class="date-pick form-control" data-date-format="M d, D" type="text">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div class="form-group">
          <div class="input-group">
            <label><i class="icon-lightbulb-1"></i> Paquete</label>
            <select class="form-control" name="paqueteCotizacion">
              <option value="0">Seleccione...</option>
              <option value="1">San Cristobal y alrededores</option>
              <option value="2">Palenque y alrededores</option>
              <option value="3">Clásico (San Cristobal y Palenque)</option>
              <option value="4">Chiapas Total</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <div class="input-group">
            <label><i class="icon-clock-2"></i> Días</label>
            <select class="form-control" name="diasCotizacion">
              <option value="0">Seleccione...</option>
              <option value="1">2 Días</option>
              <option value="2">3 Días</option>
              <option value="3">4 Días</option>
              <option value="4">5 Días</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <div class="input-group">
            <label>Añadir</label>
            <button class="addPaquete form-control"><i class=" icon-plus-circled"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-group">
            <label>Seleccione tipo de hotel</label>
            <select name="hotelType" class="form-control">
              <option value="0">Hotel Boutique</option>
              <option value="0">Hotel 4 Estrellas</option>
            </select>
          </div>
          <small>*Hoteles Boutique disponibles únicamente en San Cristobal</small>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <textarea placeholder="Sea más específico con nosotros en esta parte"></textarea>
      </div>
    </div>
    <br>

    <a class="btn_full" href="cart_hotel.html">Enviar cotización</a>

  </div>
  <!--/box_style_1 -->
</div>
<!--/sticky -->

</aside>
</div>
<!--End row -->
</div>
<!--End container -->

<div id="overlay"></div>
<!-- Mask on input focus -->

</main>
@endsection

@push('paquetesPrivadosPorDiaScript')
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
  $(document).ready(function ($) {
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
<script src="{{asset('assets/validate.js')}}"></script>

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