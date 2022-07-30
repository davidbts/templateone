<style>
  /* COLOR DEL MENU */
  .sticky{background-color: #161616b0;}
  /*COLOR LOGO MENU*/
  .menu-color-titulo{color: #fff;}
  /*COLOR SECCION MENU*/
  .menu-color-secciones{color: #fff;}
  /* COLOR MENU RESPONSIVO */
  @media (max-width: 868px){.menu-list{background: #222;}}
  /* COLOR ICONO RESPONSIVO */
  .fas{color: #fff;}
</style>

<nav class="navbar">
    <div class="box-nav">
      <div class="logo">
        <!-- Texto o Imagen -->
        <a class="menu-color-titulo" href="#">Logo</a>
        <!-- <img class="img-nav" src="img\logo.png" alt="">  -->
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a class="menu-color-secciones" href="#">INICIO</a></li>
        <li><a class="menu-color-secciones" href="#">GALERÍA</a></li>
        <li><a class="menu-color-secciones" href="#">SERVICIOS</a></li>
        <li><a class="menu-color-secciones" href="#">CONTACTO</a></li>
        <li><a class="menu-color-secciones" href="#">FAQ</a></li>
        <li><a class="menu-color-secciones" href="#"><i class="fas fa-user"></i></a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

<script src="https://kit.fontawesome.com/e7e3ef3c1c.js" crossorigin="anonymous"></script>