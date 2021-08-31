<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel ="stylesheet" href="css/estilosform.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
</head>
<body>

    <form action="" method="POST" class="formulario">
       <h1 class="formulario_titulo">Contactenos</h1>
             <input type="text" name ="nombre"id="nombre" class="formulario_input"> <!--nombre-->
            <label for="" class="formulario_label">Nombre</label>
            <input  type="email" name="correo"  id="correo" class="formulario_input"> <!--correo-->
            <label for="" class="formulario_label">Correo</label>
            <input type="number" name="telefono"  id="telefono" class="formulario_input"> <!--telefono-->
            <label for="" class="formulario_label">Telefono</label>
            <input type="text" name="mensaje"id="mensaje" class="formulario_input"> <!--mensaje-->
            <label for="" class="formulario_label">Mensaje</label>
             <input type="submit" name="registro" class="formulario_submit""  >
             <!--  <input type="submit" name="registro" class="formulario_submit" onclick=" return validarFormulario();">-->
    </form>
    <?php
    include("php/enviarayuda.php");
    ?>
    <div id="error"></div>
<script src="js/forms.js" language="Javascript"></script>
<script src="js/validar.js" language="Javascript"></script>

</body>
</html>