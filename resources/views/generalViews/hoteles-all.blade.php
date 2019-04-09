@extends ('masterPage.masterPrincipal') @section ('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-md-7 content-left">
        <h1><span>Hoteles
					<span></h1>
            <div class="row filtroHotelesRestaurantes">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="selectHoRe">Mostrar por: </label>
                        <select class="form-control" id="selectHoRe" name="selectHoRe">
                                <option value="0">Seleccione...</option>
                                <option value="all">Mostrar todos los hoteles</option>
                                @foreach($tipoHotel as $item)
                                <option class="clickableOption" data-href="/contactos" value="{{$item->id_tipoHotel}}">{{$item->descripcion}}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    {!!Form::open(array('method'=>'POST','id'=>'busquedaHotel','class'=>'form-horizontal','enctype'=>'multipart/form-data','action'=>'busquedaHotelController@store'))!!} {{Form::token()}}

                    <div class="form-group">
                        <label for="buscarHoRe">Buscar: </label>
                        <input name="buscarHoRe" placeholder="Ingrese un hotel" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="form-control" type="submit">Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    {!!Form::close()!!}
                </div>

            </div>

            <div class="row">
                @foreach($hoteles as $item)
                <div class="col-md-6 col-sm-6">
                    <div class="hotel_container">

                        <div class="img_container hoteles" style="background-image: url({{($item->imagenHotel)}})">
                        </div>
                        <div class="hotel_title">
                            <h3><strong>{{ $item->nombreHotel }}</strong></h3>
                            <p style="text-align: center;">{{$item->tipoHotel}} - {{$item->municipio}}</p>
                            <div class="hotelActions">
                                <div class="verEnMapa"><button direccion="{{$item->direccionHotel}}" class="seeOnMap">Ver en mapa</button></div>
                                <div class="visitarPaginaHotel"><a href="{{$item->paginaHotel == null ? '#' : 'http://'.$item->paginaHotel}}" target="_blank">{{$item->paginaHotel == null ? 'Sin página' : 'Ir a página web'}}</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- End box tour -->
                </div>
                <!-- End col-md-6 -->
                @endforeach
            </div>
            <!-- End row -->
            <hr>
            <div class="text-center">

                {{ $hoteles->links() }}

            </div>
            <!-- end pagination-->

        </div>


        <div class="col-md-5 map-right hidden-sm hidden-xs">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2074371.8115083806!2d-92.34817621230894!3d16.302530693045174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d44b49757ce67%3A0xcf0033824619d615!2sChiapas!5e0!3m2!1ses-419!2smx!4v1554560356589!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- End row-->
</div>
<!-- End container-fluid -->

@endsection 

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: información de hoteles</title>
<meta name="description" content="En esta sección, usted podrá ver información básica sobre los hoteles que le ofrecemos en nuestros paquetes. Cualquier duda porfavor, mándenos un mensaje en la sección de contactos."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/hoteles-all" />
<meta property="og:description" content="En esta sección, usted podrá ver información básica sobre los hoteles que le ofrecemos en nuestros paquetes. Cualquier duda porfavor, mándenos un mensaje en la sección de contactos."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/hoteles-all" />
@endsection

@push('hotelesRestaurantesScript')
<script>
    $(document).on('change', '#selectHoRe', function(e) {
        var tipoHotel = this.options[e.target.selectedIndex].value;
        window.location = "/tipo-hoteles/" + tipoHotel;
    });
</script>
<!-- Map -->
<script src="{{asset('js/funcionMapa.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script src="{{asset('js/map_listing_hotels.js')}}"></script>
<script src="{{asset('js/infobox.js')}}"></script>
@endpush