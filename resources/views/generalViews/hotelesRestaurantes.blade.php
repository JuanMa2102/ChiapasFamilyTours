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
                            <option selected>Hoteles</option>
                            <option>Restaurantes</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="buscarHoRe">Buscar: </label>
                        <input name="buscarHoRe" placeholder="Ingrese un hotel o restaurante" type="text" class="form-control">
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
                  <div class="ribbon_3 popular"><span>Popular</span></div>
                  <div class="img_container hoteles">
                     <a href="/seccionDescripcion">
                         <img src="{{($item->imagen)}}" width="800" height="533" class="img-responsive" alt="Image">
                         <div class="score"><span>7.5</span>Good</div>
                         <div class="short_info hotel">
                            From/Per night<span class="price"><sup>$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class="hotel_title">
                 <h3><strong>{{ $item->nombre }}</strong> Hotel</h3>
                 <div class="rating">
                    <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star-empty"></i>
                </div><!-- end rating -->
                <div class="wishlist">
                    <a class="tooltip_flip tooltip-effect-1" href="#">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                </div><!-- End wish list-->
                <div onclick="onHtmlClick('Hotels', 0)" class="view_on_map">Ver en google maps</div>
            </div>
        </div><!-- End box tour -->
    </div><!-- End col-md-6 -->
    @endforeach	
</div><!-- End row -->


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
</div><!-- end pagination-->

</div>


<div class="col-md-5 map-right hidden-sm hidden-xs">
 <div class="map" id="map"></div>
</div>
</div><!-- End row-->
</div><!-- End container-fluid -->

@endsection

@push('hotelesRestaurantesScript')
<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('js/map_listing_hotels.js')}}"></script>
<script src="{{asset('js/infobox.js')}}"></script>
@endpush