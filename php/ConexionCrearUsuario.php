<?php
include("conexion.php"); //usamos el include para llamar un archivo



//declaramos variables para recibir y guardad los datos 
//del formulario

$nickname = $_POST["nickname"]; //post captura el valor
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad  =  $_POST["edad"];
//$descripcion =   $_POST("descripcion");
$email =    $_POST["correo"];
$password =   $_POST["contraseña"];
$passwordHash = password_hash($password, PASSWORD_BCRYPT); //BCRYPT es el que encripta la contraseña
$fotoPerfil = "img/$nickname/perfil.jpg";
//Evaluamos sis el nickname ingresado ya eciste

$consultaId = "SELECT Nickname 
                 FROM persona
                 WHERE Nickname ='$nickname' ";


$consultaId = mysqli_query($conexion, $consultaId); //devuelve un objeto con el resultado, false si hay error, true si se ejecuto

$consultaId =  mysqli_fetch_array($consultaId); //fetch extrae el valor del array

if(!$consultaId){ //si la consulta esta vacia no exite el nickname

    $sql  = "INSERT INTO persona VALUES ('$nickname','$nombre','$apellido','$edad','$fotoPerfil','$email','$passwordHash ')";


    //ejecutamos y verificamos si se guardan los datos
  if(mysqli_query($conexion,$sql)){

    mkdir("../img/$nickname"); //creamos una carpeta para el usuario
    copy("../img/default.jpg", "../img/$nickname/perfil.jpg");//copiamos nueestra foto por default
    //echo "Tu cuenta ha sido creada";
    //echo"<br> <a href='../index.html'>Iniciar sesion</a></div>";
     
  }else{
      echo "ERROR" . $sql . "<br>" . mysqli_connect_error($conexion);
      }
  
}else{
 echo "ERROR" . $sql . "<br>" . mysqli_error($conexion);
}
   //cerrando la conexion
   mysqli_close($conexion);







?>