<div class="message-box message-box-danger animated fadeIn" id="message-box-danger-{{$item->id_actividadAventura}}">
{{Form::Open(array('action'=>array('adminActividadAventuraController@destroy',$item->id_actividadAventura),'method'=>'delete'))}}
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Eliminar Registro</div>
                    <div class="mb-content">
                        <p>¿Esta seguro que desea eliminar este registro?</p>
                    </div>
                    <div class="mb-footer">
                        
                    <button class="btn btn-primary btn-lg pull-right" type="submit">Eliminar</button>
                        &nbsp; 
                    <button class="btn btn-default btn-lg pull-right" type="button" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
{{Form::Close()}}
</div>