<?php
//recibir los datos y almacenarlos en variables
include 'config.php';
$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$celular = $_POST["celular"];
$email = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$observacion = $_POST["observacion"];

//Consulta para insetar
 $insertar = "INSERT INTO usuarios(apenom,cedula,celular,contraseña,email,observaciones) VALUES ('$nombre','$cedula','$celular','$contraseña','$email','$observacion')";

 



//ejecutar consulta
$resultado = mysqli_query($con,$insertar);


if (!$resultado){
    echo 'error al registrarse';
}else{
    echo 'usuario registrado exitoxamente';
}


//cerrar conexion

mysqli_close($con);

?>