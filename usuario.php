<?php
   include("php/conexion.php");
   include("php/validarSesion.php");

   $nicknameA = $_GET['nickname'];
   include("php/datosAmigo.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED SOCIAL</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src=”script.js” language="Javascript"></script>

</head>
<body>
    
    <header>
    <!--titulo  o logo-->
    <div id= "logo">
          <img src="img/logo.gif" alt="logo" height="120"></a>
    </div>
    <!--menu-->
    <nav class ="menu">
        <ul>
            <li> <a href="index.html">Inicio</a></li>
            <li> <a href="Perfil.php">Mi perfil</a></li>
            <li> <a href="amigos.php">Mis Amigos</a></li>
            <li> <a href="fotos.php">Mis Fotos</a></li>
            <li> <a href="buscar.php">Buscar Amigos</a></li>
             <li> <a href="php/CerrarSesion.php"></a> </li>
        </ul>
    </nav>
    </header>
    <!--BIENVENIDO-->
    <h1> <script language="javascript"> alert("Mi primer alerta en Script");</script></h1> 
    

    <section id = "perfil">
         <!--seccion para el perfil-->
            <img src="<?php echo "$fotoPerfilA"?>" />
            <h1><?php echo "$nombreA $apellidosA"  ?></h1>
            <p></p>
         
    </section>

    <section id = "recuadros">
        <h2>Mis Amigos</h2>

          <?php
        $consulta = "SELECT *
                        FROM persona P
                        WHERE P.Nickname IN (SELECT A.Nickname2
                                              FROM amistad A 
                                              WHERE A.Nickname1 = '$nicknameA' )
                                              LIMIT 3";

                        $datos = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($datos)){
                        ?>
         <!--seccion para los amigos-->
         <section class ="recuadro">
         <img src="<?php echo $fila['FotoPerfil'] ?>" height="150" >
             <h2><?php echo $fila['Nombre'] . " " .$fila['Apellido']?></h2>
             <p class ="parrafo">
             <a href="<?php echo "usuario.php?nickname=" .$fila['Nickname'] ?> " class="boton">Ver Perfil</a><br><br>
                        
         </section>

            <!--seccion para los amigos-->
           <!--Como implementamos un ciclo, no es necesario estaas dos para mostrar
                 el while nos ahorrara lineas de codigo se lo implementamos en el php-->
            <!--  <section class ="recuadro">
                <img src="img/amigo2.jpg" height="150" >
                <h2>amigo2</h2>
                <p class ="parrafo">
                    DescripcionDescripcionDescripcion
                </p>
                <a href="" class="boton">Ver Perfil</a><br><br>
            </section>   

          
                
                <section class ="recuadro">
                    <img src="img/amigo3.jpg" height="150" >
                    <h2>amigo3</h2>
                    <p class ="parrafo">
                        DescripcionDescripcionDescripcion
                    </p>
                     <a href="" class="boton">Ver Perfil</a><br><br>
                </section>-->
          
         <?php
              }
         ?>

                
    </section>
    
    <section id = "recuadros">
         <!--seccion para las fotos-->
         <h2>Mis Fotos</h2>
         <?php
        $consulta = "SELECT * FROM fotos F  Where F.Nickname = '$nicknameA' LIMIT 3";
                        $datos = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($datos)){
                        ?>
         
         <section class="recuadro">
             <img src="<?php echo $fila['NombreFoto']?>"  height="200" width="280">
         </section>
         <?php
              }
         ?>

         </section>

        

         <!--<section class="recuadro">
            <img src="img/foto2.jpg"  height="200" width="280">
        </section>
        <section class="recuadro">
            <img src="img/foto3.jpg"  height="200" width="280">
        </section>
    </section>
-->
       <section>
       <footer>
        <p>Copyright &copy 2021, EVENOR GUTI</p>
    </footer>
       </section>
         
    

    
</body>
</html>