@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>PREGUNTAS FRECUENTES</h1>
                </div>
            </div>
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
				<div class="panel-group" id="accordion" style="text-align: justify">
				@foreach($preguntasfrecuentes as $item)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{ $item->id_preguntaFrecuente}}">{{ $item->pregunta }}<i class="indicator icon-plus pull-right"></i></a>
							</h4>
						</div>
						<div id="{{ $item->id_preguntaFrecuente}}" class="panel-collapse collapse">
							<div class="panel-body">
								<p>
								{!! $item->respuesta !!}
								</p>
								@foreach($preguntasfrecuentesdetalle as $itempreguntasfrecuentesdetalle)
								@if($itempreguntasfrecuentesdetalle->id_preguntaFrecuente == $item->id_preguntaFrecuente)
								<div class="anexos">
									<h3>{{$itempreguntasfrecuentesdetalle->titulo}}</h3>
									<div class="col-md-5 infoImagen">
										<p>
										{!!$itempreguntasfrecuentesdetalle->descripcion!!}
										</p>
									</div>
									<div class="col-md-7 imagenPregunta">
										<figure>
											<img style="width:100%;" src="{{asset($itempreguntasfrecuentesdetalle->imagen)}}">
										</figure>
										<small>{{$itempreguntasfrecuentesdetalle->infoImagen}}<a href="/preguntasFrecuentes"> {{$itempreguntasfrecuentesdetalle->fuente}}</a></small>
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

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: preguntas frecuentes</title>
<meta name="description" content="Encuentre las preguntas más frecuentes que nuestros clientes se hacen al cotizar su viaje. Entre aquí si tiene alguna duda."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/preguntasFrecuentes" />
<meta property="og:description" content="Encuentre las preguntas más frecuentes que nuestros clientes se hacen al cotizar su viaje. Entre aquí si tiene alguna duda."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/preguntasFrecuentes" />
@endsection

@push('preguntasFrecuentesScript')
<script src="{{asset('js/cat_nav_mobile.js')}}"></script>
<script>
	$('#cat_nav').mobileMenu();
</script>
@endpush