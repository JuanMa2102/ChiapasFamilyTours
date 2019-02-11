@extends('masterPage.masterPrincipal') @section('content')


<main>
    <div class="container margin_60 topCustom">
        @foreach($itinerario as $item)
        <div class="itinerarioLargoContainer">
            <div class="row">
                <div class="col-md-6">
                <div class="imageItinerario" style="background-image: url({{$item->imagen}})">
                            </div>
                </div>
                <div class="col-md-6">
                    <div class="texto">
                        <p>{!!$item->texto1!!}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="texto">
                        <p>{!!$item->texto2!!}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>


@endsection

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: Itinerario de {{$info->paquete}} día {{$info->cantidad}}</title>
<meta name="description" content="Esta sección le permite explorar a detalle el itinerario del paquete {{$info->paquete}} día {{$info->cantidad}}. Si usted tiene alguna idea y no se refleja aquí porfavor pregunte en la sección de contacto."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/itinerarioDetallado/{{$id}}" />
<meta property="og:description" content="Esta sección le permite explorar a detalle el itinerario del paquete {{$info->paquete}} día {{$info->cantidad}}. Si usted tiene alguna idea y no se refleja aquí porfavor pregunte en la sección de contacto."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/itinerarioDetallado/{{$id}}" />
@endsection