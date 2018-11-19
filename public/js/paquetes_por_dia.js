$(document).ready(function() {
    $(document).on('change', $(".paquetesAddedContainer").length, function(e) {
        console.log($(".paquetesAddedContainer").html());
    });

    if (localStorage.getItem("nombre")) {
        $('#nombre').val(localStorage.getItem("nombre"));
    }



    if (localStorage.getItem("apellido")) {
        $('#apellido').val(localStorage.getItem("apellido"));
    }

    if (localStorage.getItem("email")) {
        $('#email').val(localStorage.getItem("email"));
    }

    if (localStorage.getItem("telefono")) {
        $('#telefono').val(localStorage.getItem("telefono"));
    }


    if (localStorage.getItem("numeroAdultos")) {
        $('#numeroAdultos').val(localStorage.getItem("numeroAdultos"));
    }


    if (localStorage.getItem("numeroMenores")) {
        $('#numeroMenores').val(localStorage.getItem("numeroMenores"));
    }


    if (localStorage.getItem("llegada")) {
        $('#llegada').val(localStorage.getItem("llegada"));
    }


    if (localStorage.getItem("salida")) {
        $('#salida').val(localStorage.getItem("salida"));
    }



    $('#nombre').change(function() {
        localStorage.setItem("nombre", $('#nombre').val());
    });

    $('#apellido').change(function() {
        localStorage.setItem("apellido", $('#apellido').val());
    });

    $('#email').change(function() {
        localStorage.setItem("email", $('#email').val());
    });

    $('#telefono').change(function() {
        localStorage.setItem("telefono", $('#telefono').val());
    });

    $('#numeroAdultos').change(function() {
        localStorage.setItem("numeroAdultos", $('#numeroAdultos').val());
    });

    $('#numeroMenores').change(function() {
        localStorage.setItem("numeroMenores", $('#numeroMenores').val());
    });

    $('#llegada').change(function() {
        localStorage.setItem("llegada", $('#llegada').val());
    });

    $('#salida').change(function() {
        localStorage.setItem("salida", $('#salida').val());
    });



});