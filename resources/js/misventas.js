document.addEventListener('DOMContentLoaded',() => {
  cuadrofoto();


});


function cuadrofoto(){
  const registro = document.querySelector('.subirfoto-imagen');

  if(registro){
    registro.addEventListener('click' ,  e => {
      const modalfoto = document.querySelector(".modal-foto");
      modalfoto.style.display = 'block';
      console.log("ventana");
    });

    const cerrarregistro = document.querySelector('.cerrar-foto');
    cerrarregistro.addEventListener('click' ,  e => {
    //   e.preventDefault();
      const modaluser = document.querySelector(".modal-foto");
      modaluser.style.display = 'none';

    });
  }
}
