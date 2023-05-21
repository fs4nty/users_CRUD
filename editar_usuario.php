<?php
include("Conexion.php");
$con = connection();

$id = $_POST['id'];
$name = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}

?>
