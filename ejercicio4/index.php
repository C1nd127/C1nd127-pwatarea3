<?php
session_start(); // Inicia una nueva sesión o reanuda la existente

// Función para generar un nuevo número aleatorio
function generarNuevoNumero() {
    $_SESSION['numero_aleatorio'] = rand(1, 100); // Número aleatorio entre 1 y 100
}

// Verifica si se solicitó reiniciar el juego
if (isset($_GET['reiniciar'])) {
    generarNuevoNumero();
}

// Generar un número aleatorio si no existe
if (!isset($_SESSION['numero_aleatorio'])) {
    generarNuevoNumero();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Adivinanzas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        #respuesta {
            color: green;
        }
    </style>
    <script>
        function verificarRespuesta() {
            var entrada = document.getElementById('numero_adivinanza').value;
            var respuesta = '<?php echo $_SESSION['numero_aleatorio']; ?>';

            if (entrada === respuesta) {
                document.getElementById('respuesta').innerHTML = '¡Correcto!';
            } else {
                document.getElementById('respuesta').innerHTML = 'Incorrecto. Inténtalo de nuevo.';
            }
        }

        // Función para reiniciar el juego
        function reiniciarJuego() {
            window.location.href = '?reiniciar=true';
        }
    </script>
</head>
<body>

<h1>Juego de Adivinanzas</h1>
<p>Intenta adivinar el número (entre 1 y 100):</p>

<input type="text" id="numero_adivinanza">
<button onclick="verificarRespuesta()">Adivinar</button>
<button onclick="reiniciarJuego()">Reiniciar Juego</button>

<div id="respuesta"></div>

</body>
</html>
