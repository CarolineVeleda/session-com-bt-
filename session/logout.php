<?php

session_start();
unset($_SESSION['usuario']);
unset($_SESSION['email']);
session_destroy();
unset($_COOKIE['nome']);
unset($_COOKIE['email']);
setcookie("nome", null, -1, "/");
setcookie("email", null, -1, "/");
$dir = "uploads";
$file = scandir($dir, 1);
for ($cont=0; $cont < 2; $cont++) { 
    array_pop($file);
}
for ($cont=0; $cont < count($file); $cont++) {
    unlink("uploads/".$file[$cont]);
}
setcookie("status", true, time() + 5, "/");
header('Location: login.php');

?>