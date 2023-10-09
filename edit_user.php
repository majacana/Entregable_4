<?php

include("connection.php");
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE users SET name = '$name', lastname = '$lastname', username = '$username', password = '$password', email = '$email' WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    echo "Datos actualizados correctamente";
    header("location: http://localhost/Entregable4/proyectocrud/p%C3%A1gina%202.php");
}else {
    echo "Error al actualizar los datos";
}

?>