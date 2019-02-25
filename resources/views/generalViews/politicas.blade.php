@extends ('masterPage.masterPrincipal') 

@section ('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>POLÍTICAS DE LA EMPRESA</h1>
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
			<div class="col-lg-12 col-md-12">
                {!!$datos->descripcion!!}
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
<title>Chiapas Family Tours: políticas de reservación</title>
<meta name="description" content="En esta sección vea las políticas de reservaciones que tenemos para usted, en caso de que tenga dudas sobre nuestros servicios, aquí somos más específicos. Pruebe también mandarnos un mensaje en la sección de contactos."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/politicas" />
<meta property="og:description" content="En esta sección vea las políticas de reservaciones que tenemos para usted, en caso de que tenga dudas sobre nuestros servicios, aquí somos más específicos. Pruebe también mandarnos un mensaje en la sección de contactos."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/politicas" />
@endsection


@push('preguntasFrecuentesScript')
<script src="{{asset('js/cat_nav_mobile.js')}}"></script>
<script>
	$('#cat_nav').mobileMenu();
</script>
@endpush