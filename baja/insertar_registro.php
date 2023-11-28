<?php
    
    $correo = $_GET["email"];
    $contra1 = $_GET["password"];

    require("conexion.php");

    $conexion = mysqli_connect($db_host,$db_usuario, $db_contra);

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    mysqli_select_db($conexion, $db_name) or die( "No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    
            
    $query= " SELECT * FROM USERS WHERE correo = '$correo' AND  contra = '$contra1'";
    $borrar = mysqli_query($conexion, $query);

    if($fila = mysqli_fetch_array($borrar) ){

        echo"registro borrado con exito ";
        echo "<table><tr><td>";
        echo $fila["id"]. "</td> <td> </td> <td> ";
        echo $fila["correo"]. "</td> <td></td> <td> ";
        echo $fila["contra"]. "</td>  <td> </tr> </table>";

        $query ="DELETE FROM USERS WHERE correo = '$correo' AND contra = '$contra1'";
        mysqli_query($conexion, $query);
    }else {
        echo "el registro no pertence a la base de datos";
    }

    
            
    mysqli_close($conexion);


?>