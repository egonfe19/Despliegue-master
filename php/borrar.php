<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Añadir</h1>";
    require_once('conexion.php');

    // Creamos la conexión a las BBDD
    $conn = conexion();

    // Comprobamos la conexión a la BBDD
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    //ejecutamos delete
    $query = "DELETE FROM clientes WHERE id=3";
    $resultado = mysqli_query($conn, $query);
    //resultado
    if ($resultado === TRUE) {
        echo "<h3 class='result'>Registro eliminado correctamente.</h3>";
    } else {
        echo "<div class='result'>Error: " . $conn->error . "</div>";
    }

    $conn->close();
   

    //boton volver atras
    echo "<a href='../index.html'>Volver atrás</a>"

    ?>
</body>

</html>