@extends ('masterPage.masterPrincipal') @section ('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="{{asset('img/paginainicio.JPG')}}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>CONTÁCTANOS</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<main>
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong>Envíenos un mensaje</h3>
                    <p>
                        Por favor, llene los siguientes campos del formulario.
                    </p>
                </div>
                <div class="step">

                    <div id="message-contact"></div>
                    {!! Form::open(array('url' => 'contactos','autocomplete'=>'off','method'=>'POST', 'onsubmit'=>'return validarsend();')) !!} {{Form::token()}}
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group nombreGroup">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre aquí.">

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group apellidoGroup">
                                <label>Apellido: </label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido aquí.">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group correoGroup">
                                <label>Correo electrónico: </label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="ejemplo@dominio.com">
                                <span id="emailOK" style="color:red" class="help-block"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group telefonoGroup">
                                <label>Teléfono: </label>
                                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono aquí.">
                                <span id="telefonoOK" style="color:red" class="help-block"></span>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mensajeGroup">
                                <label>Mensaje: </label>
                                <textarea rows="5" id="mensaje" name="mensaje" class="form-control" placeholder="Escriba su mensaje aquí." style="height:200px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group verificacionGroup">
                                <label>Verificación: </label>
                                <input type="text" id="verificacion" name="verificacion" class=" form-control add_bottom_30" placeholder="¡ Pruebe que es humano ! 3 + 1  =¿ ? ">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Enviar" class="btn_1" id="submit-contact"> {!! Form::close() !!}

                </div>
            </div>
            <!-- End col-md-8 -->

            <div class="col-md-4 col-sm-4">
                <div class="box_style_1">
                    <span class="tape"></span>
                    <h4>Dirección <span><i class="icon-pin pull-right"></i></span></h4>
                    <p>
                        {{$infoGeneral[0]->direccion}}
                    </p>
                    <hr>
                    
                    <p>
                    Para nosotros es un gusto atenderle. Por ello, en caso de alguna duda o requerimiento especial, contacte al Gerente de Operaciones. ot6164137@hotmail.com
                    </p>
                    <ul id="contact-info">
                        <li>{{$infoGeneral[0]->email}}</li>
                    </ul>
                </div>
                <div class="box_style_4">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>¿Necesita <span>ayuda?</span></h4>
                    <p>Prueba llamarnos al</p>
                    <a href="tel://004542344599" style="font-size: 18px; line-height: 1">{{$infoGeneral[0]->telefono}}</a>
                    <p>{{$infoGeneral[0]->horario}}</p>
                </div>
            </div>
            <!-- End col-md-4 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d675.321042323648!2d-93.08600988724903!3d16.767085351502345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed2768e6e5a2f5%3A0x22d1470815182ce3!2sRosa+Bermell%C3%B3n+4%2C+El+Rosario+INFONAVIT%2C+29049+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1542569770799"
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- end map-->

    <!-- end directions-->
</main>
<!-- End main -->

@endsection 

@extends ('meta.metaComponent')
@section('meta')
<title>Chiapas Family Tours: contacto</title>
<meta name="description" content="Cualquier duda, queja o sugerencia, porfavor, ponte en contacto con nostros a través del formulario en esta sección."/>
<meta property="og:url" content="http://www.chiapasfamilytours.com.mx/contactos" />
<meta property="og:description" content="Cualquier duda, queja o sugerencia, porfavor, ponte en contacto con nostros a través del formulario en esta sección."/>
<link rel="canonical" href="http://www.chiapasfamilytours.com.mx/contactos" />
@endsection
@push("contactScripts")
<script src="{{asset('assets/validarcontacto.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>


<script src="{{asset('js/map_contact.js')}}"></script>
<script src="{{asset('js/infobox.js')}}"></script>
@endpush