
<?php

include("conexion.php");


session_start(); //inicia una nueva sesion o reanuda las existentes

$_SESSION['login'] = false;

//declarando variables y guardar datos

$nickname = $_POST["nickname"];

$password =   $_POST["contraseña"];
$Intentalo = 0;
//evaluamnos el nickname ingresado

$consulta = "  SELECT *
        FROM persona 
        WHERE Nickname = '$nickname' ";

   $consulta = mysqli_query($conexion,$consulta);

   $consulta = mysqli_fetch_array($consulta);

    if($consulta){
        if(password_verify($password,$consulta['Password'])){

            $_SESSION[login] = true;
            $_SESSION[nickname] = $consulta['Nickname'];
            $_SESSION[nombre] = $consulta['Nombre'];
            $_SESSION[apellido] = $consulta['Apellido'];

            $_SESSION[edad] = $consulta['Edad'];

            $_SESSION[fotoPerfil] = $consulta['FotoPerfil'];
            
             header('Location: ../Perfil.php'); //Redireccionamos a mi perfil



        }else{
          
            echo "<br><a href='../index.html'>Intentalo de nuevo.<a/></div>";
        }
    }else{//si la consulta esta vacia significa que no existe el nickname

        echo "El usuario no existe";
        echo "<br><a href='../index.html'>Intentalo de nuevo.<a/></div>";
       
        
    }

    //cerrando la conexion

    mysqli_close($conexion);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

