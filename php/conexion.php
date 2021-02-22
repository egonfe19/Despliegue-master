<? php


function conexion()
{
    // Poner la IP donde se encuentren la base de datos
    $servername = "localhost";
    // Usuario y contraseña de la BBDD
    $username = "root";
    $password = "";
    
    //Nombre de la BBDD
    
    $dbname = "despliegue";

    return $conn = mysqli_connect($servername, $username, $password, $dbname);
}

?>