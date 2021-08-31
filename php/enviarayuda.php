<?php 

include("con_db.php");
//echo "exito";
if (isset($_POST['registro'])) {
    if (strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['correo']) >= 1 && 
        strlen($_POST['telefono']) >= 1 && 
        strlen($_POST['mensaje']) >= 1 )  {

	    $nombre = trim($_POST['nombre']);
	    $correo = trim($_POST['correo']);
	    $telefono = trim($_POST['telefono']);
        $mensaje = trim($_POST['mensaje']);
	    $consulta = " INSERT INTO  datos(nombre, correo, telefono, mensaje) VALUES ('$nombre','$correo','$telefono','$mensaje')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Nos comunicaremos con usted lo mas pronto posible!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>