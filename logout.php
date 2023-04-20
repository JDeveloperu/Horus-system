<?php   

session_start();
session_destroy();

//Redireccionamiento a login
header("Location: index.php ")
?>