@extends ('masterPage.masterPrincipal')
@section ('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-md-7 content-left">
            <div class="row filtroHotelesRestaurantes">
                <form>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="selectHoRe">Mostrar por: </label>
                            <select class="form-control" name="selectHoRe">
                            <option selected>Hoteles Boutique</option>
                            <option>Hoteles 4 Estrellas</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="buscarHoRe">Buscar: </label>
                            <input name="buscarHoRe" placeholder="Ingrese un hotel" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="form-control" type="button">Buscar <i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                @foreach($hoteles as $item)
                <div class="col-md-6 col-sm-6">
                    <div class="hotel_container">

                        <div class="img_container hoteles">
                            <a href="/seccionDescripcion">
                         <img src="{{($item->imagen)}}" width="800" height="533" class="img-responsive" alt="Image">
                    </a>
                        </div>
                        <div class="hotel_title">
                            <h3><strong>{{ $item->nombre }}</strong> - <span style="font-size: 11px">{{$item->id_TipoHotel == 1 ? 'Hotel Boutique' : 'Hotel 4 Estrellas'}}</span></h3>
                            <div class="hotelActions">
                                <div class="verEnMapa"><button direccion="{{$item->direccion}}" class="seeOnMap">Ver en mapa</button></div>
                                <div class="visitarPaginaHotel"><a href="{{$item->pagina == null ? '#' : 'http://'.$item->pagina}}" target="_blank">{{$item->pagina == null ? 'Sin página' : 'Ir a página web'}}</a></div>
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
                <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
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

@endsection 
@push('hotelesRestaurantesScript')
<!-- Map -->
<script src="{{asset('js/funcionMapa.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script src="{{asset('js/map_listing_hotels.js')}}"></script>
<script src="{{asset('js/infobox.js')}}"></script>
@endpush