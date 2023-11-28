<?php
    
    /**
     * obtengo los valores del envio
     */
    $correo = $_GET["email"];
    $contra = $_GET["password"]; 

    /**
     * llamo a la conexion con la bbdd
     */
    require("conexion.php");

    //almaceno los datos de la conexion
    $conexion = mysqli_connect($db_host,$db_usuario, $db_contra);
    

    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    }   
    mysqli_select_db($conexion, $db_name) or die( "No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");

    $consulta = "SELECT * FROM USERS WHERE correo = '$correo' and contra = '$contra' "; // el error está al acceder a la variable
    $resultados = mysqli_query($conexion, $consulta);
    

    if ($fila = mysqli_fetch_array($resultados)) {
        echo "entra al if" ; 
        echo "<table><tr><td>";
        echo $fila["id"]. "</td> <td> </td> <td> ";
        echo $fila["correo"]. "</td> <td></td> <td> ";
        echo $fila["contra"]. "</td>  <td> </tr> </table>";
    }else{
        echo "no hay resultados";
    }
        

    
            
    mysqli_close($conexion);


?>