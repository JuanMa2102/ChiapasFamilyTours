@extends('masterPage.masterPrincipal') @section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Nosotros</h1>
            <p>Descubra quién es Chiapas Family Tours</p>
        </div>
    </div>
</section>
<!-- End Section -->

<main>

    <!-- End Position -->

    <div class="container margin_60">
        

       
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <h2><i class="icon-thumbs-up"></i> Misión</h2>
                <p>{!!$infoGeneral[0]->mision!!}</p>
            </div>
            <div class="col-lg-4">
                <h2><i class="icon-award"></i> Visión</h2>
                <p>{!!$infoGeneral[0]->vision!!}</p>
            </div>
            <div class="col-lg-4">
                <h2><i class="icon-check"></i> Valores</h2>
                <p>{!!$infoGeneral[0]->valor!!}</p>
            </div>

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->


    <!-- End container-fluid  -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>¿Qué dicen nuestros <span>clientes</span>?</h2>
        </div>

        <div class="row">
        @foreach($clientes as $item)
        <div class="col-lg-12">
                <div class="review_strip">
                    <h4>{{$item->nombre}}</h4>
                    <p>
                        {!!$item->mensaje!!}
                    </p>
                    <div class="rating">
                        <a {{$item->imagen == '0' ? 'disabled' : ''}} href="{{$item->imagen == '0' ? '#' : $item->imagen}}">{{$item->imagen == '0' ? 'Imagen no asignada' : 'Ver imagen añadida'}}</a>
                    </div>
                </div>
                <!-- End review strip -->
            </div>
        @endforeach
            

         
        </div>
        <!-- End row -->
      
        <!-- End row -->

        <hr>


        <!-- End row -->

    </div>
    <!-- End Container -->
</main>
<!-- End main -->


@endsection

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: Acerca de nosotros</title>
<meta name="description" content="Descubra quiénes somos y nuestro propósito con usted. En esta sección podrá ver quiénes somos, nuestros valores, misión, visión y lo que dicen nuestros clientes de nuestro trabajo."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/nosotros" />
<meta property="og:description" content="Descubra quiénes somos y nuestro propósito con usted. En esta sección podrá ver quiénes somos, nuestros valores, misión, visión y lo que dicen nuestros clientes de nuestro trabajo."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/nosotros" />
@endsection