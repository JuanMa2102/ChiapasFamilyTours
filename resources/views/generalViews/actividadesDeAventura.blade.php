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
				@foreach($ActividadAventura as $item)
				<div class="row">
					<div class="col-md-12">
						<div class="actividadesAventuraPage" class="panel-group" id="accordion">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{$item->id_actividadAventura}}">{{$item->titulo}}<i class="indicator icon-plus pull-right"></i></a>
									</h4>
								</div>
								<div id="{{$item->id_actividadAventura}}" class="panel-collapse collapse">
									<div class="panel-body">
									
										<div class="row">
										
											
											<div class="col-md-3 col-sm-3">
												
												<ul class="list_ok">
													<?php $i = 0; ?>
													@foreach($ActividadAventuraDetalle as $itemDetalle)
													
														@if($item->id_actividadAventura == $itemDetalle->id_actividadAventura)
															@if($i++==5)
																<?php break; ?>
															@endif
															<li>
																{{$itemDetalle->inclusion}}
															</li>
														@endif
													@endforeach
													
												</ul>
											</div>
											<div class="col-md-3 col-sm-3">
												
												<ul class="list_ok">
													<?php $i = 0; ?>
													@foreach($ActividadAventuraDetalle as $itemDetalle)
													
														@if($item->id_actividadAventura == $itemDetalle->id_actividadAventura)
															@if($i++>=5)
																<li>
																{{$itemDetalle->inclusion}}
															</li>
															@endif
															
														@endif
													@endforeach
												</ul>
											</div>
											
											<div class="col-md-6 col-sm-6">
												@if(!empty($item->imagen))
												<figure>
													<img src="{{asset($item->imagen)}}">
												</figure>
												<a target="_blank" class="actividadGoogleMaps" href="https://www.google.com/maps/@16.1944237,-92.2655487,3a,75y,342.08h,97.33t/data=!3m8!1e1!3m6!1sAF1QipMaMRulU95GjlAxgiCaVNdqxLf2qdmQZhfPYVy-!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMaMRulU95GjlAxgiCaVNdqxLf2qdmQZhfPYVy-%3Dw203-h100-k-no-pi-0-ya336-ro0-fo100!7i10128!8i5064">Ver ubicación en Google Maps</a>
												@endif
											</div>
										</div>
										
									</div>
								</div>
							</div>						
						@endforeach
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