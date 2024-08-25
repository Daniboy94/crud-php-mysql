<?php

include("conexion.php"); //incluis el fichero de conexion

$con = connection(); //definimos una variable a la funcion nativa connection()

//recibimos con el metodo POST los valores de los inpunts
$id = $_POST["id"]; //obtenemos el id del usuario que deseamos editar, ya no puede ser un valor null
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
//hacemos una nueva consulta con UPDATE
$sql = "UPDATE users SET name='$name', lastname='$lastname', username='$username', password='$password',email ='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql); //pasamos por parametro la conexion y la consulta


if ($query) { //si tenemos una consulta
    Header("Location: index.php"); //encabezado con el cual el usuario va a rediccionar el usuario nuevo al index.php, con los valores nuevos
};
