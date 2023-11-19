document.addEventListener('DOMContentLoaded', function() {
    var formulario = document.getElementById('formularioContacto');

    formulario.addEventListener('submit', function(event) {
        var nombre = document.getElementById('nombre').value.trim();
        var email = document.getElementById('email').value.trim();
        var mensaje = document.getElementById('mensaje').value.trim();

        if (nombre === '' || email === '' || mensaje === '') {
            alert('Por favor, completa todos los campos.');
            event.preventDefault(); // Detiene el envío del formulario
        }
    });
});
