$(".addInclusionesTraslados").click(() => {
    $(".InclusionesTrasladosContainer").append("<div class='row'><div class='form-group'><label class='col-md-3 col-xs-12 control-label'>Personas</label><div class='col-md-2 col-xs-6'><div class='input-group'><span class='input-group-addon'><span class='fa fa-pencil'></span></span><input type='text' class='form-control' name='personas[]'  /></div></div><label class='col-md-1 col-xs-6 control-label'>Precio</label><div class='col-md-2 col-xs-6'><div class='input-group'><span class='input-group-addon'><span class='fa fa-pencil'></span></span><input type='text' class='form-control' name='precio[]'  /></div></div><div class='col-md-2'><button type='button' class='removeProduct'><i class='fa fa-times'></i></button></div></div></div>");});

$(document).on("click", ".removeProduct", function() {
    $(this).parent().parent().prop("hidden", true);
    $(this).parent().parent().remove();
});