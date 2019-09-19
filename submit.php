<?php 
//$name = $_POST['jmeno'];
//$age = $_POST['vek'];
//$gender = $_POST['pohlavi'];
$name = filter_input(INPUT_POST, 'jmeno', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, 'vek', FILTER_SANITIZE_SPECIAL_CHARS);
$gender = filter_input(INPUT_POST, 'pohlavi', FILTER_SANITIZE_SPECIAL_CHARS);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 Jméno:	  <b><?php echo $name;?></b> <br>
 Věk:	  <b><?php echo $age;?></b> <br>
 Pohlaví: <b><?php echo $gender;?></b> <br>
 </body>
 </html>