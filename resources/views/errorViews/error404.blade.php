@extends ('masterPage.masterPrincipal') 

@section ('content')
<section id="hero2">
  <div class="intro_title error">
     <img src="{{asset('img/Recurso 3.png')}}" alt="Pic">
     <p class="animated fadeInDown" style="color:green">Oops!! No pudimos encontrar esta pagina</p>
     <a href="index.html" class="animated fadeInUp button_intro">Regresar a inicio</a>
 </div>

</section>
<!-- End hero -->

<main>
  <div class="container margin_60">

     <div class="banner colored add_bottom_30">
        <h4>Discover our Top tours <span>from $34</span></h4>
        <p>
           Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
       </p>
       <a href="single_tour.html" class="btn_1 white">Read more</a>
   </div>
   <div class="row">
    <div class="col-md-3 col-sm-6 text-center">
       <p>
          <a href="#"><img src="{{asset('img/bus.jpg')}}" alt="Pic" class="img-responsive">
          </a>
      </p>
      <h4><span>Sightseen tour</span> booking</h4>
      <p>
          Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
      </p>
  </div>
  <div class="col-md-3 col-sm-6 text-center">
   <p>
      <a href="#"><img src="{{asset('img/transfer.jpg')}}" alt="Pic" class="img-responsive">
      </a>
  </p>
  <h4><span>Transfer</span> booking</h4>
  <p>
      Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
  </p>
</div>
<div class="col-md-3 col-sm-6 text-center">
   <p>
      <a href="#"><img src="{{asset('img/guide.jpg')}}" alt="Pic" class="img-responsive">
      </a>
  </p>
  <h4><span>Tour guide</span> booking</h4>
  <p>
      Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
  </p>
</div>
<div class="col-md-3 col-sm-6 text-center">
   <p>
      <a href="#"><img src="{{asset('img/hotel.jpg')}}" alt="Pic" class="img-responsive">
      </a>
  </p>
  <h4><span>Hotel</span> booking</h4>
  <p>
      Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
  </p>
</div>
</div>
<!-- End row -->
</div>
<!-- End container -->
</main>
<!-- End main -->
@endsection