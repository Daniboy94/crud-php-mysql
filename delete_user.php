<?php
include("conexion.php"); //incluis el fichero de conexion

$con = connection(); //definimos una variable a la funcion nativa connection()

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id='$id'";

$query = mysqli_query($con, $sql);

if ($query) { //si tenemos una consulta
    Header("Location: index.php"); //se va a rediccionar a el usuario de nuevo al index.php, con los valores nuevos de la consulta
};
