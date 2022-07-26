@extends('layouts.app')
<script>
    function cargarimagen() {
        $input = $('#imageInput-1');
        //if ($input.val().length > 0) {
        //$('.image-button-1').css('display', 'none');
        $('.image-preview-1').css('display', 'block');
        $('.change-image-1').css('display', 'block');
        $control = $('#imageInput-1');
        $preview = $('.image-preview-1');
        //$preview.attr('src', '');
        //$preview.css('display', 'none');
        // $control.css('display', 'none');
        // $('.image-button-1').css('display', 'block');
    }
</script>

@section('content')
    <div class="contenedor-contacto">

        <div class="contacto-titulo">
            <h2 class="titulo2">Configuración</h2>
        </div>
        <div class="contenedor-config">

            @include('includes.configuracion-menu')

            <div class="configuracion-multi">
                <div class="subcontenedor-config">
                    <h2 class="parrafo2">Mi cuenta</h2>
                    <form action="{{ route('user.saveAccount') }}" method="POST" enctype="multipart/form-data"
                        class="form-personales">
                        @csrf
                        <div class="image-input">
                            <input type="file" accept="image/*" id="imageInput-1" name="image1">
                            <label for="imageInput-1" class="image-button-1 parrafo1">Cambiar
                                foto</label>
                            @if ($user->image)
                                <img src=" {{ route('user.picture', ['filename' => $user->image]) }} "
                                    class="image-preview-1">
                                <script>
                                    cargarimagen();
                                </script>
                            @else
                                <img src="" class="image-preview-1">
                            @endif
                            <span class="change-image-1"><i class="fas fa-times"></i></span>
                        </div>
                        <!-- <label class="parrafo1" for="cuenta-usuario">Usuario</label>
                        <input type="text" name="nickname" id="cuenta-usuario" placeholder="Usuario"
                            value="{{ $user->nickname }}" required> -->
                        <!-- <div class="juntar-nombre"> -->
                            <label class="parrafo1" for="cuenta-nombre">Nombre(s)</label>
                            <input type="text" name="name" id="cuenta-nombre" placeholder="Nombre"
                                value="{{ $user->name }}" required>
                        <!-- </div>
                        <div class="juntar-nombre"> -->
                            <label class="parrafo1" for="cuenta-apellido">Apellido</label>
                            <input type="text" name="lastname" id="cuenta-apellido" placeholder="Apellido"
                                value="{{ $user->lastname }}" required>

                            <label class="parrafo1" for="cuenta-curp">Curp</label>
                            <input type="text" name="curp" id="cuenta-curp" placeholder="Curp"
                                value="" required>
                        <!-- </div> -->
                        <p>Direccion</p>
                            <label class="parrafo1" for="street">Calle</label>
                            <input type="text" name="street" id="street" placeholder="Calle"
                            value="" required>
                            <label class="parrafo1" for="number">Numero</label>
                            <input type="number" name="number" id="number" placeholder="Numero"
                            value="" required>
                            <label class="parrafo1" for="suburb">Colonia</label>
                            <input type="text" name="suburb" id="suburb" placeholder="Colonia"
                            value="" required>
                            <label class="parrafo1" for="city">Ciudad</label>
                            <input type="text" name="city" id="city" placeholder="Ciudad"
                            value="" required>
                            <label class="parrafo1" for="municipality">Alcaldia / Municipio</label>
                            <input type="text" name="municipality" id="municipality" placeholder="Municipio"
                            value="" required>
                            <label class="parrafo1" for="references">Referencias</label>
                            <input type="text" name="references" id="references" placeholder="Referencias"
                            value="" required>
                    

                        <label class="parrafo1" for="cuenta-mail">Correo Electrónico</label>
                        <input type="text" name="email" id="cuenta-mail" placeholder="Correo electrónico"
                            value="{{ $user->email }}" required>
                        <label class="parrafo1" for="cuenta-celular">Celular</label>
                        <input type="text" name="phoneNumber" id="cuenta-celular" placeholder="Numero celular"
                            value="{{ $user->phoneNumber ? $user->phoneNumber : '' }}" required>
                        <label class="parrafo1" for="cuenta-blog">Identificacion Oficial</label>
                        <input type="file" name="" id="cuenta-blog" placeholder=""> 
                        <div class="box-shadow-ine">

                        </div>
                        <label class="parrafo1" for="cuenta-fecha">Fecha de Nacimiento</label>
                        <select name="day" class="bear-dates parrafo1">
                            @isset($nacimiento->day)
                                <option selected value="{{ $nacimiento->day }}">{{ $nacimiento->day }}</option>
                            @else
                                <option selected>Dia</option>
                            @endisset
                        </select>
                        <select name="month" class="bear-months parrafo1">
                            @isset($mes)
                                <option selected value="{{ $mes }}">{{ $mes }}</option>
                            @else
                                <option selected disabled>Mes</option>
                            @endisset
                        </select>
                        <select name="year" class="bear-years parrafo1">
                            @isset($nacimiento->year)
                                <option selected value="{{ $nacimiento->year }}">{{ $nacimiento->year }}</option>
                            @else
                                <option selected disabled>Año</option>
                            @endisset
                        </select>


                        <input class="subir-vender" type="submit" value="Guardar">

                    </form>
                </div>
            </div>
        </div>

    </div>
    @include('includes.scripts-subir-venta')
@endsection
