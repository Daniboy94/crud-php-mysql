<?php
include("conexion.php"); //incluis el fichero de conexion

$con = connection(); //definimos una variable a la funcion nativa connection()

$sql = "SELECT * FROM users"; //hacemos la consulta sql para que se muestre los usuarios registrados en la tabla
$query = mysqli_query($con, $sql); //pasamos por parametro la conexion y la consulta

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Usuarios Crud</title>
</head>

<body>

    <div class="users-form">
        <form action="insert_user.php" method="post">
            <h1>Crear usuario</h1>
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastname" placeholder="Apellido" required>
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="text" name="password" placeholder="Contraseña" required>
            <input type="text" name="email" placeholder="Correo Electronico" required>



            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Correo Electrónico</th>
                    <th></th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <!-- usamos un bucle while para iterar sobre las celdas de la tabla y agregar los valores de los usuarios de la base de datos -->
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <th><?= $row["id"] ?></th>
                    <th><?= $row["name"] ?></th>
                    <th><?= $row["lastname"] ?></th>
                    <th><?= $row["username"] ?></th>
                    <th><?= $row["password"] ?></th>
                    <th><?= $row["email"] ?></th>
                    <!-- pasamos el id como parametro para que se pueda actualizar o borrar -->
                    <th><a href="update.php?id=<?= $row["id"] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete_user.php?id=<?= $row["id"] ?>" class="users-table--delete">Eliminar</a></th>
            </tbody>
            </tr>
        <?php endwhile; ?>
        </table>
    </div>
</body>

</html>

<!-- http://localhost/crud-php-mysql/index.php -->