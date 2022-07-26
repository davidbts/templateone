<footer>
    <div class="footer-cen">
        <div class="footer-li">
            <!-- <p class="parrafo3">Upton Forever</p> -->
            <li><a class="parrafo1" href=" {{ route('home.somos') }} "><i class="fa-solid fa-people-group"></i>
                    Nosotros</a></li>
            <li><a class="parrafo1" href=" {{ route('home.glosario') }} "><i class="fa-solid fa-arrow-down-z-a"></i>
                    Glosario</a> </li>
            <li><a class="parrafo1" href=" {{ route('home.ayuda') }} "><i
                        class="fa-solid fa-person-circle-question"></i> Ayuda</a></li>
            <li><a class="parrafo1" href=" {{ route('home.contacto') }} "><i class="fa-solid fa-envelopes-bulk"></i>
                    Contacto</a></li>
        </div>
        <div class="footer-li">
            <!-- <p class="parrafo3">Legal</p> -->
            <li><a class="parrafo1" href=" {{ route('home.como') }} "><i class="fa-solid fa-circle-info"></i> ¿Cómo
                    Funciona?</a></li>
            <li><a class="parrafo1" href=" {{ route('home.preguntas') }} "><i class="fa-regular fa-circle-question"></i>
                    FAQ</a></li>
            <li><a class="parrafo1" href=" {{ route('home.devolucion') }} "><i class="fa-solid fa-reply"></i> Devolución</a>
            </li>
            <li><a class="parrafo1" href=" {{ route('home.tips') }} "><i class="fa-solid fa-clipboard-check"></i> Tips</a>
            </li>
        </div>
        <div class="footer-li">
            <!-- <p class="parrafo3">Soporte</p> -->
            <li><a class="parrafo1" href=" {{ route('home.terminos') }} "><i class="fa-solid fa-file-contract"></i>
                    Términos y condiciones </a></li>
            <li><a class="parrafo1" href=" {{ route('home.aviso') }} "><i class="fa-brands fa-expeditedssl"></i> Aviso
                    de privacidad </a></li>
            <li><a class="parrafo1" href=" {{ route('home.cookies') }} "><i class="fa-brands fa-ubuntu"></i> Uso de
                    cookies </a></li>
            <li><a class="parrafo1" href=" {{ route('home.reglamento') }} "><i class="fa-regular fa-file-lines"></i>
                    Reglamento</a></li>
        </div>
    </div>
    <div class="footer-li paginas">
        <p class="parrafo3">Nuestras páginas</p>
        <a class="parrafo1" href="https://upton4everpride.com">Upton4everpride</a>
        <a class="parrafo1" href="https://www.redwork.com.mx">Redwork</a>
        <a class="parrafo1" href="http://www.redsic.com.mx">Redsic</a>
    </div>
    <div class="footer-li">
        <p class="parrafo3">Redes Sociales</p>
        <div class="footer-redes">
            <a href="#"><i class="fa-brands fa-whatsapp-square"></i></a>
            <a href="https://twitter.com/Upton_4ever?t=NZ4_pKOvt9TnsIjCY4bgqg&s=09"><i class="fa-brands fa-twitter-square"></i></a>
            <a href="https://instagram.com/upton4ever?utm_medium=copy_link"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://www.tiktok.com/@upton4ever"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://www.facebook.com/upton4ever/"><i class="fa-brands fa-facebook-square"></i></a>
        </div>
    </div>
    <div class="footer-li">
        <p class="parrafo3">Pasarela de Pagos</p>
        <div class="metodos">
            <img src="{{ asset('img/visa.png') }}" alt="">
            <img class="mas" src="{{ asset('img/mastercard.png') }}" alt="">
            <img class="pay" src="{{ asset('img/paypal.png') }}" alt="">
            <i class="fa-solid fa-file-invoice-dollar"></i>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/e7e3ef3c1c.js" crossorigin="anonymous"></script>
</footer>