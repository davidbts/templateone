@extends('layouts.app')

@section('content')

<style>
    /* COLOR FONDO */
    body {background-color: white;}
    /* -------------------------CARRUSEL INICIO------------------------- */
    /* ------------- COLOR ------------- */
    /* COLOR TITULO CARRUSEL */
    .slider-color-titulo{color: white;}
    /* COLOR TEXTO CARRUSEL */
    .slider-color-texto{color: white;}
    /* COLOR ICONOS CARRUSEL < > */
    .prev, .next{color: white;}
    /* COLOR CIRCULOS CARRUSEL °°°°°° */
    .dot{border: 3px solid #fff;}
    /* -------------------------SECCIONES------------------------- */
    /* COLOR TITULO SECCIONES */
    .titulo-seccion{color:black}
    /* COLOR BARRA SECCIONES ___*/
    .color-barra{background-color: #16161640;}
    /* -------------------------SERVICIOS------------------------- */
    /* COLOR TITULO SERVICIOS*/
    .servicio-color-titulo{color:black;}
    /* COLOR TEXTO SERVICIOS*/
    .servicio-color-texto{color:black;}
    /* ESTILOS DE LISTA ° */
    .list-servicios{list-style:disc;}
    /* .list-servicios{list-style:circle;} */ 
    /* .list-servicios{list-style:decimal;} */
    /* .list-servicios{list-style:none;} */ /* ESTO LOS QUITA */
    /* ------ POSICION SERVICIOS ------ */
    li{text-align: start;} /* LEFT */
    /* li{text-align: justify;} */ /* JUSTIFICADO */
    /* li{text-align: center;} */ /* CENTRADO */
    /* -------------------------CONTACTO------------------------- */
    /* ICONOS COLOR*/
    .color-contactanos{color:black;}
    /* BOTON COLOR*/
    .boton-color{background: black;}
    /* BOTON COLOR TEXTO */
    .boton-color{color: white;}
    /* -------------------------FAQ------------------------- */
    /* Color pregunta */
    .faq-color-titulo{color: black}
    /* Color respuesta */
    .faq-color-texto{color: black;}
</style>

<!-- CARRUSEL -->
<div class="slider">
    <!-- fade css -->
    <div class="myslide fade">
        <div class="txt">
            <h1 class="titulo5 slider-color-titulo">Provide Effective Building Solutions</h1>
            <p class="titulo1 slider-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
        <img class="carrusel-img" src="img/slide1.png" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1 class="titulo5 slider-color-titulo">Lorem ipsum dolor.</h1>
            <p class="titulo1 slider-color-texto">Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <img class="carrusel-img" src="img/slide2.png" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1 class="titulo5 slider-color-titulo">Lorem ipsum dolor.</h1>
            <p class="titulo1 slider-color-texto">Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <img class="carrusel-img" src="img/slide3.png" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1 class="titulo5 slider-color-titulo">Lorem ipsum dolor.</h1>
            <p class="titulo1 slider-color-texto">Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <img class="carrusel-img" src="img/slide4.png" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1 class="titulo5 slider-color-titulo">Lorem.</h1>
            <p class="titulo1 slider-color-texto">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
        <img class="carrusel-img" src="img/slide2.jpg" style="width: 100%; height: 100%;">
    </div>
    <!-- /fade css -->

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
</div>
<!--  -->

<!-- Galeria -->
<div class="seccion-titulo">
    <h1 class="titulo-seccion titulo1">Galeria</h1>
    <p class="color-barra"></p>
</div>
<div class="galeria">
    <div class="wrapper">
        <div class="gallery">
            <div class="galeria-image"><span class="span-galery"><img src="img/1.jpg" alt=""></span></div>
            <div class="galeria-image"><span class="span-galery"><img src="img/2.jpg" alt=""></span></div>
            <div class="galeria-image"><span class="span-galery"><img src="img/3.jpg" alt=""></span></div>
            <div class="galeria-image"><span class="span-galery"><img src="img/4.jpg" alt=""></span></div>
            <div class="galeria-image"><span class="span-galery"><img src="img/5.jpg" alt=""></span></div>
            <div class="galeria-image"><span class="span-galery"><img src="img/6.jpg" alt=""></span></div>
        </div>
    </div>
</div>
<div class="preview-box">
    <div class="details">
        <span class="title">
            <p class="current-img"></p> _ <p class="total-img"></p>
        </span>
        <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
        <div class="slide prev-img"><i class="fas fa-angle-left"></i></div>
        <div class="slide next-img"><i class="fas fa-angle-right"></i></div>
        <img src="" alt="">
    </div>
</div>

<div class="shadow"></div>
<!--  -->

<!-- Servicios -->
<div class="seccion-titulo">
    <h1 class="titulo-seccion titulo1">Servicios</h1>
    <p class="color-barra"></p>
</div>

<!-- PARA QUE ESCOJA -->

<!-- POSICION 1 -->
<div class="contenedor-servicios-1">
    <div class="servicio-img">
        <img src="img/6.jpg" alt="">
    </div>
    <div class="servicio-txt">
        <div class="titulo-servicio">
            <p class="titulo3 servicio-color-titulo">Mantenimiento</p>
        </div>
        <div class="txt-li">
            <ul class="list-servicios">
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
            </ul>
        </div>
    </div>
</div>
<!-- POSICION 2 -->
<div class="contenedor-servicios-2">
    <div class="servicio-txt">
        <div class="titulo-servicio">
            <p class="titulo3 servicio-color-titulo">Construcción</p>
        </div>
        <div class="txt-li">
            <ul class="list-servicios">
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, libero?.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
                <li class="parrafo2 servicio-color-texto">Lorem ipsum dolor sit amet.</li>
            </ul>
        </div>
    </div>
    <div class="servicio-img">
        <img src="img/5.jpg" alt="">
    </div>
</div>
<!--  -->

<!-- Contactanos -->
<div class="seccion-titulo">
    <h1 class="titulo-seccion titulo1">Contacto</h1>
    <p class="color-barra"></p>
</div>

<div class="box-contactanos">
    <div class="container-contactanos">
        <div class="content-contactanos">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt color-contactanos"></i>
                    <div class="topic">Dirección</div>
                    <div class="text-one">Surkhet, NP12</div>
                    <div class="text-two">Birendranagar 06</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt color-contactanos"></i>
                    <div class="topic">Teléfono</div>
                    <div class="text-one">+0098 9893 5647</div>
                    <div class="text-two">+0096 3434 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope color-contactanos"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">@gmail.com</div>
                    <div class="text-two">info@gmail.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Envíanos un mensaje</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit saepe eos sed quas, totam fugit
                    dignissimos, reprehenderit aperiam amet.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Introduzca su nombre">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Introduzca su email">
                    </div>
                    <div class="input-box message-box">
                        <textarea placeholder="Introduzca su mensaje"></textarea>
                    </div>
                    <div class="button">
                        <input class="boton-color" type="button" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- FAQ -->
<div class="seccion-titulo">
    <h1 class="titulo-seccion titulo1">FAQ</h1>
    <p class="color-barra"></p>
</div>

<div id="container-main-faq">

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Que Garantia tengo de su trabajo?<span
                class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Cual es su zona de Trabajo?<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Facturan?<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Realizan un contrato para realizar los trabajos?<span
                class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Lorem ipsum dolor sit amet?<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Lorem ipsum dolor sit amet?<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>

    <div class="accordion-container">
        <a href="#" class="accordion-titulo titulo3 faq-color-titulo">¿Lorem ipsum dolor sit amet?<span class="toggle-icon"></span></a>
        <div class="accordion-content">
            <p class="parrafo2 faq-color-texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
    </div>
</div>
<!--  -->

<!-- CARUSEL DE CLEINTES -->
<div class="seccion-titulo">
    <h1 class="titulo-seccion titulo1">Clientes</h1>
    <p class="color-barra"></p>
</div>

<div class="container-fluid">
    <section class="customer-logos slider">
        <div class="slide-clientes">
            <img class="clientes-img" src="img/01.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/02.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/03.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/04.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/05.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/06.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/07.jpg">
        </div>
        <div class="slide-clientes">
            <img class="clientes-img" src="img/08.jpg">
        </div>
    </section>

</div>
<!--  -->

<!-- Galeria -->
<script>
//getting all required elements
const gallery = document.querySelectorAll(".galeria-image"),
    previewBox = document.querySelector(".preview-box"),
    previewImg = previewBox.querySelector("img"),
    closeIcon = previewBox.querySelector(".icon"),
    currentImg = previewBox.querySelector(".current-img"),
    totalImg = previewBox.querySelector(".total-img"),
    shadow = document.querySelector(".shadow");

window.onload = () => {
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length; //passing total img length to totalImg variable
        let newIndex = i; //passing i value to newIndex variable
        let clickedImgIndex; //creating new variable

        gallery[i].onclick = () => {
            clickedImgIndex = i; //passing cliked image index to created variable (clickedImgIndex)
            function preview() {
                currentImg.textContent = newIndex +
                    1; //passing current img index to currentImg varible with adding +1
                let imageURL = gallery[newIndex].querySelector("img").src; //getting user clicked img url
                previewImg.src = imageURL; //passing user clicked img url in previewImg src
            }
            preview(); //calling above function

            const prevBtn = document.querySelector(".prev-img");
            const nextBtn = document.querySelector(".next-img");
            if (newIndex == 0) { //if index value is equal to 0 then hide prevBtn
                prevBtn.style.display = "none";
            }
            if (newIndex >= gallery.length -
                1) { //if index value is greater and equal to gallery length by -1 then hide nextBtn
                nextBtn.style.display = "none";
            }
            prevBtn.onclick = () => {
                newIndex--; //decrement index
                if (newIndex == 0) {
                    preview();
                    prevBtn.style.display = "none";
                } else {
                    preview();
                    nextBtn.style.display = "block";
                }
            }
            nextBtn.onclick = () => {
                newIndex++; //increment index
                if (newIndex >= gallery.length - 1) {
                    preview();
                    nextBtn.style.display = "none";
                } else {
                    preview();
                    prevBtn.style.display = "block";
                }
            }
            document.querySelector("body").style.overflow = "hidden";
            previewBox.classList.add("show");
            shadow.style.display = "block";
            closeIcon.onclick = () => {
                newIndex = clickedImgIndex; //assigning user first clicked img index to newIndex
                prevBtn.style.display = "block";
                nextBtn.style.display = "block";
                previewBox.classList.remove("show");
                shadow.style.display = "none";
                document.querySelector("body").style.overflow = "scroll";
            }
        }

    }

}
</script>
<!--  -->

<!-- FAQ -->
<script>
$(function() {
    $(".accordion-titulo").click(function(e) {

        e.preventDefault();

        var contenido = $(this).next(".accordion-content");

        if (contenido.css("display") == "none") { //open		
            contenido.slideDown(250);
            $(this).addClass("open");
        } else { //close		
            contenido.slideUp(250);
            $(this).removeClass("open");
        }

    });
});
</script>
<!--  -->

<!-- Slider-Clientes -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
<!--  -->

<!-- CARRUSEL -->
<script>
const myslide = document.querySelectorAll('.myslide'),
    dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 8000);

function autoSlide() {
    counter += 1;
    slidefun(counter);
}

function plusSlides(n) {
    counter += n;
    slidefun(counter);
    resetTimer();
}

function currentSlide(n) {
    counter = n;
    slidefun(counter);
    resetTimer();
}

function resetTimer() {
    clearInterval(timer);
    timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {

    let i;
    for (i = 0; i < myslide.length; i++) {
        myslide[i].style.display = "none";
    }
    for (i = 0; i < dot.length; i++) {
        dot[i].className = dot[i].className.replace(' active', '');
    }
    if (n > myslide.length) {
        counter = 1;
    }
    if (n < 1) {
        counter = myslide.length;
    }
    myslide[counter - 1].style.display = "block";
    dot[counter - 1].className += " active";
}
</script>
<!--  -->

<!-- ICONOS -->
<script src="https://kit.fontawesome.com/e7e3ef3c1c.js" crossorigin="anonymous"></script>
<!--  -->


@endsection