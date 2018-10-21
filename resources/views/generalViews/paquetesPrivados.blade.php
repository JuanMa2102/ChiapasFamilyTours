@extends ('masterPage.masterPrincipal') 
 
@section ('content')

<main>
		<div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
		</div>
		<!-- END REVOLUTION SLIDER -->

		<div class="container margin_60" style="margin-top: 10%">

			<div class="main_title">
				<h2><span>Paquetes Privados
					<span></h2>
						<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
					</div>
					@foreach($paquetes as $item)
					<div class="row">
						<div class="paquetePrivado col-md-12">
							<div class="imageContainer">
								<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
									<div class="tour_container">
										<div class="ribbon_3 popular"><span>PAQUETE</span></div>
										<div class="img_container">
											<a href="/paquetesPrivadosPorDia">
												<img src="{{asset($item->imagen)}}" class="img-responsive" alt="image">
											</a>
										</div>
										<div class="tour_title">
											<h3><strong>{{$item -> titulo_imagen}}</strong></h3>
										</div>
									</div>
									<!-- End box tour -->
								</div>
							</div>
							<div class="paqueteDescription">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="tour_list_desc">


										<h3><strong>{{ $item -> nombre }}</strong> </h3>
										<p>{{ $item->descripcion }}</p>
										<div class="diasPaquete">
											<p class="paqueteTitle">PAQUETES</p>
											<ul>
											@foreach($dias as $itemDias)
											@if($itemDias->id_paquete == $item->id_paquete)
												<li>
													<a href="{{ route('paquetes-detalle',[$item->id_paquete,$itemDias->id_dias])}}">
														<div class="paqueteItem">
															<!--  -->
															<p>{{$itemDias -> cantidad}}</p>
															<p>DÍAS{{$itemDias->descripcion}}</p>
														</div>
													</a>
												</li>
											@endif 
											@endforeach
											</ul>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-2">
									<div class="price_list">
										<div><sup>$</sup>{{$item -> precio}}*<span class="normal_price_list">$2500</span><small>Precio de paquete 3 Días</small>
										<!-- <p><a href="single_hotel.html" class="btn_1">Details</a>
										</p> -->
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- End col-md-4 -->
				@endforeach	
					<!-- End col-md-4 -->

					
					<!-- End col-md-4 -->

				</div>
				<div class="banner colored">
					<h4>Discover our Top tours <span>from $34</span></h4>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
					</p>
					<a href="single_tour.html" class="btn_1 white">Read more</a>
				</div>
			</div>
		</div>
		<section class="promo_full">
			<div class="promo_full_wp magnific">
				<div>
					<h3>BELONG ANYWHERE</h3>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
					</p>
					<a href="https://www.youtube.com/watch?v=Zz5cu72Gv5Y" class="video"><i class="icon-play-circled2-1"></i></a>
				</div>
			</div>
		</section>
		<!-- End section -->

		<div class="container margin_60">

			<div class="main_title">
				<h2> <span>Eligenos</span> </h2>
				<p>
					Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
				</p>
			</div>

			<div class="row">

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
					<div class="feature_home">
						<i class="icon_set_1_icon-41"></i>
						<h3><span>+120</span> Premium tours</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
						</p>
						<a href="about.html" class="btn_1 outline">Read more</a>
					</div>
				</div>

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
					<div class="feature_home">
						<i class="icon_set_1_icon-30"></i>
						<h3><span>+1000</span> Customers</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
						</p>
						<a href="about.html" class="btn_1 outline">Read more</a>
					</div>
				</div>

				<div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
					<div class="feature_home">
						<i class="icon_set_1_icon-57"></i>
						<h3><span>H24 </span> Support</h3>
						<p>
							Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
						</p>
						<a href="about.html" class="btn_1 outline">Read more</a>
					</div>
				</div>

			</div>
			<!--End row -->

			<hr>
			<div class="row">
				<div class="col-md-8 col-sm-6 hidden-xs">
					<img src="img/laptop.png" alt="Laptop" class="img-responsive laptop">
				</div>
				<div class="col-md-4 col-sm-6">
					<h3><span>Explore Chiapas</span> con amigos y familiares</h3>
					<p>
						<h3>¿Cómo reservar?</h3>
					</p>
					<div class="panel-group getStartedInstructions" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#pasoUno"><span>1</span> Seleccione su paquete<i class="indicator icon-plus pull-right"></i></a>
								</h4>
							</div>
							<div id="pasoUno" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="chiapasList">
										<li>EN LA PAGINA DE ITINERARIOS A LA DERECHA EN EL  BANNER  QUE  SUBE  Y  BAJA SELECCIONE SU ( S )  PAQUETE ( S )QUE LE GUSTARIA QUE LE  ENVIEMOS EL COSTO  “ DESPUES DE 2 HABITACIONES “, DISMINUYE  EL  COSTO POR PERSONA.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#pasoDos"><span>2</span> Envíe su E-mail <i class="indicator icon-plus pull-right"></i></a>
								</h4>
							</div>
							<div id="pasoDos" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="chiapasList">
										<li>UNA VEZ  SELECCIONADO  SU   PAQUETE NESESITAMOS NOS  INDIQUE EN COMENTARIOS: CUANTOS ADULTOS  Y  CUANTOS MENORES  DE 10  AÑOS CONFORMAN SU  GRUPO ASI NOSOTROS LE  ENVIAMOS  EL COSTO  MAS  REDUCIDO  POR PERSONA EN  HABITACIONES  DOBLES, TRIPLES   CUADRUPLES  E INDIVIDUALES. 
											( EL COSTO DE LAS ACTIVIDADES DE AVENTURA  FAVOR DE CHECAR EN ACTIVIDADES DE AVENTURA  ) 
											UNA VEZ QUE SABE CUAL PAQUETE LES GUSTA Y CUANTAS HABITACIONES NECESITA , FAVOR DE  VERIFICAR POR SU PARTE LA DISPONIBILIDAD DE SUS BOLETOS DE AVION. YA QUE EN BASE  A ESTO  DESAROLLAMOS EL ITINERARIO FINAL  Y  SE  LO ENVIAMOS, PARA SU APROBACION.
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#pasoTres"><span>3</span> ¡Cómprelo!<i class="indicator icon-plus pull-right"></i></a>
								</h4>
							</div>
							<div id="pasoTres" class="panel-collapse collapse">
								<div class="panel-body">
									<ul class="chiapasList">
										<li>YA  QUE  CONOCE UD. LOS  DETALLES  Y TENEMOS  SU APROBACION LE  ENVIAMOS NUESTRO NUMERO  DE  CUENTA.
											PARA UN PRIMER DEPOSITO.
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- End row -->

		</div>
		<!-- End container -->
	</main>


@endsection