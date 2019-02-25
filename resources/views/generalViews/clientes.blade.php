@extends('masterPage.masterPrincipal')
@section('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>¿QUÉ DICEN NUESTROS CLIENTES?</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<main>
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
</main>


@endsection
@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours | ¿Qué dicen nuestros clientes?</title>
<meta name="description" content="En esta sección, podrá ver lo que dicen nuestros clientes."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/clientes" />
<meta property="og:description" content="En esta sección, podrá ver lo que dicen nuestros clientes."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/clientes" />
@endsection