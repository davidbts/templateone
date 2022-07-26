@extends('layouts.app')

@section('content')
<div class="contenedor-contacto">

    <div class="contacto-titulo">
        <h2 class="titulo2">¡CONTÁCTANOS!</h2>
    </div>

     <div class="contacto-info">
        <p class="parrafo1 info">
            Cualquier duda, comentario o sugerencia no olvides en contactarnos. Horario de atención, lunes a viernes de
            8:00 am a 6:00 pm, sábados y Domingos de 9:00 am a 2:00 pm
        </p>

        <div class="contacto-form">
            <form action="" method="POST">
                <label for="usuario">Usuario:</label>
                <input type="text" name="" id="">
                <label for="correo">Email:</label>
                <input type="text" name="" id="">
                <label for="asunto">Asunto:</label>
                <input type="text" name="" id="">
                <label for="mensaje" class="mensaje">Mensaje:</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <div class="form-boton">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div> 


    <!--------RESPUESTA AL ENVIAR EL FORMULARIO--------->
    <div class="contacto-respuesta">
        <p class="parrafo3 text">
            Gracias por contactarnos, enviaremos tu mensaje al departamento correspondiente, te responderemos a la
            brevedad. Ten un excelente día
        </p>
    </div>
    <!-- --------------------------------------------- -->

</div>
@endsection