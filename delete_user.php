<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";
$query = mysqli_query($con, $sql);

if($query){
    echo "Datos eliminados correctamente";
    header("location: http://localhost/Entregable4/proyectocrud/p%C3%A1gina%202.php");
}else{
    echo "Error al eliminar los datos";
}

?>