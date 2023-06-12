// Función que cuando pulsan el botón enter salte al siguiente campo del login (de usuario a contraseña en este caso) y al volver a pulsarlo ejecute el botón de enviar

function SubmitOnEnter(f, _accion, e, control) {
    evt = e || window.event; // compliant with ie6
    if (evt.keyCode == 13) {
        if (control.name == 'usuario_id') {
            document.getElementById('clave').focus()
        } else {
            var boton = document.getElementById('enviar');
            boton.click();
        }
    }
}