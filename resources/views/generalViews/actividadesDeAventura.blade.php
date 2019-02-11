@extends ('masterPage.masterPrincipal') @section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>ACTIVIDADES DE AVENTURA</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End section -->

<main>
    <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div>
    <!-- End Map -->

    <div class="container margin_60">
        <div class="row">
            <h3 style="text-align: center; margin-bottom: 2%; text-transform: uppercase;"><span>Lea sobre las actividades más sobresalientes de nuestra área de trabajo</span> </h3>
            <div class="col-md-12" id="single_tour_desc">
                <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                </p>
            </div>
        </div>
        @foreach($ActividadAventura as $item)
        <div class="actividadContainer">
            <div class="row">
                <div class="col-md-5">

                    <div class="actAventuraImage">
                        <figure>
                            <img src="{{asset($item->imagen)}}" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="infoAventura">
                        <h3>{{$item->titulo}}</h3>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <ul class="list_ok">
                                    {!!$item->inclusiones!!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
<!-- End main -->
@endsection 
@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: actividades de aventura en chiapas</title>
<meta name="description" content="En esta sección serás conocedor de las asombrosas actividades de aventura que podrás realizar en Chiapas. Asegúrate de perderte de esta aventura."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/actividadesDeAventura" />
<meta property="og:description" content="En esta sección serás conocedor de las asombrosas actividades de aventura que podrás realizar en Chiapas. Asegúrate de perderte de esta aventura."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/actividadesDeAventura" />
@endsection

@push('actividadesDeAventuraScripts')
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('assets/validate.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('js/map_single_restaurant.js')}}"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
@endpush