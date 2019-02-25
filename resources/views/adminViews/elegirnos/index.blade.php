@extends ('masterPage.master') @section ('content')
<div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">¿PORQUÉ ELEGIRNOS?</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Titulo</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($info as $item)
                                        <tr>
                                            <td>{{$item->id_elegirnos}}</td>
                                            <td>{{$item->titulo}}</td>
                                            <td>
                                                <ul>
                                                    <a href="{{URL::action('AdminElegirnosController@edit',$item->id_elegirnos)}}">
                                                    <button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                                                </ul>   
                                            </td>
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
@push('infoEmpresa')
<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='{{asset("js/plugins/icheck/icheck.min.js")}}'></script>
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>    

        <!-- END PAGE PLUGINS -->
@endpush