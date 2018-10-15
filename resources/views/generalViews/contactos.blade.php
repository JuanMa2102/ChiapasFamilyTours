@extends ('masterPage.masterPrincipal') 

@section ('content')

	<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/header_bg.jpg')}}" data-natural-width="1400" data-natural-height="470">
		<div class="parallax-content-1">
			<div class="animated fadeInDown">
				<h1>Contactanos</h1>
				<p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
			</div>
		</div>
	</section>
	<!-- End Section -->

	<main>
		<div class="container margin_60">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="form_title">
						<h3><strong><i class="icon-pencil"></i></strong>Fill the form below</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">

						<div id="message-contact"></div>
						{!! Form::open(array('url' => 'contactos','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!} 
						{{Form::token()}}
								<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group nombreGroup">
										<label>Nombre: </label>
										<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre aquí.">
										
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group apellidoGroup">
										<label>Apellido: </label>
										<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingese su apellido aquí.">
									</div>
								</div>
							</div>
							<!-- End row -->
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group correoGroup">
										<label>Correo electrónico: </label>
										<input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@dominio.com">
                                         <span id="emailOK" style="color:red" class="help-block"></span>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group telefonoGroup" >
											<label>Teléfono: </label>
											<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono aquí.">
											<span id="telefonoOK" style="color:red" class="help-block"></span>
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group mensajeGroup">
										<label>Mensaje: </label>
										<textarea rows="5" id="mensaje" name="mensaje" class="form-control" placeholder="Escriba su mensaje aquí." style="height:200px;"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 ">
									<div class="form-group verificacionGroup">
										<label>Verificación: </label>
										<input type="text" id="verificacion" name="verificacion" class=" form-control add_bottom_30" placeholder="¡ Pruebe que es humano ! 3 + 1  =¿ ? ">
									</div>
								</div>
							</div>
								<input type="submit" value="Enviar" class="btn_1" id="submit-contact">
						
                                {!! Form::close() !!}

					</div>
				</div>
				<!-- End col-md-8 -->

				<div class="col-md-4 col-sm-4">
					<div class="box_style_1">
						<span class="tape"></span>
						<h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
						<p>
							Place Charles de Gaulle, 75008 Paris
						</p>
						<hr>
						<h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
						</p>
						<ul id="contact-info">
							<li>+ 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
							<li><a href="#">info@domain.com</a>
							</li>
						</ul>
					</div>
					<div class="box_style_4">
						<i class="icon_set_1_icon-57"></i>
						<h4>Need <span>Help?</span></h4>
						<a href="tel://004542344599" class="phone">+45 423 445 99</a>
						<small>Monday to Friday 9.00am - 7.30pm</small>
					</div>
				</div>
				<!-- End col-md-4 -->
			</div>
			<!-- End row -->
		</div>
		<!-- End container -->

		<div id="map_contact"></div>
		<!-- end map-->
		<div id="directions">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form action="http://maps.google.com/maps" method="get" target="_blank">
							<div class="input-group">
								<input type="text" name="saddr" placeholder="Enter your starting point" class="form-control style-2" />
								<input type="hidden" name="daddr" value="New York, NY 11430" />
								<!-- Write here your end point -->
								<span class="input-group-btn">
					<button class="btn" type="submit" value="Get directions" style="margin-left:0;">GET DIRECTIONS</button>
					</span>
							</div>
							<!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end directions-->
	</main>
	<!-- End main -->

@endsection
@push("contactScripts")
	<script src="{{asset('assets/validarcontacto.js')}}"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
                                   
                                   
	<script src="{{asset('js/map_contact.js')}}"></script>
	<script src="{{asset('js/infobox.js')}}"></script>
@endpush