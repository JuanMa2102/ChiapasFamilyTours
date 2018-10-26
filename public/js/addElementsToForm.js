$(".addInclusiones").click(() => {
    $(".InlcusionesContainer").append("<div class='form-group'><label class='col-md-3 col-xs-12 control-label'>Inclusiones</label><div class='col-md-4 col-xs-12'><div class='input-group'><span class='input-group-addon'><span class='fa fa-pencil'></span></span><input type='text' class='form-control' name='inlclusion[]'  /></div></div><div class='col-md-2'><button type='button' class='removeProduct'><i class='fa fa-times'></i></button></div></div>");
});

$(document).on("click", ".removeProduct", function() {
    $(this).parent().parent().prop("hidden", true);
    $(this).parent().parent().remove();
});

$(".addPhotos").click(() => {
    $(".photosContainer").append("<div class='form-group'><label class='col-md-3 col-xs-12 control-label'>Imagenes</label><div class='col-md-4 col-xs-12'><input type='file' name='galeria[]' class='file' accept='image/*' data-preview-file-type='any' /></div><div class='col-md-2'><button type='button' class='removeProduct'><i class='fa fa-times'></i></button></div></div>");
});

$(document).on("click", ".removeProduct", function() {
    $(this).parent().parent().prop("hidden", true);
    $(this).parent().parent().remove();
});