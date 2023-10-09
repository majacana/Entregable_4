<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleup.css">
    <title>Editar usuario</title>
</head>
<body>

    <div class="users-form">
        <h2>Editar usuario</h2>

        <form action="edit_user.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']?>">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?= $row['name'] ?>" required><br>

            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" value="<?= $row['lastname'] ?>" required><br>

            <label for="username">Usuario:</label>
            <input type="text" name="username" value="<?= $row['username'] ?>" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" value="<?= $row['password'] ?>" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" value="<?= $row['email'] ?>" required><br>

            <input type="submit" value="Editar valores">
        </form>
    </div>
    
</body>
</html>