@extends('masterPage.masterPrincipal') @section('content')
<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>¿PORQUÉ ELEGIRNOS?</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="whyChooseUs">
    <div class="container margin_60">
        @foreach($info as $item)
        <div class="row">
            <div class="iconContent">
                <div class="icon">
                    <i class="{{$item->icon}}"></i>
                </div>
            </div>
            <div class="col-md-12">
                <div class="descripcion">
                    <h3>{{$item->titulo}}</h3>
                    <p>{!! $item->descripcion !!}</p>
                </div>
            </div>
        </div>
        @endforeach
        <hr>
    </div>
</main>

@endsection @extends ('meta.metaComponent') @section('meta')
<title>Chiapas Family Tours | ¿Porqué elegirnos?</title>
<meta name="description" content="En esta sección podrá ver razones por las que puede contar con nosotros para su viaje por Chiapas." />
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/porque-elegirnos" />
<meta property="og:description" content="En esta sección podrá ver razones por las que puede contar con nosotros para su viaje por Chiapas." />
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/porque-elegirnos" /> @endsection