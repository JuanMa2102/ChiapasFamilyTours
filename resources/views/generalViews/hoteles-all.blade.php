@extends ('masterPage.masterPrincipal') @section ('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-md-7 content-left">
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

                        <div class="img_container hoteles">
                            <a href="/seccionDescripcion">
                         <img src="{{($item->imagenHotel)}}" width="800" height="533" class="img-responsive" alt="Image">
                    </a>
                        </div>
                        <div class="hotel_title">
                            <h3><strong>{{ $item->nombreHotel }}</strong> - <span style="font-size: 11px">{{$item->tipoHotel}}</span></h3>
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
            <iframe src="" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- End row-->
</div>
<!-- End container-fluid -->

@endsection @push('hotelesRestaurantesScript')
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