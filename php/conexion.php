<?php

//declaramos variables
$servidor = "localhost"; //servidor a utilizar 
$usuario = "root"; //usuario de la base de datos
$contraseña = "";
$BD = "redsocial"; //nombre de la base de datos


//creamos la conexion

$conexion = mysqli_connect($servidor,$usuario,$contraseña,$BD);

//verificamos la conexion

if(!$conexion){

    echo "Fallo la conexion <br> ";
    die("Connection failed: " . mysqli_connect_error());

}else{
   // echo "Conexion exitosa";
}


?>