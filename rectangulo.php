?>
<html>
<head><title>Area del Rectángulo</title></head>
<body bgcolor="">
<font size="+1">
<form action="http://localhost/examen/rectangulo.php" method="POST">
Introduzca el valor de la base del rectangulo: <br>
  <input type="text" size=2 name="base"> <br>
Introduzca el valor de la altura del rectangulo: <br>
  <input type="text" size=2 name="altura"> <br> 

    <input type=submit value="Resolver">

<?php
 extract($_REQUEST, EXTR_SKIP);

 $result = $base * $altura;
 print "$result = $base * $altura <br>";
?>
</body>
 </body>
 </html>
 



 

