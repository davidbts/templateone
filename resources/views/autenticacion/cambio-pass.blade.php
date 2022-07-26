@extends('layouts.app')

@section('content')


<div class="contenedor-contacto">

<div class="contacto-titulo">
  <h2 class="titulo2">Cambio de Contraseña</h2>
</div>
<div class="contenedor-config">

  @include('includes.configuracion-menu')


  <div class="configuracion-multi">
    <div class="subcontenedor-config">
      <!-- <h2 class="parrafo2">Nueva Contraseña</h2> -->
      <form action="" class="form-personales">
        <label class="parrafo1" for="cuenta-usuario">Nueva Contraseña</label>
        <input type="text" name="" id="nuevo-pass" placeholder="">
        
        <label class="parrafo1" for="cuenta-mail">Confirmar Nueva Contraseña</label>
        <input type="text" name="" id="confirm-nuevo-pass" placeholder="">
        
        <input class="subir-vender" type="submit" value="Cambiar contraseña">
        

    </form>
    </div>
  </div>
</div>

</div>
@endsection