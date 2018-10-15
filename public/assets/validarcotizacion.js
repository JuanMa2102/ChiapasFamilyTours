var bn , ba, bt, be, bm , na , nm , bd , bp , bh , bs, bl;

function validar() {



    /**Validacion nombre */
    document.getElementById('nombre').addEventListener('input', function() {
        campo = event.target;

        nombreRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ. ´'.]+$/i;

        if (nombreRegex.test(campo.value) && campo.value.length < 49) {
            $(".nombreGroup").addClass("inputValido");
            $(".nombreGroup").removeClass("inputInvalido");
            bn = true;
        } else {
            $(".nombreGroup").addClass("inputInvalido");
            $(".nombreGroup").removeClass("inputValido");
            bn = false;
        }
    });
    $("input[name='nombre']").bind('keypress', function(event) {
        var eventCode = !event.charCode ? event.which : event.charCode;
        if ((eventCode >= 37 && eventCode <= 40) || eventCode == 8 || eventCode == 9 || eventCode == 46) { // Left  / Right Arrow, Backspace, Delete keys
            return;
        }
        var regex = new RegExp("^[a-zA-ZñÑáéíóúÁÉÍÓÚ. ´'.]+$");
        var key = String.fromCharCode(eventCode);
        if (!regex.test(key)) {
            event.preventDefault();
            $(".nombreGroup").addClass("inputInvalido");
            setTimeout(function() {
                $(".nombreGroup").removeClass("inputInvalido");
                bn = false;
            }, 1000);

            return false;
        } else {
            $(".nombreGroup").addClass("inputValido");
            $(".nombreGroup").removeClass("inputInvalido");
            bn= true;

        }
    });



 /**Validacion apellido */
    document.getElementById('apellido').addEventListener('input', function() {
        campo = event.target;

        apellidoRegex = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ. ´'.]+$/i;

        if (apellidoRegex.test(campo.value) && campo.value.length < 49) {
            $(".apellidoGroup").addClass("inputValido");
            $(".apellidoGroup").removeClass("inputInvalido");
            ba = true;
        } else {
            $(".apellidoGroup").addClass("inputInvalido");
            $(".apellidoGroup").removeClass("inputValido");
            ba = false;
        }
    });
    $("input[name='apellido']").bind('keypress', function(event) {
        var eventCode = !event.charCode ? event.which : event.charCode;
        if ((eventCode >= 37 && eventCode <= 40) || eventCode == 8 || eventCode == 9 || eventCode == 46) { // Left  / Right Arrow, Backspace, Delete keys
            return;
        }
        var regex = new RegExp("^[a-zA-ZñÑáéíóúÁÉÍÓÚ. ´'.]+$");
        var key = String.fromCharCode(eventCode);
        if (!regex.test(key)) {
            event.preventDefault();
            $(".apellidoGroup").addClass("inputInvalido");
            setTimeout(function() {
                $(".apellidoGroup").removeClass("inputInvalido");
                ba = false;
            }, 1000);

            return false;
        } else {
            $(".apellidoGroup").addClass("inputValido");
            $(".apellidoGroup").removeClass("inputInvalido");
            ba = true;

        }
    });

    /** Validacion mensaje */
    document.getElementById('mensaje').addEventListener('input', function() {
        campo = event.target;

        mensajeRegex = /[-a-zA-Z0-9@:%._\+~#=]/i;

        if (mensajeRegex.test(campo.value) && campo.value.length < 1499) {
            $(".mensajeGroup").addClass("inputValido");
            $(".mensajeGroup").removeClass("inputInvalido");
            bm = true;
        } else {
            $(".mensajeGroup").removeClass("inputValido");
            $(".mensajeGroup").addClass("inputInvalido");
            bm = false;
        }
    });


    /**Validacion telefono */
    document.getElementById('telefono').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('telefonoOK');

        telefonoRegex = /^([0-9])*$/i;

        if (telefonoRegex.test(campo.value) && campo.value.length < 20 && campo.value.length > 7) {
            $(".telefonoGroup").addClass("inputValido");
            $(".telefonoGroup").removeClass("inputInvalido");
            bt = true; 
        } else {
            $(".telefonoGroup").removeClass("inputValido");
            $(".telefonoGroup").addClass("inputInvalido");
            bt = false;
        }
    });

    $("input[name='telefono']").bind('keypress', function(event) {
        var eventCode = !event.charCode ? event.which : event.charCode;
        if ((eventCode >= 37 && eventCode <= 40) || eventCode == 8 || eventCode == 9 || eventCode == 46) { // Left  / Right Arrow, Backspace, Delete keys
            return;
        }
        var regex = new RegExp("^([0-9])*$");
        var key = String.fromCharCode(eventCode);
        if (!regex.test(key)) {
            event.preventDefault();
            $(".telefonoGroup").addClass("inputInvalido");
            setTimeout(function() {
                $(".telefonoGroup").removeClass("inputInvalido");
                bt = false;
            }, 1000);

            return false;
        } else {
            $(".telefonoGroup").addClass("inputValido");
            $(".telefonoGroup").removeClass("inputInvalido");
            bt = true;

        }
    });

    /* Validacion email*/
    document.getElementById('email').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('emailOK');

        emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        if (emailRegex.test(campo.value) && campo.value.length < 49) {
            $(".correoGroup").addClass("inputValido");
            $(".correoGroup").removeClass("inputInvalido");
            be = true;
        } else {
            $(".correoGroup").removeClass("inputValido");
            $(".correoGroup").addClass("inputInvalido");
            be = false;
        }
    });
    /**Validacion numero de adultos */
    document.getElementById('numeroAdultos').addEventListener('input', function() {
        campo = event.target;

        verificacionRegex = /^([0-9])*$/i;

        if (verificacionRegex.test(campo.value) && campo.value > 0 && campo.value < 100) {
            $(".adultosGroup").addClass("inputValido");
            $(".adultosGroup").removeClass("inputInvalido");
            na = true;
        } else {
            $(".adultosGroup").removeClass("inputValido");
            $(".adultosGroup").addClass("inputInvalido");
            na = false;
        }
    });

    $("input[name='numeroAdultos']").bind('keypress', function(event) {
        var eventCode = !event.charCode ? event.which : event.charCode;
        if ((eventCode >= 37 && eventCode <= 40) || eventCode == 8 || eventCode == 9 || eventCode == 46) { // Left  / Right Arrow, Backspace, Delete keys
            return;
        }
        var regex = new RegExp("^([0-9])*$");
        var key = String.fromCharCode(eventCode);
        if (!regex.test(key)) {
            event.preventDefault();
            $(".adultosGroup").addClass("inputInvalido");
            setTimeout(function() {
                $(".adultosGroup").removeClass("inputInvalido");
                na = false;
            }, 1000);

            return false;
        } else {
            $(".adultosGroup").addClass("inputValido");
            $(".adultosGroup").removeClass("inputInvalido");
            na = true;

        }
    });

    /**Validacion numero de adultos */
    document.getElementById('numeroMenores').addEventListener('input', function() {
        campo = event.target;

        verificacionRegex = /^([0-9])*$/i;

        if (verificacionRegex.test(campo.value) && campo.value >= 0 && campo.value < 100) {
            $(".menoresGroup").addClass("inputValido");
            $(".menoresGroup").removeClass("inputInvalido");
            nm = true;
        } else {
            $(".menoresGroup").removeClass("inputValido");
            $(".menoresGroup").addClass("inputInvalido");
            nm = false;
        }
    });

    $("input[name='numeroMenores']").bind('keypress', function(event) {
        var eventCode = !event.charCode ? event.which : event.charCode;
        if ((eventCode >= 37 && eventCode <= 40) || eventCode == 8 || eventCode == 9 || eventCode == 46) { // Left  / Right Arrow, Backspace, Delete keys
            return;
        }
        var regex = new RegExp("^([0-9])*$");
        var key = String.fromCharCode(eventCode);
        if (!regex.test(key)) {
            event.preventDefault();
            $(".menoresGroup").addClass("inputInvalido");
            setTimeout(function() {
                $(".menoresGroup").removeClass("inputInvalido");
                nm = false;
            }, 1000);

            return false;
        } else {
            $(".menoresGroup").addClass("inputValido");
            $(".menoresGroup").removeClass("inputInvalido");
            nm = true;

        }
    });

    /** Validacion paquete*/
    document.getElementById('paqueteCotizacion').addEventListener('input', function() {
        campo = event.target;

        mensajeRegex = /[-a-zA-Z0-9@:%._\+~#=]/i;

        if (mensajeRegex.test(campo.value) && campo.value != 0) {
            $(".paqueteGroup").addClass("inputValido");
            $(".paqueteGroup").removeClass("inputInvalido");
            bp = true;
        } else {
            $(".paqueteGroup").removeClass("inputValido");
            $(".paqueteGroup").addClass("inputInvalido");
            bp = false;
        }
    });
    /** Validacion dias*/
    document.getElementById('diasCotizacion').addEventListener('input', function() {
        campo = event.target;

        mensajeRegex = /[-a-zA-Z0-9@:%._\+~#=]/i;

        if (mensajeRegex.test(campo.value) && campo.value != 0) {
            $(".diasGroup").addClass("inputValido");
            $(".diasGroup").removeClass("inputInvalido");
            bd = true;
        } else {
            $(".diasGroup").removeClass("inputValido");
            $(".diasGroup").addClass("inputInvalido");
            bd = false;
        }
    });

    /** Validacion tipo Hotel*/
    document.getElementById('tipoHotel').addEventListener('input', function() {
        campo = event.target;

        mensajeRegex = /[-a-zA-Z0-9@:%._\+~#=]/i;

        if (mensajeRegex.test(campo.value) && campo.value != 0) {
            $(".tipoGroup").addClass("inputValido");
            $(".tipoGroup").removeClass("inputInvalido");
            bh = true;
        } else {
            $(".tipoGroup").removeClass("inputValido");
            $(".tipoGroup").addClass("inputInvalido");
            bh = false;
        }
    });

    document.getElementById('llegada').onchange = function() {
        campo = event.target;
        
        var llegada = document.getElementById('llegada').value.split('-');
        var salida = document.getElementById('salida').value.split('-');

        var rightNow = new Date();
        var fecLLegada = new Date(llegada[0],llegada[1]-1,llegada[2]);
        var fecSalida = new Date(salida[0],salida[1]-1,salida[2]);

        rightNow.setHours(0,0,0,0);
        fecLLegada.setHours(0,0,0,0);

        if (fecLLegada >= rightNow) {
            $(".llegadaGroup").addClass("inputValido");
            $(".llegadaGroup").removeClass("inputInvalido");
                if(fecSalida>fecLLegada)
                {
                    $(".salidaGroup").addClass("inputValido");
                    $(".salidaGroup").removeClass("inputInvalido");
                    bs = true;
                }else {
                    $(".salidaGroup").removeClass("inputValido");
                    $(".salidaGroup").addClass("inputInvalido");
                    bs = false;
                }
                bl = true
        } else {
            $(".llegadaGroup").removeClass("inputValido");
            $(".llegadaGroup").addClass("inputInvalido");
            bl = false;
        }
    };

    document.getElementById('salida').onchange = function() {
        campo = event.target;

        var llegada = document.getElementById('llegada').value.split('-');
        var salida = document.getElementById('salida').value.split('-');
        var fecLLegada = new Date(llegada[0],llegada[1]-1,llegada[2]);
        var fecSalida = new Date(salida[0],salida[1]-1,salida[2]);
        
        if (fecSalida > fecLLegada) {
            $(".salidaGroup").addClass("inputValido");
            $(".salidaGroup").removeClass("inputInvalido");
            bs = true;
        } else {
            $(".salidaGroup").removeClass("inputValido");
            $(".salidaGroup").addClass("inputInvalido");
            bs = false;
        }
        
    };

}

validar();

/*****************************************/
function validarsend() {
    if (bn === true && ba === true && bt === true && be === true && bm === true && nm === true && na === true && bp === true && bd === true && bh===true && bs===true && bl===true){
        return true;
    }else {
       alert("La informacion no es valida");
        return false;
    }
}