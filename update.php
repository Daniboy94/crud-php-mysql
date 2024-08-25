<?php
include("conexion.php"); //incluis el fichero de conexion

$con = connection(); //definimos una variable a la funcion nativa connection()

$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($con, $sql); //pasamos por parametro la conexion y la consulta
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Editar Usuarios</title>
</head>

<body>

    <div class="users-form">
        <form action="edit_user.php" method="post">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row["id"] ?>">
            <input type="text" name="name" placeholder="Nombre" value="<?= $row["name"] ?>">
            <input type="text" name="lastname" placeholder="Apellido" value="<?= $row["lastname"] ?>">
            <input type="text" name="username" placeholder="Usuario" value="<?= $row["username"] ?>">
            <input type="text" name="password" placeholder="Contraseña" value="<?= $row["password"] ?>">
            <input type="text" name="email" placeholder="Correo Electronico" value="<?= $row["email"] ?>">



            <input type="submit" value="Actualizar información">
        </form>
    </div>

</body>

</html>