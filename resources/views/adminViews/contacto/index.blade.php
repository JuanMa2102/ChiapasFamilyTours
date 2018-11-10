@extends('masterPage.master')

@section('content')
                 <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             <div class="panel panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">Contacto</h3>
                                                          
                                 </div>
                                  
                                 <div class="panel-body">
                                     <table class="table datatable">
                                         <thead>
                                             <tr>
                                                 <th>Nombre</th>
                                                 <th>Fecha</th>
                                                 <th>Estatus</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                         @foreach($contacto as $item)   
                                         <tr class="clickableRow" data-href="{{ URL::action('AdminContactosController@show',$item->id_contacto) }}">
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->fecha_ins}}</td>
                                            @if ($item->visto == 0)
                                                <td>Sin Leer <span style="color:red" class="fa fa-eye"></span></td>
                                            @else
                                                <td>Leído <span style="color:green" class="fa fa-eye"></span></td>
                                            @endif  
                                            
                                         </tr>
                                         @endforeach
                                         
                                         </tbody>
                                     </table>
                                 </div>
                             </div>
                             <!-- END DEFAULT DATATABLE -->
 
                         </div>
                     </div>                                
                     
                 </div>
                 <!-- PAGE CONTENT WRAPPER -->                                
                  
@endsection

@push('createTrasladosScript')
<script>
    $(document).ready(()=>{
        $(document).on("click",".clickableRow",function() {
        window.location = $(this).data("href");
        });
    });
    
</script>

        <script type='text/javascript' src="{{asset('js/plugins/icheck/icheck.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
                
                <script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>  
                <!-- END THIS PAGE PLUGINS -->
        <!-- START TEMPLATE -->
                     
                <!-- END TEMPLATE -->      
        
@endpush