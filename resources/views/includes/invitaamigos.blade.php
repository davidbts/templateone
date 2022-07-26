<div class="modal-amigos">
    <i class="fa fa-times cerrar-login"></i>
    <img class="logo-modal" src=" {{ asset('img/upton-logo.jpg') }} " alt="">
    <p class="parrafo1 parrafo1-login">Invita a tus amigos</p>
    <div>
        @csrf
        <div>
            <label for="email">Copia el siguiente link:</label>
            {{-- <input id="url-amigos" type="email" class="form-control url-amigos" value="{{env('APP_URL')}}" disabled> --}}
            <p id="url-amigos" class="form-control url-amigos">{{env('APP_URL')}}</p>
        </div>
        <button type="button" class="btn btn-enviar btn-amigos" name="btnLogin">Copiar Link</button>
    </div>
</div>
