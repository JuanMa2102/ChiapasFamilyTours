@extends ('masterPage.masterPrincipal') 

@section ('content')

	<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>TRASLADOS</h1>
                </div>
            </div>
        </div>
    </div>
</section>
	<!-- End Section -->

	<main>
		<div class="container margin_60">
			<div class="main_title">
				<h2>Traslados a <span>Aeropuerto y Hoteles</span></h2>
			</div>
			<hr>

			@foreach($traslados as $item)
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<img src="{{asset($item->imagen)}}" alt="Image" class="img-responsive styled">
				</div>
				<div class="col-md-7 col-md-offset-1 col-sm-6">
					<h3>{{ $item->nombre }}</h3>
					

					<div class=" table-responsive">

						<table class="table">
						
							<thead>
								<tr>
									<th>#</th>
									<th>Personas</th>
									<th>Precio</th>
								</tr>
							</thead>
							@foreach($trasladosdetalle as $itemtrasladosdetalle)
							@if($item->id_traslados == $itemtrasladosdetalle->id_traslados)
							<tbody>
								<tr>
									<td>{{$itemtrasladosdetalle->numero}}</td>
									<td>{{$itemtrasladosdetalle->personas}}</td>
									<td>{{$itemtrasladosdetalle->precio}}</td>
								</tr>
							</tbody>
							@endif
							@endforeach
						</table>
					</div>
				</div>
			</div>
			@endforeach
			<!-- End row -->
	</main>
	<!-- End main -->

@endsection

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: traslados a aeropuertos</title>
<meta name="description" content="Vea la información relevante a traslados a aeropuertos que tenemos para usted."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/traslados" />
<meta property="og:description" content="Vea la información relevante a traslados a aeropuertos que tenemos para usted."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/traslados" />
@endsection

@push('transladosScript')
<script src="js/jquery.simpleWeather.min.js"></script>
	<script>
		$(document).ready(function () {
			$.simpleWeather({
				location: 'Paris, France',
				woeid: '',
				unit: 'c',
				success: function (weather) {
					html = '<h4><i class="weathericon-' + weather.code + '"></i> ' + weather.temp + '&deg;' + weather.units.temp + '</h4>';
					html += '<ul><li>' + weather.city + ', ' + weather.region + '</li>';
					html += '<li class="currently">' + weather.currently + '</li>';
					html += '<li>' + weather.wind.direction + ' ' + weather.wind.speed + ' ' + weather.units.speed + '</li></ul>';

					for (var i = 0; i < weather.forecast.length; i++) {
						html += '<span class="details_forecast">' + weather.forecast[i].day + ': ' + weather.forecast[i].high + '</span>';
					}

					$("#weather").html(html);
				},
				error: function (error) {
					$("#weather").html('<p>' + error + '</p>');
				}
			});
		});
	</script>
@endpush