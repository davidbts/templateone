document.addEventListener('DOMContentLoaded',() => {
  iniciarMenu();
  registro();
  login();

  recuperar();
  cargarsubmenu();
  cargarmenuusuarios();
  cargarnotificaciones();
  // cuadroanuncio();

});

function iniciarMenu(){
  const menuPrincipal = document.querySelector('.acordeon-menu');
  if(menuPrincipal){
    menuPrincipal.addEventListener('click', e => {
      const hmenu = document.querySelector('.down-header');
      const estadoMenu = document.querySelector('.menu-activado');
      if(estadoMenu){
        estadoMenu.classList.remove('menu-activado');
      }
      else{
        hmenu.classList.add('menu-activado');
      }
    });
  }
}

function registro(){
  const registro = document.querySelector('.registrarse-header');
  if(registro){
    registro.addEventListener('click' ,  e => {
      const modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      const modaluserreg = document.querySelector(".modal-registro");
      modaluserreg.style.display = 'block';
    });
  }
  const afueraregistro = document.querySelector('.modal-user');
  if(afueraregistro){
    afueraregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      let elemento;
      elemento = e.target;
      const modaluser = document.querySelector(".modal-user");
      if(elemento.classList.contains('modal-user')){
        const modaluserreg = document.querySelector(".modal-registro");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }
  const cerrarregistro = document.querySelector('.cerrar-registro');
  if(cerrarregistro){
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-user");
      const modaluserreg = document.querySelector(".modal-registro");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function login(){
  const registro = document.querySelector('.login-header');
  if(registro){
      registro.addEventListener('click' ,  e => {
      const modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      const modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'block';
    });
  }
  const afueraregistro = document.querySelector('.modal-user');
  if(afueraregistro){
    afueraregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      let elemento;
      elemento = e.target;
      const modaluser = document.querySelector(".modal-user");
      if(elemento.classList.contains('modal-user')){
        const modaluserreg = document.querySelector(".modal-login");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  const cerrarregistro = document.querySelector('.cerrar-login');
  if(cerrarregistro){
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-user");
      const modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

function recuperar(){
  const registro = document.querySelector('.recuperar-header');
  if(registro){
      registro.addEventListener('click' ,  e => {
        const modaluserlog = document.querySelector(".modal-login");
      modaluserlog.style.display = 'none';
        // e.preventDefault();
      const modaluser = document.querySelector(".modal-user");
      modaluser.style.display = 'block';
      const modaluserreg = document.querySelector(".modal-recuperar");
      modaluserreg.style.display = 'block';
    });
  }
  const afueraregistro = document.querySelector('.modal-user');
  if(afueraregistro){
    afueraregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      let elemento;
      elemento = e.target;
      const modaluser = document.querySelector(".modal-user");
      if(elemento.classList.contains('modal-user')){
        const modaluserreg = document.querySelector(".modal-recuperar");
        modaluserreg.style.display = 'none';
        modaluser.style.display = 'none';
      }
    });
  }

  const cerrarregistro = document.querySelector('.cerrar-recuperar');
  if(cerrarregistro){
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-user");
      const modaluserreg = document.querySelector(".modal-login");
      modaluserreg.style.display = 'none';
      modaluser.style.display = 'none';
    });
  }
}

async function cargarsubmenu(){
  /*
  try{
    const resultado = await fetch('./subcategorias.json');
    const db = await resultado.json();
    const {Mujer, Hombre,Niña, Niño, Bebe}=db;
    let id=0;

    Mujer.forEach(element => {
      const itemCategoria = document.createElement('A');
      const itemDiv = document.createElement('DIV');
      if(typeof element !== 'object'){
        itemCategoria.textContent = element;
        itemCategoria.classList.add('subcategoria');

        itemDiv.classList.add('div-subcategoria');
        itemDiv.dataset.mujer = id++;
        // Selecciona un servicio para la cita
        itemDiv.onclick = selecionarServicio;

        itemDiv.appendChild(itemCategoria);
        // inyecta en el HTML
        document.querySelector('.submenu-mujer').appendChild(itemDiv);
      }
      else{
        let nombrecat = Object.keys(element)[0];
        itemCategoria.textContent = nombrecat;
        itemCategoria.classList.add('scategoria');

        itemDiv.classList.add('div-scategoria');
        itemDiv.onclick = selecionarServicio;
        itemDiv.appendChild(itemCategoria);
        document.querySelector('.submenu-mujer').appendChild(itemDiv);

        const {[nombrecat]:foo} = element;
        foo.forEach(subelement => {
          const itemCategor = document.createElement('A');
          const itemDi = document.createElement('DIV');
          itemCategor.textContent = subelement;
          itemCategor.classList.add('subcategoria');

          itemDi.classList.add('div-subcategoria');
          itemDi.dataset.mujer = id++;
          itemDi.onclick = selecionarServicio;
          itemDi.appendChild(itemCategor);
          document.querySelector('.submenu-mujer').appendChild(itemDi);
        });

      }
    });
    Hombre.forEach(element => {
      const itemCategoria = document.createElement('A');
      const itemDiv = document.createElement('DIV');
      if(typeof element !== 'object'){
        itemCategoria.textContent = element;
        itemCategoria.classList.add('subcategoria');

        itemDiv.classList.add('div-subcategoria');
        itemDiv.dataset.mujer = id++;
        // Selecciona un servicio para la cita
        itemDiv.onclick = selecionarServicio;

        itemDiv.appendChild(itemCategoria);
        // inyecta en el HTML
        document.querySelector('.submenu-hombre').appendChild(itemDiv);
      }
      else{
        let nombrecat = Object.keys(element)[0];
        itemCategoria.textContent = nombrecat;
        itemCategoria.classList.add('scategoria');

        itemDiv.classList.add('div-scategoria');
        itemDiv.onclick = selecionarServicio;
        itemDiv.appendChild(itemCategoria);
        document.querySelector('.submenu-hombre').appendChild(itemDiv);

        const {[nombrecat]:foo} = element;
        foo.forEach(subelement => {
          const itemCategor = document.createElement('A');
          const itemDi = document.createElement('DIV');
          itemCategor.textContent = subelement;
          itemCategor.classList.add('subcategoria');

          itemDi.classList.add('div-subcategoria');
          itemDi.dataset.mujer = id++;
          itemDi.onclick = selecionarServicio;
          itemDi.appendChild(itemCategor);
          document.querySelector('.submenu-hombre').appendChild(itemDi);
        });

      }
    });
    Niña.forEach(element => {
      const itemCategoria = document.createElement('A');
      const itemDiv = document.createElement('DIV');
      if(typeof element !== 'object'){
        itemCategoria.textContent = element;
        itemCategoria.classList.add('subcategoria');

        itemDiv.classList.add('div-subcategoria');
        itemDiv.dataset.mujer = id++;
        // Selecciona un servicio para la cita
        itemDiv.onclick = selecionarServicio;

        itemDiv.appendChild(itemCategoria);
        // inyecta en el HTML
        document.querySelector('.submenu-niña').appendChild(itemDiv);
      }
      else{
        let nombrecat = Object.keys(element)[0];
        itemCategoria.textContent = nombrecat;
        itemCategoria.classList.add('scategoria');

        itemDiv.classList.add('div-scategoria');
        itemDiv.onclick = selecionarServicio;
        itemDiv.appendChild(itemCategoria);
        document.querySelector('.submenu-niña').appendChild(itemDiv);

        const {[nombrecat]:foo} = element;
        foo.forEach(subelement => {
          const itemCategor = document.createElement('A');
          const itemDi = document.createElement('DIV');
          itemCategor.textContent = subelement;
          itemCategor.classList.add('subcategoria');

          itemDi.classList.add('div-subcategoria');
          itemDi.dataset.mujer = id++;
          itemDi.onclick = selecionarServicio;
          itemDi.appendChild(itemCategor);
          document.querySelector('.submenu-niña').appendChild(itemDi);
        });

      }
    });
    Niño.forEach(element => {
      const itemCategoria = document.createElement('A');
      const itemDiv = document.createElement('DIV');
      if(typeof element !== 'object'){
        itemCategoria.textContent = element;
        itemCategoria.classList.add('subcategoria');

        itemDiv.classList.add('div-subcategoria');
        itemDiv.dataset.mujer = id++;
        // Selecciona un servicio para la cita
        itemDiv.onclick = selecionarServicio;

        itemDiv.appendChild(itemCategoria);
        // inyecta en el HTML
        document.querySelector('.submenu-niño').appendChild(itemDiv);
      }
      else{
        let nombrecat = Object.keys(element)[0];
        itemCategoria.textContent = nombrecat;
        itemCategoria.classList.add('scategoria');

        itemDiv.classList.add('div-scategoria');
        itemDiv.onclick = selecionarServicio;
        itemDiv.appendChild(itemCategoria);
        document.querySelector('.submenu-niño').appendChild(itemDiv);

        const {[nombrecat]:foo} = element;
        foo.forEach(subelement => {
          const itemCategor = document.createElement('A');
          const itemDi = document.createElement('DIV');
          itemCategor.textContent = subelement;
          itemCategor.classList.add('subcategoria');

          itemDi.classList.add('div-subcategoria');
          itemDi.dataset.mujer = id++;
          itemDi.onclick = selecionarServicio;
          itemDi.appendChild(itemCategor);
          document.querySelector('.submenu-niño').appendChild(itemDi);
        });

      }
    });
    Bebe.forEach(element => {
      const itemCategoria = document.createElement('A');
      const itemDiv = document.createElement('DIV');
      if(typeof element !== 'object'){
        itemCategoria.textContent = element;
        itemCategoria.classList.add('subcategoria');

        itemDiv.classList.add('div-subcategoria');
        itemDiv.dataset.mujer = id++;
        // Selecciona un servicio para la cita
        itemDiv.onclick = selecionarServicio;

        itemDiv.appendChild(itemCategoria);
        // inyecta en el HTML
        document.querySelector('.submenu-bebe').appendChild(itemDiv);
      }
      else{
        let nombrecat = Object.keys(element)[0];
        itemCategoria.textContent = nombrecat;
        itemCategoria.classList.add('scategoria');

        itemDiv.classList.add('div-scategoria');
        itemDiv.onclick = selecionarServicio;
        itemDiv.appendChild(itemCategoria);
        document.querySelector('.submenu-bebe').appendChild(itemDiv);

        const {[nombrecat]:foo} = element;
        foo.forEach(subelement => {
          const itemCategor = document.createElement('A');
          const itemDi = document.createElement('DIV');
          itemCategor.textContent = subelement;
          itemCategor.classList.add('subcategoria');

          itemDi.classList.add('div-subcategoria');
          itemDi.dataset.mujer = id++;
          itemDi.onclick = selecionarServicio;
          itemDi.appendChild(itemCategor);
          document.querySelector('.submenu-bebe').appendChild(itemDi);
        });

      }
    });
  }
  catch(error){

  }
  */
  const cat = ["mujer","hombre","niñas","niños","bebes"];
  for(let i = 1; i <= cat.length ;i++){
    let submenuPrincipal = document.querySelector(`[data-submenu="${i}"]`);

    if(submenuPrincipal){
      submenuPrincipal.addEventListener('click', e => {
        console.log("hola");
        const hmenu = document.querySelector(`.submenu-${cat[i-1]}`);
        const estadoMenu = document.querySelector('.submenu-activado');
        if(estadoMenu){
          estadoMenu.classList.remove('submenu-activado');
        }
        else{
          hmenu.classList.add('submenu-activado');
        }
      });
    }
  }
}

function selecionarServicio(evt){
  let elemento;
  // if(evt.target.tagName === 'P')
  //   elemento = evt.target.parentElement;
  // else
  //   elemento = evt.target;

  // if(elemento.classList.contains('selecionado')){
  //   elemento.classList.remove('selecionado');
  //   eliminarSercivio(elemento);
  // }
  // else{
  //   elemento.classList.add('selecionado');
  //   agregarServicio(elemento);
  // }
  //console.log(elemento);
}

function cargarmenuusuarios(){
  const menuusuario = document.querySelector('.link-menu-usuario');
  if(menuusuario){
    menuusuario.addEventListener('click', e => {
      const hmenu = document.querySelector('.menu-usuario');
      const estadoMenu = document.querySelector('.menu-usuario-activado');
      if(estadoMenu){
        estadoMenu.classList.remove('menu-usuario-activado');
      }
      else{
        hmenu.classList.add('menu-usuario-activado');
      }
    });
  }
}

function cargarnotificaciones(){
  const menuusuario = document.querySelector('.link-menu-notificacion');
  if(menuusuario){
    menuusuario.addEventListener('click', e => {
      const hmenu = document.querySelector('.menu-notificaciones');
      const estadoMenu = document.querySelector('.menu-noti-activado');
      if(estadoMenu){
        estadoMenu.classList.remove('menu-noti-activado');
      }
      else{
        hmenu.classList.add('menu-noti-activado');
      }
    });
  }
}
/* 
function cuadroanuncio(){
  const registro = document.querySelector('.mostrar-anuncio');
  if (registro){
    registro.addEventListener('click' ,  e => {
      const modalfoto = document.querySelector(".modal-anuncio");
      modalfoto.style.display = 'block';
    });

    const cerrarregistro = document.querySelector('.cerrar-anuncio');
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-anuncio");
      modaluser.style.display = 'none';

    });
  }
}

*/

function abre(){
  console.log();
  const modaluser = document.querySelector(".modal-user");
    modaluser.style.display = 'block';
    const modaluserreg = document.querySelector(".modal-login");
    modaluserreg.style.display = 'block';

}

//forgot-password