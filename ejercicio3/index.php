<?php
$nombreArchivo = "contador.txt";

function incrementarContador() {
    global $nombreArchivo; 

    if (file_exists($nombreArchivo) && is_readable($nombreArchivo)) {
        $contador = file_get_contents($nombreArchivo);
        $contador = intval($contador);
    } else {
        $contador = 0;
    }

    $contador++;
    file_put_contents($nombreArchivo, $contador);

    return $contador;
}

$visitas = incrementarContador();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contador {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="contador">
    <h1>Contador de Visitas</h1>
    <p>Número de visitas: <?php echo $visitas; ?></p>
</div>

</body>
</html>
