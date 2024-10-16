<?php 
    $con = mysqli_connect("localhost", "root", "selley", "prueba");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Query
    $sql = "SELECT * FROM registro;";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {
      echo $row['nombre'] . " " . $row['apellido'] . " " . $row['edad'];
      echo "<br>";
    }

    mysqli_close($con);
?>