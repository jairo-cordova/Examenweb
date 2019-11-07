
<html>
<head>
 <title> Cálculo del área de un Círculo </title>
</head>
<body bgcolor="lightblue"><font size="+1">
 <form action="http://localhost/examen/Circulo.php">
  <p>
  Introduzca el tamaño del radio: <br>
  <input type="text" size=10 name="radio">
  <p>
  <input type=submit value="Enviar">
  <input type=reset value="Borrar">
 </form>
 <?php
 echo $result, $radio;
 extract($_REQUEST, EXTR_SKIP); 
 $result = 3.14 *($radio * $radio);
 print "$result";
 ?>
</body>
</html>


