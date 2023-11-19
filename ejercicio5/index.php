<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>

<div class="galeria">
    <?php
    $directorio = 'imagenes/'; // Ruta al directorio donde están las imágenes
    $imagenes = glob($directorio . "*.jpg"); // Obtener todas las imágenes jpg

    foreach ($imagenes as $imagen) {
        echo "<div class='imagen'>";
        echo "<img src='" . $imagen . "' alt='Imagen'>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
