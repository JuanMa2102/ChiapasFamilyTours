@extends ('masterPage.masterPrincipal') 

@section ('content')

     <main>

<h1 class="comparacionPreciosTitle">Comparación de Paquetes Privados</h1>

<div class="table-responsive tablaComparacionPrecios">
  @foreach($paquete as $keyPaquete => $item)
  <table class="table table-hover">
      <thead>
        <tr>
          <th class="titlePaquete" scope="col">NOMBRE DEL PAQUETE</th>
          @foreach($dias as $key => $itemDias)
            @if($item->id_paquete == $itemDias->id_paquete)
              <th scope="col">Paquete {{$itemDias->cantidad}} Días </th>
            @endif
          @endforeach 
      </tr>
      </thead>
  <tbody>
    <?php $bandera = 0 ?> 
      @for($j = 1; $j <= 100 ; $j++)
        <tr>
          @foreach($inclusion as $itemDetalle)
            @if($bandera == 0)
              <th style="vertical-align: middle;" rowspan="0" scope="row">{{$item->nombre}}</th>
              <?php $bandera = 1 ?> 
            @endif

            @if($itemDetalle->numeracion == $j && $itemDetalle->id_paquete == $item->id_paquete)
              <td>{{$itemDetalle->inclusion}}</td>
            @endif
          @endforeach
           </tr>
      @endfor
  </tbody>
</table>
@endforeach
</div> 

</main>
<!-- End main -->

@endsection
