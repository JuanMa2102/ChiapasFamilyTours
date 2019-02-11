@extends ('masterPage.masterPrincipal') 

@section ('content')

<main>
    <div class="container margin_60 topCustom">
        @foreach($detalles as $item)
        <div class="itinerarioLargoContainer" id="{{$item->titulo}}">
            <div class="row">
				<h1 class="tituloAtractivo">{{$item->titulo}}</h1>
                <div class="col-md-6">
                <div class="imageItinerario" style="background-image: url({{$item->imagen}})">
                            </div>
							<small>{!!$item->descimagen!!}</small>
                </div>
                <div class="col-md-6">
                    <div class="texto">
                        <p>{!!$item->textolateral!!}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="texto">
                        <p>{!!$item->textopie!!}</p>
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
<title>Chiapas Family Tours: {{$nombre->nombre}}</title>
<meta name="description" content="En esta sección podrás conocer a detalle sobre {{$nombre->nombre}}. Hacemos énfasis en lo que destaca de este atractivo y te recomendamos tomarlo en cuenta en tu itinerario."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/descAtractivo/{{$id}}" />
<meta property="og:description" content="En esta sección podrás conocer a detalle sobre {{$nombre->nombre}}. Hacemos énfasis en lo que destaca de este atractivo y te recomendamos tomarlo en cuenta en tu itinerario."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/descAtractivo/{{$id}}" />
@endsection
