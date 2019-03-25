<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<?php

session_start();



$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['email'] = $_POST['email'];


$usuario = $_POST["usuario"];
$email = $_POST["email"];

    $arquivo = fopen ('dados.txt', 'r');
        $x=0;
        while(!feof($arquivo)){
            $linha = fgets($arquivo);
            $vet = explode(";",$linha);

            if ($vet[0]==$usuario and $vet[1]==$email){
                $x=1;
            }
            
        }
        if ($x==1){
            //echo "logadasso!!!!!!!!!!!!!!!!!!!!!";
            $cookie_nome = "nome";
            $cookie_value = $_SESSION['usuario'];
            setcookie($cookie_nome, $cookie_value, time() + (80 * 30), "/");

            $cookie_email = "email";
            $cookie_valuel = $_SESSION['email'];
            setcookie($cookie_email, $cookie_valuel, time() + (80 * 30), "/"); 
            header("location: bv.php");
        }
        else{
            echo "opora vai se registrar fdp";
        }
        fclose($arquivo);

       



//  Inicia a sessao

print_r($_SESSION);







?>

</body>
</html>
