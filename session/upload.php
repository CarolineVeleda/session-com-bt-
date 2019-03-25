<?php
   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); 

      $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); 

      $new_name = date("Y.m.d-H.i.s") . $ext; 
      $dir = 'uploads/'; 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); 
      //var_dump(($_FILES['fileUpload']));
   }
   
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Basic Upload</title>
</head>
<body>


<br>
<br>

   <form action="#" method="POST" enctype="multipart/form-data">
      <input type="file" name="fileUpload">
      <br>
      <br>
      <input type="submit" class="btn btn-primary" value="enviar">
   </form>

<br>
<br>
<br>
<br>

   <a class="btn btn-danger" href="tabela.php">Ver lista</a>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>






