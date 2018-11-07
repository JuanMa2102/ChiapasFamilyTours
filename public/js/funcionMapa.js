$(document).on('click', '.seeOnMap', function() {
    var direccion = $(this).attr('direccion');
    $(".map-right iframe").attr('src', direccion);
});