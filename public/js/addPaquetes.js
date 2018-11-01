
var i = 0;
$(document).on('click', '.addPaquete', function(e) {
    // console.log(this.options[e.target.selectedIndex].value);
    console.log($("#paqueteCotizacion option:selected").attr('nomPack'));
    var nombrePaquete = $("#paqueteCotizacion option:selected").attr('nomPack');
    var valorPaquete = $("#paqueteCotizacion option:selected").val();
    if (valorPaquete != 0) {
        alert("Correcto Paquete");
        var nombreDia = $("#diasCotizacion option:selected").attr('nomDia');
        var valorDia = $("#diasCotizacion option:selected").val();
        if (valorDia != 0) {
            var idAdded = 'pq-' + valorPaquete + 'dy-' + valorDia + '';
            var insertar = true;
            $.each($(".paqueteAdded"), function(key, value) {
                // alert($(this).attr('id'));
                if ($(this).attr('id') == idAdded) {
                    insertar = false;
                }
            });
            if (insertar) {
                i++;
                var cadena = "<div id='pq-" + valorPaquete + "dy-" + valorDia + "' class='paqueteAdded'><input name='paqueteID[]' type='hidden' value='" + valorPaquete + "'><input name='diaID[]' type='hidden' value='" + valorDia + "'><div class='col-sm-5'><div class='form-group'><div class='input-group'><label>Paquete</label><input class='form-control' type='text' readonly name='vistaPaquete' id='vistaPaquete' value='" + nombrePaquete + "'></div></div></div><div class='col-sm-5'><div class='form-group'><div class='input-group'><label>Día</label><input class='form-control' type='text' readonly name='vistaDia' id='vistaDia' value='" + nombreDia + "'></div></div></div><div class='col-sm-2'><div class='form-group'><div class='input-group'><label>Remover</label><button type='button' id='pq-" + valorPaquete + "dy-" + valorDia + "' class='removePaquete form-control'><i class='icon-cancel-circled-2'></i></button></div></div></div></div>";
                $(".paquetesAddedContainer").append(cadena);
                $("select[name='paqueteCotizacion'] option[name='seleccione']").prop("selected", true);
                $("select[name='diasCotizacion'] option[name='seleccione']").prop("selected", true);
                alert("Día correcto");
            }

        } else {
            alert("seleccione día");
        }
    } else {
        alert("Seleccione una opción")
    }

});

$(document).on("click", ".removePaquete", function() {
    var valorID = $(this).attr('id');
    $("div[id='" + valorID + "']").remove();
});