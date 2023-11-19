document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los elementos del menú principal
    var menuItems = document.querySelectorAll('.menu-item');

    // Agregar un evento de clic a cada elemento del menú
    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Ocultar todos los submenús abiertos
            document.querySelectorAll('.submenu').forEach(function(submenu) {
                submenu.classList.remove('show');
            });

            // Mostrar el submenú del elemento actual
            var submenu = this.querySelector('.submenu');
            if (submenu) {
                submenu.classList.toggle('show');
            }

            // Prevenir que el navegador siga el enlace
            return false;
        });
    });
});
