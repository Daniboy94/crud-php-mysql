<?php
function connection()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "users_crud_php";
    $con = mysqli_connect($host, $user, $pass, $bd);

    // Verificar la conexión
    if (!$con) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    mysqli_select_db($con, $bd);
    return $con;
}

// Uso de la función
$con = connection();
echo "Conexión exitosa a la base de datos.";
