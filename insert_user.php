<?php
include("conexion.php"); //incluis el fichero de conexion

$con = connection(); //definimos una variable a la funcion nativa connection()


//recibimos con el metodo POST los valores de los inpunts
$id = null;
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql = "INSERT INTO users VALUES('$id','$name','$lastname','$username','$password','$email')"; //creamos una consulta que va agregar nuevos usuarios a la tabla,los valores se insertan con comillas simples
$query = mysqli_query($con, $sql); //pasamos por parametro la conexion y la consulta


if ($query) { //si tenemos una consulta
    Header("Location: index.php"); //encabezado con el cual el usuario va a rediccionar el usuario nuevo al index.php, con los valores nuevos
};
