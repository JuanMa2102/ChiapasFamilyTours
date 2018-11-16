@extends('masterPage.masterPrincipal') @section('content')

<section class="parallax-window" data-parallax="scroll" data-image-src="img/header_bg.jpg" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>Nosotros</h1>
            <p>Descubra quién es Chiapas Family Tours</p>
        </div>
    </div>
</section>
<!-- End Section -->

<main>

    <!-- End Position -->

    <div class="container margin_60">
        <div class="main_title">
            <h2> <span>¿POR QUÉ ELEGIRNOS?</span> </h2>
            <p>
                Le ofrecemos los siguientes servicios
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
                <div class="feature_home">
                    <i class=" icon-star-empty-2"></i>
                    <h4>Nuestros 16 Paquetes son <span>PRIVADOS</span>. Solo para ud., Amigos y Familiares</h4>
                    <p style="white-space: pre-line">
                        Nosotros sugerimos la hora de inicio de los tours y el tiempo que dedicaremos a las visitas. !Pero ustedes deciden! ¡Sabrán de antemano las horas y minutos, que tendremos en carretera! La sección de itinerarios detallados le indica a qué hora terminan
                        los tours y así usted, puede organizar su tiempo para otras actividades con su familia.
                    </p>

                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
                <div class="feature_home">
                    <i class="icon-chat-5"></i>
                    <h4>Más de 50 Tips y Respuestas a Preguntas Frecuentes.</h4>
                    <h5 style="color: #f00">(Los Tips se encuentras en Atractivos Naturales y Culturales de Chiapas)</h5>
                    <p style="white-space: pre-line">
                        Más información: De los Atractivos Naturales y Culturales con los que cuenta Chiapas y con información gráfica que le podrá ayudar a hacer su propio itinerario. Posibilidad de incluir actividades de aventura: Rappel en diferentes niveles, Cañonismo, Tirolesas,
                        Descenso de Cascadas en Balsa (Rafting) y Caminata en la Selva.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="feature_home">
                    <i class="icon_set_1_icon-57"></i>
                    <h3>Asistencia</h3>
                    <p style="white-space: pre-line; text-align: left">
                        En requerimientos especiales como: * Habitaciones Handicap * Asientos para Bebés * Solicitud de Cunas * Renta de Silla de Ruedas * Disponibilidade de Guías en Diferentes Idiomas: - Inglés - Francés - Italiano - Alemán
                    </p>

                </div>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <h2><i class="icon-thumbs-up"></i> Misión</h2>
                <p>{{$infoGeneral[0]->mision}}</p>
            </div>
            <div class="col-lg-4">
                <h2><i class="icon-award"></i> Visión</h2>
                <p>{{$infoGeneral[0]->vision}}</p>
            </div>
            <div class="col-lg-4">
                <h2><i class="icon-check"></i> Valores</h2>
                <p>{{$infoGeneral[0]->valor}}</p>
            </div>

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->


    <!-- End container-fluid  -->

    <div class="container margin_60">

        <div class="main_title">
            <h2>¿Qué dicen nuestros <span>clientes</span>?</h2>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="review_strip">
                    <img src="img/avatar1.jpg" alt="Image" class="rounded-circle">
                    <h4>Jhon Doe</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>

            <div class="col-lg-6">
                <div class="review_strip">
                    <img src="img/avatar2.jpg" alt="Image" class="rounded-circle">
                    <h4>Frank Rosso</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="review_strip">
                    <img src="img/avatar3.jpg" alt="Image" class="rounded-circle">
                    <h4>Marc twain</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>

            <div class="col-lg-6">
                <div class="review_strip">
                    <img src="img/avatar1.jpg" alt="Image" class="rounded-circle">
                    <h4>Peter Gabriel</h4>
                    <p>
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                    </p>
                    <div class="rating">
                        <i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i><i class=" icon-star-empty"></i>
                    </div>
                </div>
                <!-- End review strip -->
            </div>
        </div>
        <!-- End row -->

        <hr>


        <!-- End row -->

    </div>
    <!-- End Container -->
</main>
<!-- End main -->


@endsection