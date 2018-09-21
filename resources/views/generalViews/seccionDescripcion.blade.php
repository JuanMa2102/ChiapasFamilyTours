@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/single_hotel_bg_1.jpg')}}" data-natural-width="1400" data-natural-height="470">
	<div class="parallax-content-2">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<h1>HOTEL BO</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End section -->

<main>
	<!-- End Position -->

	<div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div>
	<!-- End Map -->

	<div class="container margin_60">
		<div class="row">
			<div class="col-md-8" id="single_tour_desc">
				<div id="Img_carousel" class="slider-pro">
					<div class="sp-slides">

						<div class="sp-slide">
							<img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/1_medium.jpg')}}" data-small="{{asset('img/slider_single_tour/1_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/1_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/1_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/1_large.jpg')}}">
						</div>
						<div class="sp-slide">
							<img alt="Image" class="sp-image" src="{{asset('css/images/blank.gif')}}" data-src="{{asset('img/slider_single_tour/2_medium.jpg')}}" data-small="{{asset('/slimgider_single_tour/2_small.jpg')}}" data-medium="{{asset('img/slider_single_tour/2_medium.jpg')}}" data-large="{{asset('img/slider_single_tour/2_large.jpg')}}" data-retina="{{asset('img/slider_single_tour/2_large.jpg')}}">
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
					<div class="sp-thumbnails">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/1_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/2_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/3_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/4_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/5_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/6_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/7_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/8_medium.jpg')}}">
						<img alt="Image" class="sp-thumbnail" src="{{asset('img/slider_single_tour/9_medium.jpg')}}">
					</div>
				</div>

				<hr>

				<div class="row">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item active">
							<a class="btn_full nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Descripcion</a>
						</li>
						<li class="nav-item">
							<a class="btn_full nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cuartos</a>
						</li>
						<li class="nav-item">
							<a class="btn_full nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Otros</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade active in" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<h3> Descripcion</h3>
							<p>
								<h4> <strong>HOTEL BO </strong></h4> <br>ORGULLO DE SAN CRISTOBAL CON SUS INTERIORES RELAJANTES  DEDICADOS  AL  CONFORT   Y  SU “ RESTAURANTE LUM”   SIN DUDA DE LOS MEJORES. EN SAN CRISTOBAL.
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
									<a href="{{asset('img/carousel/1.jpg')}}"><img src="{{asset('img/carousel/1.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/2.jpg')}}"><img src="{{asset('img/carousel/2.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/3.jpg')}}"><img src="{{asset('img/carousel/3.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/4.jpg')}}"><img src="{{asset('img/carousel/4.jpg')}}" alt="Image">
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
									<a href="{{asset('img/carousel/1.jpg')}}"><img src="{{asset('img/carousel/1.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/2.jpg')}}"><img src="{{asset('img/carousel/2.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/3.jpg')}}"><img src="{{asset('img/carousel/3.jpg')}}" alt="Image">
									</a>
								</div>
								<div class="item">
									<a href="{{asset('img/carousel/4.jpg')}}"><img src="{{asset('img/carousel/4.jpg')}}" alt="Image">
									</a>
								</div>
							</div>
							<!-- End photo carousel  -->
						</div>
						<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><li>Lorem ipsum dolor sit amet</li>
							<li>No scripta electram necessitatibus sit</li>
							<li>Quidam percipitur instructior an eum</li></div>
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

				<aside class="col-md-4">
					<div class="box_style_1 expose">
						<h3 class="inner">Check Availability</h3>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label><i class="icon-calendar-7"></i> Check in</label>
									<input class="date-pick form-control" data-date-format="M d, D" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label><i class="icon-calendar-7"></i> Check out</label>
									<input class="date-pick form-control" data-date-format="M d, D" type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Adults</label>
									<div class="numbers-row">
										<input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Children</label>
									<div class="numbers-row">
										<input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
									</div>
								</div>
							</div>
						</div>
						<br>

						<a class="btn_full" href="contacto.html">Check now</a>
						<a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
					</div>
					<!--/box_style_1 -->

					<div class="box_style_4">
						<a class="btn_full" href="contacto.html">Check now</a>
						<i class="icon_set_1_icon-90"></i>
						<h4><span>Book</span> by phone</h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>
					<div class="box_style_4">
						<a class="btn_full" href="contacto.html">Check now</a>
						<i class="icon_set_1_icon-90"></i>
						<h4><span>Book</span> by phone</h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>

				</aside>
			</div>
			<!--End row -->
		</div>
		<!--End container -->

		<div id="overlay"></div>
		<!-- Mask on input focus -->

	</main>
	<!-- End main -->
    <!-- part2 -->
	<main>
    <div id="toTop"></div><!-- Back to top button -->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_set_1_icon-78"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->	

	<!-- Modal Review -->
	<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myReviewLabel">Write your review</h4>
				</div>
				<div class="modal-body">
					<div id="message-review">
					</div>
					<form method="post" action="{{asset('assets/review_hotel.php')}}" name="review_hotel" id="review_hotel">
						<input name="hotel_name" id="hotel_name" type="hidden" value="Mariott Hotel Paris">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
								</div>
							</div>
						</div>
						<!-- End row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="room_type_review" id="room_type_review">
										<option value="">Select room type</option>
										<option value="Single room">Single Room</option>
										<option value="Double Room">Double Room</option>
										<option value="King double room">King Double Room</option>
									</select>
								</div>
							</div>
						</div>
						<!-- End row -->
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Cleanliness</label>
									<select class="form-control" name="cleanliness_review" id="cleanliness_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Comfort</label>
									<select class="form-control" name="comfort_review" id="comfort_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
						</div>
						<!-- End row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Price</label>
									<select class="form-control" name="price_review" id="price_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Quality</label>
									<select class="form-control" name="quality_review" id="quality_review">
										<option value="">Please review</option>
										<option value="Low">Low</option>
										<option value="Sufficient">Sufficient</option>
										<option value="Good">Good</option>
										<option value="Excellent">Excellent</option>
										<option value="Superb">Super</option>
										<option value="Not rated">I don't know</option>
									</select>
								</div>
							</div>
						</div>
						<!-- End row -->
						<div class="form-group">
							<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
						</div>
						<div class="form-group">
							<input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
						</div>
						<input type="submit" value="Submit" class="btn_1" id="submit-review">
					</form>
				</div>
			</div>
		</div>
	</div>
	</main>
	<!-- End modal review -->
    <!-- end part2 --> 

@endsection
@push('seccionDescripcionScript')
	<!-- CSS -->
	<link href="{{asset('css/slider-pro.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/date_time_picker.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">

<script src="{{asset('js/icheck.js')}}"></script>
	<script>
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-grey',
			radioClass: 'iradio_square-grey'
		});
	</script>
	<!-- Date and time pickers -->
	<script src="{{asset('js/jquery.sliderPro.min.js')}}"></script>
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
	<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
	<script>
		$('input.date-pick').datepicker('setDate', 'today');
	</script>
	
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script>
		$(document).ready(function () {
			$(".carousel").owlCarousel({
				items: 4,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 3]
			});
		});
	</script>
@endpush