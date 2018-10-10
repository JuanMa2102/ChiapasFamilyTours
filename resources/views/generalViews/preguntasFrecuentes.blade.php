@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/home_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-1">
		<div class="animated fadeInDown">
			<h1>PREGUNTAS FRECUENTES</h1>
			<p>Encuentre las preguntas más frecuentes que se hacen los clientes</p>
		</div>
	</div>
</section>
<!-- End section -->

<main>
	<div class="container margin_60">

		<div class="row">
			
			<!--End aside -->
			<div class="col-lg-12 col-md-12" id="faq">
				<h2>Acerca de Chiapas</h2>
				<div class="panel-group" id="accordion">
				@foreach($preguntasfrecuentes as $item)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $item->id_preguntaFrecuente}}">{{ $item->pregunta }}<i class="indicator icon-minus pull-right"></i></a>
							</h4>
						</div>
						<div id="{{ $item->id_preguntaFrecuente}}" class="panel-collapse collapse in">
							<div class="panel-body">
								<p>
								{{ $item->respuesta }}
								</p>
								@foreach($preguntasfrecuentesdetalle as $itempreguntasfrecuentesdetalle)
								@if($itempreguntasfrecuentesdetalle->id_preguntaFrecuente == $item->id_preguntaFrecuente)
								<div class="anexos">
									<h3>{{$itempreguntasfrecuentesdetalle->titulo}}</h3>
									<div class="col-md-5 infoImagen">
										<p>
										{{$itempreguntasfrecuentesdetalle->descripcion}}
										</p>
									</div>
									<div class="col-md-7 imagenPregunta">
										<figure>
											<img src="{{asset($itempreguntasfrecuentesdetalle->imagen)}}">
										</figure>
										<small>{{$itempreguntasfrecuentesdetalle->infoImagen}}<a href="https://www.accuweather.com">{{$itempreguntasfrecuentesdetalle->fuente}}</a></small>
									</div>

								</div>
								@endif
								@endforeach
								

								
							</div>
						</div>
					</div>
					
					@endforeach
				</div>




			</div>
			<!-- End col lg-9 -->
		</div>
		<!-- End row -->
	</div>
	<!-- End container -->
</main>
<!-- End main -->

@endsection
@push('preguntasFrecuentesScript')
<script src="{{asset('js/cat_nav_mobile.js')}}"></script>
<script>
	$('#cat_nav').mobileMenu();
</script>
@endpush