<?php
    
    $correo = $_GET["email"];
    $contra1 = $_GET["password"];
    $contra2 = $_GET["password2"];

    require("conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario, $db_contra, $db_name);
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    $consultaUser = "SELECT id FROM users WHERE CORREO = '$correo'";
    $resultados = mysqli_query($conexion, $consultaUser);

    
            
    $insertar= "INSERT INTO USERS (ID, CORREO, CONTRA) VALUES (NULL, '$correo', '$contra1')";
    $INSERT = mysqli_query($conexion, $insertar);
    "<br><br><br>";
    echo "Registrado con exito, ahora podes disfrutar de nuestras mejores series! <br>";
    "<br><br><br>";
    echo "Tu usuario es  ". "$correo". "<br> <br>";
    "<br><br><br>";
    echo "Tu contraseña es "."$contra1". "<br><br>";

    
            
    mysqli_close($conexion);


?>