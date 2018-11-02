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
                        <p>
                            {{$item->texto1}}
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="texto">
                        <p>
                            {{$item->texto2}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>


@endsection