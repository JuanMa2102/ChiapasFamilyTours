@extends ('masterPage.masterPrincipal') 

@section('content')

<main>
		<div id="rev_slider_54_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="notgeneric1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
			<div id="rev_slider_54_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
				<ul>
				@foreach($slider as $itemSlider)
					<!-- SLIDE  -->
					<li data-index="{{$itemSlider -> id_slider}}" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="rev-slider-files/assets/100x50_notgeneric_bg1.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="{{$itemSlider->imagen}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-140-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','46','36','28']" data-lineheight="['46','46','36','28']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"split":"chars","split_direction":"forward","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 46px; font-weight: 700;font-family:Montserrat;">{{$itemSlider -> titulo}}</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption NotGeneric-SubTitle   tp-resizeme" id="slide-140-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" data-fontweight="['400','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-weight: bold;font-family:Montserrat; font-size: 20px">{{$itemSlider -> subtitulo}}</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption NotGeneric-Icon   tp-resizeme" id="slide-140-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap;cursor:default;"><i class="pe-7s-compass"></i> </div>

						<!-- LAYER NR. 4 -->
						

						<!-- LAYER NR. 5 -->
						<div class="tp-caption rev-scroll-btn " id="slide-140-layer-9" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']" data-width="35" data-height="55" data-whitespace="nowrap" data-visibility="['on','on','on','off']" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"0px","delay":"","speed":"300","ease":"Linear.easeNone"}]' data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"y:50px;opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9; min-width: 35px; max-width: 35px; max-width: 55px; max-width: 55px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100; color: transparent;border-color:rgba(255, 255, 255, 0.5);border-style:solid;border-width:1px 1px 1px 1px;border-radius:23px 23px 23px 23px;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
							<span></span>
						</div>
					</li>
					@endforeach
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div>
		<!-- END REVOLUTION SLIDER -->

		<div class="container margin_60">

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
									<p>EN HOTELES BOUTIQUE DESDE</p>
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

					
				</div>
				<hr>

				<div class="boutiqueHoteles">
					<div class="main_title">
						<h2> <span>HOTELES BOUTIQUE RECOMENDADOS</span></h2>
						<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
					</div>


					<div class="row">
						@foreach($hotelesBoutique as $item)
						<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
							<div class="hotel_container">
								<div class="ribbon_3 popular"><span>Popular</span></div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="{{asset($item->imagen)}}" width="800" height="533" class="img-responsive" alt="single-hotel">
										<div class="score"><span>7.5</span>Good</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>59</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>{{$item->nombre}}</strong> </h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-4 -->
					@endforeach
					</div>


				</div>
				<div class="fourStarsHoteles">
					<div class="main_title">
						<h2> <span>HOTELES 4 ESTRELLAS RECOMENDADOS</span></h2>
						<p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
					</div>

					<div class="row">
						@foreach($hotelesCuatroEstrella as $item)
						<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
							<div class="hotel_container">
								<div class="ribbon_3 popular"><span>Popular</span></div>
								<div class="img_container">
									<a href="single_hotel.html">
										<img src="{{asset($item->imagen)}}" width="800" height="533" class="img-responsive" alt="image">
										<div class="score"><span>7.5</span>Good</div>
										<div class="short_info hotel">
											From/Per night<span class="price"><sup>$</sup>59</span>
										</div>
									</a>
								</div>
								<div class="hotel_title">
									<h3><strong>{{$item->nombre}}</strong> </h3>
									<div class="rating">
										<i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
									</div>
									<!-- end rating -->
									<div class="wishlist">
										<a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
									</div>
									<!-- End wish list-->
								</div>
							</div>
							<!-- End box -->
						</div>
						<!-- End col-md-4 -->
						@endforeach
					</div>
					<!-- End row -->
				<p class="text-center nopadding">
					<a href="/hotelesRestaurantes" class="btn_1 medium"><i class="icon-eye-7"></i>Ver todos los hoteles</a>
				</p>
			</div>
			<div class="container-fluid">
				<div class="main_title">
					<h2><span>NUESTRA RUTA DE TRABAJO
						<span></h2>
						</div>
						<div class="col-md-4 atractivosList">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('TuxtlaGutierrez',0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">TUXTLA GUTIÉRREZ<i class="indicator icon-plus pull-right"></i></a>

										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">TUXTLA GUTIÉRREZ</a></li>

												<li><a href="/descAtractivo">CAÑON DEL SUMIDERO POR LOS MIRADORES</a></li>
												<li><a href="/descAtractivo">EL PARQUE DE LA MARIMBA</a></li>
												<li><a href="/descAtractivo">RESTAURANTE LAS PICHANCHAS SHOW DE BAILABLES REGIONALES </a></li>
												<li><a href="/descAtractivo">EL ZOOLOGICO  MIGUEL ALVAREZ DEL TORO </a></li>
												<li><a href="/descAtractivo">EL MUSEO  DEL CAFÉ</a></li>
												<li><a href="/descAtractivo">EL CRISTO  DE CHIAPAS  ( COPOYA ) </a></li>
												<li><a href="/descAtractivo">LA FOSA DE LAS COTORRAS (   AVISTAMIENTO DE COTORRAS   DE  MARZO A OCTUBRE</a></li>
												<li><a href="/descAtractivo">CAÑON RIO LA VENTA Y LA CASCADA EL AGUACERO (VISITABLE  DE  NOVIEMBRE A  MAYO)</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('Chiapadecorzo', 0,1)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">CHIAPA DE CORZO <i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>

									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">PUEBLO MAGICO DE CHIAPA DE CORZO </a></li>
												<li><a href="/descAtractivo">CAÑON DEL SUMIDERO POR RIO</a></li>
												<li><a href="/descAtractivo">IGLESIA  Y  CONVENTO  DE SANTO  DOMINGO  DE CHIAPA DE CORZO </a></li>
												<li><a href="/descAtractivo">FUENTE  (LA PILA)  ó  (L QUIOSCO) </a></li>
												<li><a href="/descAtractivo">CASCADA EL CHORREADERO </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('Sancris',0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">SAN CRISTOBAL DE LAS CASAS<i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">PUEBLO MAGICO DE SAN CRISTOBAL DE LAS CASAS </a></li>
												<li><a href="/descAtractivo">COMUNIDADES INDIGENAS : SAN JUANCHAMULA Y ZINACANTAN </a></li>
												<li><a href="/descAtractivo">CENTRO  CULTURAL DE LOS ALTOS DE CHIAPAS</a></li>
												<li><a href="/descAtractivo">MUSEO  OBISPO SAMUEL RUIZ  </a></li>
												<li><a href="/descAtractivo">MUSEO DEL JADE</a></li>
												<li><a href="/descAtractivo">MUSEO NA – BOLOM</a></li>
												<li><a href="/descAtractivo">GRUTAS DE RANCHO NUEVO</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('Comitan', 0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">COMITÁN DE DOMINGUEZ<i class="indicator icon-plus pull-right"></i></a>
										</h4>

									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">PUEBLO MAGICO DE COMITAN DE DOMINGUEZ </a></li>
												<li><a href="/descAtractivo">MUSEO  DR. BELISARIO  DOMINGUEZ</a></li>
												<li><a href="/descAtractivo">LAS CASCADAS DEL  CHIFLON</a></li>
												<li><a href="/descAtractivo">LA ZONA ARQUEOLOGICA DE CHINCULTIK</a></li>
												<li><a href="/descAtractivo">LOS LAGOS DEMONTEBELLO</a></li>
												<li><a href="/descAtractivo">CENTRO ECOTURISTICO LAS NUBES</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a  onclick="onHtmlClick('Gucamayas', 0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">CENTRO  ECOTURISTICO  DE LAS  GUACAMAYAS<i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">CENTRO  ECOTURISTICO  DE LAS  GUACAMAYAS</a></li>
												<li><a href="/descAtractivo">PASEO EN LANCHA  RIO LACANTUN Y  RIO TZENDALES</a></li>
												<li><a href="/descAtractivo">RESERVA DE LA BIOSFERA  DE  MONTES  AZULES</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('Yax', 0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">YAXCHILAN<i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">LA  ZONA  ARQUEOLOGICA  DE YAXCHILAN </a></li>
												<li><a href="/descAtractivo">LA ZONA ARQUEOLOGICA DE  BONAMPAK</a></li>
												<li><a href="/descAtractivo">RAFTING (DESCENSO  DE CASCADAS  EN BALSA  RIO LACANJA)</a></li>
												<li><a href="/descAtractivo">CASCADAS DE LAS GOLONDRINAS </a></li>
												<li><a href="/descAtractivo">CASCADAS DE ROBERTO BARRIOS</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a onclick="onHtmlClick('Palenque', 0)" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">PALENQUE<i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="/descAtractivo">PUEBLO MAGICO  DE  PALENQUE </a></li>
												<li><a href="/descAtractivo">LAS CASCADAS DE AGUA AZUL</a></li>
												<li><a href="/descAtractivo">LA CASCADA DE MISOL HA </a></li>
												<li><a href="/descAtractivo">LA ZONA ARQUEOLOGICA DE PALENQUE</a></li>
												<li><a href="/descAtractivo">ECO PARQUE LOS ALUXES </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a  onclick="onHtmlClick('Villa',0)" class="accordion-toggle " data-toggle="collapse" data-parent="#accordion" href="#collapseEight">VILLA HERMOSA, TABASCO<i class="indicator icon-plus pull-right"></i></a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="chiapasList">
												<li><a href="#">PARQUE MUSEO LA VENTA  (CULTURA OLMECA)</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-md-8">
							<!-- START MAP -->
							<div id="map" class="map"></div>
							<!-- END MAP -->
						</div>
					</div>
					<div class="white_bg">
						<div class="container margin_60">
							
							<!-- End row -->

							<div class="banner colored">

								<h4>Discover our Top tours <span>from $34</span></h4>
								<p>
									Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
								</p>
								<a href="single_tour.html" class="btn_1 white">Read more</a>
							</div>
							<!--MAPA-->  
							<div>

							</div>
							<!-- End row -->
						</div>
						<!-- End container -->

					</div>
					<!-- End white_bg -->
					
					
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
						@foreach($reserva as $item)
						<hr>
						<div class="row">
							<div class="col-md-8 col-sm-6 hidden-xs">
								<img src="{{asset($item->imagen)}}" alt="chiapas-family-tours-laptopimage" class="img-responsive laptop">
							</div>
							<div class="col-md-4 col-sm-6">
								<h3>{{$item->infoSecundario}}</h3>
								<p>
									<h3>{{$item->titulo}}</h3>
								</p>
								
								<div class="panel-group getStartedInstructions" id="accordion">
									@foreach($reservaDetalle as $itemDetalle)
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#{{$itemDetalle->id_reservadetalle}}"><span>1</span> {{$itemDetalle->titulo}}<i class="indicator icon-plus pull-right"></i></a>
											</h4>
										</div>
										<div id="{{$itemDetalle->id_reservadetalle}}" class="panel-collapse collapse">
											<div class="panel-body">
												<ul class="chiapasList">
													<li><a href="/descAtractivo">{{$itemDetalle->descripcion}}</a></li>
												</ul>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							   
							</div>
						</div>

						@endforeach
						<!-- End row -->

					</div>
					<!-- End container -->
				</main>
				<!-- End main -->

@endsection

@push('inicioScripts')
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('rev-slider-files/js/jquery.themepunch.tools.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/jquery.themepunch.revolution.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.actions.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.carousel.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.migration.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.navigation.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.parallax.min.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
				<!-- Map -->
				<script src="http://maps.googleapis.com/maps/api/js"></script>
				<script type="text/javascript" src="{{asset('js/map_home.js')}}"></script>
				<script type="text/javascript" src="{{asset('rev-slider-files/js/extensions/revolution.extension.video.min.js')}}"></script>

				<script type="text/javascript">
					var tpj = jQuery;

					var revapi54;
					tpj(document).ready(function () {
						if (tpj("#rev_slider_54_1").revolution == undefined) {
							revslider_showDoubleJqueryError("#rev_slider_54_1");
						} else {
							revapi54 = tpj("#rev_slider_54_1").show().revolution({
								sliderType: "standard",
								jsFileLocation: "rev-slider-files/js/",
								sliderLayout: "fullwidth",
								dottedOverlay: "none",
								delay: 9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									mouseScrollReverse:"default",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										touchOnDesktop:"off",
										swipe_threshold: 75,
										swipe_min_touches: 50,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"uranus",
										enable:true,
										hide_onmobile:true,
										hide_under:778,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:20,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:20,
											v_offset:0
										}
									}
								},
								responsiveLevels: [1240, 1024, 778, 480],
								visibilityLevels: [1240, 1024, 778, 480],
								gridwidth: [1240, 1024, 778, 480],
								gridheight: [700, 550, 860, 480],
								lazyType: "none",
								parallax: {
									type: "mouse",
									origo: "slidercenter",
									speed: 2000,
									levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
									disable_onmobile: "on"
								},
								shadow: 0,
								spinner: "off",
								stopLoop: "on",
								stopAfterLoops: 0,
								stopAtSlide: 1,
								shuffle: "off",
								autoHeight: "off",
								disableProgressBar: "on",
								hideThumbsOnMobile: "off",
								hideSliderAtLimit: 0,
								hideCaptionAtLimit: 0,
								hideAllCaptionAtLilmit: 0,
								debugMode: false,
								fallbacks: {
									simplifyAll: "off",
									nextSlideOnWindowFocus: "off",
									disableFocusListener: false,
								}
							});
						}
					}); /*ready*/
				</script>

				<!-- Map -->
				<script src="{{asset('js/infobox.js')}}"></script>
@endpush