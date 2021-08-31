<?php

if($nickname == $nicknameA){
    header('Location: Perfil.php');
}


$consulta = " SELECT * FROM persona WHERE Nickname = '$nicknameA' ";

$consulta = mysqli_query($conexion, $consulta);
$consulta = mysqli_fetch_array($consulta);

$nombreA =   $consulta['Nombre'];
$apellidosA =  $consulta['Apellido'];
$edadA =       $consulta['Edad'];
$fotoPerfilA =   $consulta['FotoPerfil'];







     
?>