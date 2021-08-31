<?php
include("php/conexion.php");
include("php/validarSesion.php");

?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="css/estilos.css">
          <script src='js/comprobante.js?1.1.0' language="Javascript"></script>


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fotos</title>
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
        <section id = "perfil">
            <!--seccion para el perfil-->
            <img src="<?php echo "$_SESSION[fotoPerfil]"?>" height="150">
            <h1><?php echo "$_SESSION[nombre] $_SESSION[apellido]"  ?></h1>
            <p></p>
                       <center>  <form action="php/cambiarFoto.php" method="POST" enctype="multipart/form-data">
                 <p> </p> Cambiar Foto de Perfil: <input name="archivo" type="file" accept=".jpg, .jpeg, .png" required />
                <input type="submit" name="subir" onclick="comprobante();" value="Subir"/>
            </form>  </center>
              
       </section>

       <section id = "recuadros">

        <!--seccion para las fotos-->
        <h2>Mis Fotos</h2>
         <center>  <form action="php/subirFoto.php" method="POST" enctype="multipart/form-data">
                 <p> </p> Añadir imagen: <input name="archivo" type="file" accept=".jpg, .jpeg, .png" required />
                <input type="submit" name="subir"  value="Subir"/> <br><br>
            </form>  </center>
        <?php
        
        $consulta = "SELECT *
                        FROM fotos F
                        WHERE F.Nickname = '$nickname' ";

                        $datos = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($datos)){
                        ?>
       
         <section class="recuadro">
             <img src="<?php echo $fila['NombreFoto']?>"  height="200" width="280">
         </section>
          
         <?php
              }
         ?>
          <br>
   </section>
           

   <section id="recuadros">
     <footer>
        <p>Copyright &copy 2021, EVENOR GUTI</p>
    </footer>
     </section>

 </body>
 </html>