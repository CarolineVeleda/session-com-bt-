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

        echo "<h3>".'Bem vindo'."</h3>";
        session_start();
        print_r($_SESSION);
        //include_once('teste.php');
        
    ?>

    <a href="upload.php">Upar arquivos</a>
</body>
</html>