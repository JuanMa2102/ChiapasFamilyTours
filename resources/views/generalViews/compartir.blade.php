<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enlace Compartido - Chiapas Family Tours</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin|Carter+One|Staatliches" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }

    

    @media only screen and (max-width: 800px)
    and (min-width: 300px){
        .infoSharedBody > *{
            width: auto;
        }
        .infoSharedContent .infoSharedFooter{
            padding: 3% 0%;
        }
        .title p{
            font-size: 1.5em;
        }
        .enlace button{
            padding: 3%;
        }
    }
   
</style>

<body>
    <div class="infoSharedContent" style="width: 100%;">
        <div class="infoSharedHeader" style="background-color: #0F2433; padding: 1% 0%;">
            <figure style="width: 100%;    margin: 0;
    padding: 2% 0%;">
                <a href="http://www.chiapasfamilytours.com.mx"><img style="display: block; margin: auto;" class="logo" src="http://www.chiapasfamilytours.com.mx/img/logo_sticky.png" alt="logo"></a>
            </figure>
        </div>
        <div class="title">
            <p style="
            font-family: 'Carter One', cursive;
            text-align: center;
            font-size: 2em;
            color: #4fb23e;
            position: relative;">¡Te han compartido un Enlace!</p>
        </div>
        <div>
            <p style="font-family: sans-serif; white-space: pre-line; text-align: justify">El correo {{$datos[2]}} te ha compartido este enlace. Su mensaje fue el siguiente:</p>
            <p style="font-family: cursive, sans-serif; white-space: pre-line; text-align: justify">{{$datos[3]}}</p>
        </div>
        <div class="infoSharedBody" style="background-color: #fff;">
            <div class="imageBody" style="margin: 50px 0px;    width: 350px;
    height: 350px;
    background-image: url({{$datos[0]->image}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: block;
    margin: auto;">
            </div>
            <div class="description" style="display: inline-block;vertical-align: middle;margin: 10px 10px;width: auto;">
                <h1 style="font-family: 'Staatliches', cursive;text-align: center;color: #333;">{{$datos[0]->nombre}}</h1>
                <p style="white-space: pre-line;text-align: justify;font-family: 'Cabin', sans-serif;    width: 75%;
    display: block;
    margin: auto;">{!! $datos[0]->desc !!}</p>
                <div class="diaItem" style="background-color: #41AA54;color: #fff;width: 40%;display: block;margin: auto;margin-top: 3%;padding: 1%;">
                    <p style="font-family: sans-serif;text-align: center !important;margin-bottom: 0;font-size: 5em;margin-top: 0;">{{$datos[0]->cantidad}}</p>
                    <p style="font-family: sans-serif;text-align: center !important;margin-bottom: 0;font-size: 2em;margin-top: 0;">DÍAS</p>
                </div>
            </div>
        </div>
        <div class="enlace">
        <a style="text-decoration: none;" href="{{$datos[1]}}"><button style="display: block;margin: auto;background-color: #41AA54;color: #fff;font-weight: bold;font-family: sans-serif;padding: 2% 4%;border-radius: 5px;border: none;">IR AL ENLACE</button></a>
        </div>
        <div class="infoSharedFooter" style="background-color: #333;color: #fff;padding: 1% 0%;margin-top: 2%;">
            <p style="text-align: center;font-family: sans-serif;"><span>©</span> 2019 - <a style="color: #fff;" href="http://www.chiapasfamilytours.com.mx">Chiapas Family Tours</a> - Todos los derechos reservados</p>
        </div>
    </div>


    <br>


    <br>
    <br>

</body>

</html>