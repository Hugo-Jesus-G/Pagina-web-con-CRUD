(() => {
    'use strict';

    // Obtener el formulario
    const form = document.querySelector('.needs-validation');
    const correo = document.getElementById('correoR');
    const nombre = document.getElementById('nombreR');
    const exito = document.getElementById('exito');

    // Verificar si el formulario existe
    if (form) {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
            if (correo) {
                correo.remove();
            }
            if (nombre) {
                nombre.remove();
            }
            if (exito) {
                exito.remove();
            }


        }, false);
    }

    // Verificar y remover elementos

})();

function eliminarElementosPHP() {
    const correo = document.getElementById('correoR');
    const nombre = document.getElementById('nombreR');
    const exito = document.getElementById('exito');
    if (correo) {
        correo.remove();
    }
    if (nombre) {
        nombre.remove();
    }
    if (exito) {
        exito.remove();
    }


}


window.addEventListener('unload', eliminarElementosPHP);

