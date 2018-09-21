@extends ('masterPage.masterPrincipal') 

@section ('content')


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
			<h3 style="text-align: center; margin-bottom: 2%; text-transform: uppercase;"><span>Lea sobre las actividades más sobresalientes de nuestra área de trabajo</span>	</h3>
			<div class="col-md-12" id="single_tour_desc">

				

				<p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
				</p>
				<!-- Map button for tablets/mobiles -->

				<div class="row">
					<div class="col-md-12">
						<div class="actividadesAventuraPage" class="panel-group" id="accordion">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">LAS  CASCADAS  DEL CHIFLON TIROLESAS DE  400 Y  600 METROS<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-3 col-sm-3">
												<ul class="list_ok">
													<li>DISPONIBILIDAD: TODO EL AÑO</li>
													<li>EDADES  Y  PESO :  ADULTOS  Y  NIÑOS   A  PARTIR DE 6 AÑOS CON UN PESO MAXIMO DE 95 KG.</li>
													<li>DIFICULTAD: MEDIA </li>
													<li>DURACION: 20 MINUTOS </li>

												</ul>
											</div>
											<div class="col-md-3 col-sm-3">
												<ul class="list_ok">
													<li>MINIMO DE PERSONAS:  1 </li>
													<li>MAXIMO DE PERSONAS: DISPONIBILIDAD PARA GRUPOS.</li>
													<li>TELEFONO CONTACTO  CASCADAS EL CHIFLON : CEL. 963 126 81 65 </li>
												</ul>
											</div>
											<div class="col-md-6 col-sm-6">
												<figure>
													<img src="{{asset('img/CHFTcslimage/tiloresaChiflon.jpg')}}">
												</figure>
												<a target="_blank" class="actividadGoogleMaps" href="https://www.google.com/maps/@16.1944237,-92.2655487,3a,75y,342.08h,97.33t/data=!3m8!1e1!3m6!1sAF1QipMaMRulU95GjlAxgiCaVNdqxLf2qdmQZhfPYVy-!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMaMRulU95GjlAxgiCaVNdqxLf2qdmQZhfPYVy-%3Dw203-h100-k-no-pi-0-ya336-ro0-fo100!7i10128!8i5064">Ver ubicación en Google Maps</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">LAGO POJOJ (LAGOS DE MONTEBELLO)<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<ul class="list_ok">
													<li>PASEO EN BALSADE TRONCOS: CUALQUIER EDAD (MENORES SUPERVISADOS POR  PAPAS).</li>
													
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">LA CIMA  DE LAS COTORRAS  RAPPEL  ( MAYORES DE 12 AÑOS )<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<ul class="list_ok">
													<li>DISPONIBILIDAD: TODO EL AÑO (  EL  AVISTAMIENTO DE  COTORRAS ES DE  MARZO  A OCTUBRE  ).</li>
													<li>EL DESCENSO  SE HACE  CON UN GUIA ESPECIALIZADO </li>
													<li>EDADES  Y  PESO :  ADULTOS  Y  NIÑOS   A  PARTIR DE 8 AÑOS  CON UN PESO NO MAYOR  DE 90 KILOS .</li>
													<li>DIFICULTAD: ALTA</li>
													<li>DURACION: SEGÚN CONDICION FISICA</li>
												</ul>
											</div>
											<div class="col-md-6 col-sm-6">
												<ul class="list_ok">
													<li>MINIMO DE PERSONAS: 2 </li>
													<li>MAXIMO DE PERSONAS: 12  PERSONAS  EN TODO EL DIA.</li>
													<li>TELEFONO CONTACTO:  968 102 8931</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Cupidatat skateboard dolor brunch?<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
										<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Nihil anim keffiyeh helvetica?<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
										<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- End row  -->
					</div>
				</div>

				<hr>

				
			</div>
			<!--End  single_tour_desc-->

			
		</div>
		<!--End row -->
	</div>
	<!--End container -->

	<div id="overlay"></div>
	<!-- Mask on input focus -->

</main>
<!-- End main -->
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