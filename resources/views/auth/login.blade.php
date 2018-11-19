
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Chiapas Family Tours - Administrador</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido a su administrador</strong>, Porfavor, inicie sesión</div>
                    <form method="POST" action="{{ route('login') }}"class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" required value="{{ old('email') }}" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo"/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password"/>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">Iniciar sesión</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2018 <a href="http://www.creativasoftline.com">Creativa Softline - Derechos Reservados</a>
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>


