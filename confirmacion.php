<?php 
    include("conexionBD.php");

    // escape variables for security
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);

    // Query
    $sql = "INSERT INTO registro (nombre, apellido, edad) 
        VALUES ('$nombre', '$apellido', '$edad');";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h6><a href="bienvenida.html">Inicio</a></h6>
    <h1>Confirmación</h1>
    <?php 
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }
        echo "<p>Registro completado</p>";

        mysqli_close($con);
    ?>
</body>
</html>

