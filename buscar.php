<?php
   include("php/conexion.php");
   include("php/validarSesion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src=”comprobante.js” language="Javascript"></script>

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
            <li> <a href="php/CerrarSesion.php">Exit</a> </li>


    
            </ul>
        </nav>
        </header>

        <section id = "recuadros">
            <h2>Encuentra nuevos amigos</h2>
            <!--seccion para los amigos-->
            <?php
        $consulta = "Select *
                        From persona P
                        Where P.Nickname != '$nickname'and P.Nickname not in (SELECT A.Nickname2
                                              From amistad A 
                                              Where A.Nickname1 = '$nickname' )";

                        $datos = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($datos)){
                        ?>
         <!--seccion para los amigos-->
         <section class ="recuadro">
             <img src="<?php echo $fila['FotoPerfil'] ?>" height="150" >
             <h2><?php echo $fila['Nombre'] . " " .$fila['Apellido']?></h2>
             <p class ="parrafo">
                
             </p>
             <a href="<?php echo "usuario.php?nickname=".$fila['Nickname'] ?> " class="boton">Ver Perfil</a>
             <a href="<?php echo "php/agregarAmigo.php?nickname=".$fila['Nickname']?>"  class="boton">Agregar</a> <br><br><br>
                        
         </section>

         <?php
              }
         ?>

            <!--
             <section class ="recuadro">
                <img src="img/persona6.png" height="150" >
                <h2>Persona6</h2>
                <p class ="parrafo">
                    DescripcionDescripcionDescripcion
                </p>
                <a href="" class="boton">Ver Perfil</a>
                <a href="" class="boton">Agregar</a><br><br>
            </section>
            -->
           
       </section>
       <footer>
        <p>Copyright &copy 2021, EVENOR GUTI</p>
    </footer>

</body>
</html>