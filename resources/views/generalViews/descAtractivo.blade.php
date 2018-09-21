@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/single_hotel_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-2">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
 <!-- 					<span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span> -->
					<h1>CARAJILLO CAFE</h1>
			<!-- 		<span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span> -->
				</div>
				<div class="col-md-4 col-sm-4">
 <!-- 					<div id="price_single_main" class="hotel">
						from/per night <span><sup>$</sup>95</span>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End section -->

<main>
<!-- 	<div id="position">
		<div class="container">
			<ul>
				<li><a href="#">Home</a>
				</li>
				<li><a href="#">Category</a>
				</li>
				<li>Page active</li>
			</ul>
		</div>
	</div> -->
	<!-- End Position -->

	<div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div>
	<!-- End Map -->

	<div class="container margin_60">
		<div class="row">
			<div class="col-md-12" id="single_tour_desc">
				
				<p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
				</p>
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
					
				</div>

				<hr>

				<div class="row">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item active">
							<a class="btn_full nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Descripcion</a>
						</li>
						<li class="nav-item">
							<a class="btn_full nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Historia</a>
						</li>
						<li class="nav-item">
							<a class="btn_full nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ubicación</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade active in" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<h3> Descripcion</h3>
							<p>
								<h4> <strong>CARAJILLO CAFE </strong></h4> <br>Ir al “CARAJILLO” es algo imprescindible. Podrás localizarlo fácilmente sobre el Andador Real de Guadalupe, aquí podrás encontrar chocolate y café orgánico cultivado en Chiapas.
								Lo que debes pedir: un americano, un chocolate blanco y un pastel de chocolate.

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
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<h3>Rooms Types</h3>
							<h4>Single Room</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
							</p>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<ul class="list_icons">
										<li><i class="icon_set_1_icon-86"></i> Free wifi</li>
										<li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
										<li><i class="icon_set_2_icon-106"></i> Safety box</li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6">
									<ul class="list_ok">
										<li>Lorem ipsum dolor sit amet</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
									</ul>
								</div>
							</div>
							<div class="carousel magnific-gallery">
								<div class="item">
									<a href="img/carousel/1.jpg"><img src="{{asset('img/carousel/1.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/2.jpg"><img src="{{asset('img/carousel/2.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/3.jpg"><img src="{{asset('img/carousel/3.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/4.jpg"><img src="{{asset('img/carousel/4.jpg')}}" alt="Image">
									</a>
								</div>
							</div>
							<h4>Double Room</h4>
							<p>
								Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
							</p>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<ul class="list_icons">
										<li><i class="icon_set_1_icon-86"></i> Free wifi</li>
										<li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
										<li><i class="icon_set_2_icon-106"></i> Safety box</li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6">
									<ul class="list_ok">
										<li>Lorem ipsum dolor sit amet</li>
										<li>No scripta electram necessitatibus sit</li>
										<li>Quidam percipitur instructior an eum</li>
									</ul>
								</div>
							</div>
							<!-- End row  -->
							<div class="carousel magnific-gallery">
								<div class="item">
									<a href="img/carousel/1.jpg"><img src="{{asset('img/carousel/1.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/2.jpg"><img src="{{asset('img/carousel/2.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/3.jpg"><img src="{{asset('img/carousel/3.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="img/carousel/4.jpg"><img src="{{asset('img/carousel/4.jpg')}}" alt="Image">
									</a>
								</div>
							</div>
							<!-- End photo carousel  -->
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
							<div class="mapContainer">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122259.72191821584!2d-93.19961119825078!3d16.745985737963636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd85611d06e8f%3A0xdd78bd7b4662216a!2sTuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1534794507895" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						</div>


						
						<!-- End col-md-9  -->
					</div>
					<!-- End row  -->


					<div class="row">
						<div class="col-md-3">
							
						</div>
						<div class="col-md-9">

							<!-- End row  -->
							
							<!-- End photo carousel  -->

							
							
						</div>
						<!-- End col-md-9  -->
					</div>
					<!-- End row  -->

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
@endsection

@push('descAtractivoScript')
	<!-- CSS -->
	<link href="{{asset('css/slider-pro.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/date_time_picker.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">

<!-- Specific scripts -->
<script src="{{ asset('js/icheck.js') }}"></script>
<script>
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-grey',
			radioClass: 'iradio_square-grey'
		});
</script>
	<!-- Date and time pickers -->
<script src="{{ asset('js/jquery.sliderPro.min.js') }}"></script>
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
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<script>
		$('input.date-pick').datepicker('setDate', 'today');
	</script>
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>


	<script src="{{ asset('js/map.js') }}"></script>
	<script src="{{ asset('js/infobox.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script>
		$(document).ready(function () {
			$(".carousel").owlCarousel({
				items: 4,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 3]
			});
		});
	</script>
	<!--Review modal validation -->
    <script src="{{ asset('assets/validate.js') }}"></script>
    
    @endpush