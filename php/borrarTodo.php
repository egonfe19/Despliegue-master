<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Todo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    echo "<h1>BASES DE DATOS 3-1 - Añadir</h1>";
   // Llamamos a la BBDD
   require_once('conexion.php');

   // Creamos la conexión a la BBDD
   $conn = conexion();

   // Comprobamos la conexión
   if (!$conn) {
       die("Conexión fallida: " . mysqli_connect_error());
   }
   //eliminar BBDD
    $query = "DROP DATABASE ejericio1PHP";
    $resultado = mysqli_query($conn, $query);

    if ($resultado === TRUE) {
        echo "<h3 class='result'>Base de Datos eliminada correctamente.</h3>";
    } else {
        echo "<div class='result'>Error: " . $conn->error . "</div>";
    }

    $conn->close();
    //boton volver atras
    echo "<a  href='../index.html'>Volver atrás</a>"
    ?>
</body>

</html>