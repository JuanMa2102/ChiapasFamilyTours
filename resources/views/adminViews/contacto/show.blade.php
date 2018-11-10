@extends('masterPage.master')

@section('content')
                <div class="page-content-wrap">                
                 
                     <div class="row">
                         <div class="col-md-12">
 
                             <!-- START DEFAULT DATATABLE -->
                             <div class="panel-body panel-default">
                                 <div class="panel-heading">                                
                                     <h3 class="panel-title">Contacto</h3>
                                                          
                                 </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <div>
                                                    <h3 class="panel-title" ><strong>Nombre:</strong>  </h3>
                                                </div>
                                                <div>
                                                    <p>{{$datos->nombre}}</p>
                                                    
                                                </div>                                    
                                             </div>
                                             <div>
                                                <div >
                                                    <h3 class="panel-title"><strong>Telefono: </strong> </h3>
                                                </div>
                                                <div >
                                                    <p>{{$datos->telefono}}</p>
                                                    
                                                </div>                                    
                                             </div>
                                             
                                        </div>

                                        <div class="col-md-6">
                                            <div>
                                                <div>
                                                    <h3 class="panel-title"><strong>Apellido:</strong>  </h3>
                                                </div>
                                                <div>
                                                    <p>{{$datos->apellido}}</p>
                                                </div>                                    
                                             </div>
                                             <div>
                                                <div>
                                                    <h3 class="panel-title"><strong>Email:</strong>  </h3>
                                                </div>
                                                <div >
                                                    <p>{{$datos->email}}</p>
                                                    
                                                </div>                                    
                                             </div>
                                             
                                    </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div>
                                                <div>
                                                    <h3 class="panel-title" ><strong>Mensaje:</strong>  </h3>
                                                </div>
                                                <div>
                                                    <p>{{$datos->mensaje}}</p>
                                                    
                                                </div>                                    
                                             </div>
                                             
                                        </div>
                                    </div>


                                <div class="panel-footer">                                   
                                   <a  href="{{url('administrador/adminContactos')}}" ><button class="btn btn-primary pull-right">Atras</button></a> 
                                </div>
                                <br>
                        </div>
                    </div>
                </div>        
</div>
@endsection