document.addEventListener('DOMContentLoaded', () => {
    amigos();
    copiarAlPortapapeles();
});

function amigos() {
    const registro = document.querySelector('.invita-amigos');
    if (registro) {
        registro.addEventListener('click', e => {
            const modaluser = document.querySelector(".modal-user");
            modaluser.style.display = 'block';
            const modaluserreg = document.querySelector(".modal-amigos");
            modaluserreg.style.display = 'block';
        });
    }
    const afueraregistro = document.querySelector('.modal-user');
    if (afueraregistro) {
        afueraregistro.addEventListener('click', e => {
            //   e.preventDefault();
            let elemento;
            elemento = e.target;
            const modaluser = document.querySelector(".modal-user");
            if (elemento.classList.contains('modal-user')) {
                const modaluserreg = document.querySelector(".modal-amigos");
                modaluserreg.style.display = 'none';
                modaluser.style.display = 'none';
            }
        });
    }

    const cerrarregistro = document.querySelector('.cerrar-amigos');
    if (cerrarregistro) {
        cerrarregistro.addEventListener('click', e => {
            //   e.preventDefault();
            const modaluser = document.querySelector(".modal-user");
            const modaluserreg = document.querySelector(".modal-amigos");
            modaluserreg.style.display = 'none';
            modaluser.style.display = 'none';
        });
    }
}

function copiarAlPortapapeles() {

    const btnAmigos = document.querySelector('.btn-amigos');
    var codigoACopiar = document.getElementById('url-amigos');

    if (btnAmigos) {
        btnAmigos.addEventListener('click', e => {

            // Clear any current selection
            const selection = window.getSelection();
            selection.removeAllRanges();

            // Select paragraph
            const range = document.createRange();
            range.selectNodeContents(codigoACopiar);
            selection.addRange(range);

            try {
                document.execCommand('copy');
            }
            catch (ex) {
                excepcion();
            }
        })
    }

}
