@extends ('masterPage.masterPrincipal') @section ('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/CHFTcslimage/cascada-azul1.jpg')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>Actividades de Aventura</h1>
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
                            <div class="col-md-6 col-sm-6">

                                <ul class="list_ok">
                                    <?php $i = 0; ?> @foreach($ActividadAventuraDetalle as $itemDetalle) @if($item->id_actividadAventura == $itemDetalle->id_actividadAventura) @if($i++==5)
                                    <?php break; ?> @endif
                                    <li>
                                        {{$itemDetalle->inclusion}}
                                    </li>
                                    @endif @endforeach

                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">

                                <ul class="list_ok">
                                    <?php $i = 0; ?> @foreach($ActividadAventuraDetalle as $itemDetalle) @if($item->id_actividadAventura == $itemDetalle->id_actividadAventura) @if($i++>=5)
                                    <li>
                                        {{$itemDetalle->inclusion}}
                                    </li>
                                    @endif @endif @endforeach
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
@endsection @push('actividadesDeAventuraScripts')
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