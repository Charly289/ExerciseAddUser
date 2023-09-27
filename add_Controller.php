<?php

include 'conexion.php';

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "12345";
        $dbname ="ejercicio";

        $nombre = isset($_POST['nombre']) ? $_POST['nombre']:false;
        $ap = isset($_POST['ap']) ? $_POST['ap']:false;
        $am = isset($_POST['am']) ? $_POST['am']:false;
        $curp = isset($_POST['curp']) ? $_POST['curp']:false;
        $rfc = isset($_POST['rfc']) ? $_POST['rfc']:false;
        $sexo = isset($_POST['sexo']) ? $_POST['sexo']:false;
        $fn = isset($_POST['fn']) ? $_POST['fn']:false;
        $banco = isset($_POST['banco']) ? $_POST['banco']:false;
        $entidad = isset($_POST['entidad']) ? $_POST['entidad']:false;
        $sucursal = isset($_POST['sucursal']) ? $_POST['sucursal']:false;
        $perfil = isset($_POST['perfil']) ? $_POST['perfil']:false;
        $correo = isset($_POST['correo']) ? $_POST['correo']:false;
        $password = isset($_POST['password']) ? $_POST['password']:false;
        $ine = isset($_POST['ine']) ? $_POST['ine']:false;
        $solicitud = isset($_POST['solicitud']) ? $_POST['solicitud']:false;        

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


    $sql = "INSERT INTO user (nombre, apellidop, apellidom, curp, rfc, sexo, fechanac, banco, efederativa, sucursal, perfil, correo, password, ine, solicitud) 
        VALUES ('$nombre', '$ap', '$am', '$curp','$rfc','$sexo','$fn', '$banco','$entidad','$sucursal', '$perfil','$correo','$password', '$ine','$solicitud')";

if (mysqli_query($conn, $sql)) {  

    echo("Datos Agregados");
    
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      
}
mysqli_close($conn);    
 
?>


