@extends('layouts.app')

@section('content')

    <div class="contenedor-alerta">

        <div class="alerta-contenedor">
            <div class="alerta-correo">
                <p class="parrafo1">{{ __('Verify Your Email Address') }}</p>
            </div>
            <div class="alerta-recibir">
                @if (session('resent'))
                    <div class="alerta-confirmacion">
                        <p class="parrafo1">
                            {{ __('A fresh verification link has been sent to your email address.') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <label
                        class="parrafo1">{{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <button type="submit" class="parrafo1">
                            {{ __('click here to request another') }}
                        </button>
                    </label>
                </form>
            </div>
        </div>

    </div>

@endsection
