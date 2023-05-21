<?php
include("Conexion.php");
$con = connection();

$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="editar_usuario.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['name'] ?>">
            <input type="text" name="email" placeholder="Ejemplo@gmail.com" value="<?= $row['email'] ?>">
            <input type="password" name="password" placeholder="Contraseña" value="<?= $row['password'] ?>">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
