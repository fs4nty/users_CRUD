<?php
include("Conexion.php");
$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Usuarios CRUD</title>
</head>

<body>
    <div class="users-form">
        <form action="insertar_usuario.php" method="POST">
            <h1>Crear usuario</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="email" placeholder="Ejemplo@gmail.com">
            <input type="password" name="password" placeholder="Contraseña">

            <input type="submit" value="Agregar usuario">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tr>
                        <th> <?= $row['id'] ?> </th>
                        <th> <?= $row['name'] ?> </th>
                        <th> <?= $row['email'] ?> </th>
                        <th> <?= $row['password'] ?> </th>

                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
