<?php

include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES ('$id', '$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($con, $sql);

if($query){
    echo "Datos insertados correctamente";
    header("location: página 2.php");
}else{
    echo "Error al insertar los datos";
}

?>
