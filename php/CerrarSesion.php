<?php

session_start();

$_SESSION = array(); //destruyee todas las variables de session.


session_destroy();

header('Location: ../index.html');


?>