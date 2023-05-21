<?php
include("Conexion.php");
$con = connection();

$id = null;
$name = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users VALUES('$id','$name','$email','$password')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
}

?>
