<?php

include_once(upload.php);



$path = "\Users\ivon\Desktop\session\uploads";
$diretorio = dir($path);
 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo $arquivo."<br />";
//echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Arquivo</th>
      <th scope="col">Tamanho</th>
    </tr>
  </thead>
  <tbody>

  <?php  
  include_once(upload.php);
  $path = "\Users\ivon\Desktop\session\uploads";
  $diretorio = dir($path);
  while($arquivo = $diretorio -> read()){
        //echo $arquivo."<br />";
?>
    <tr>
      <td> <?php echo $arquivo; ?> </td>
      <td> </td>
    </tr>
    <tr>
      <td> </td>
      <td> </td>
    </tr>
    <?php } 
    $diretorio -> close();
    ?>
  </tbody>
</table>




<a href="pdf.php">BAIXAR PDF</a>
<a href="logout.php">Sair da conta</a>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>