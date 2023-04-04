<?php
require_once('./models/Contador.php');


// lo que cuenta al salir la página:

$contador = new Contador(
 $_REQUEST['salida']??$_COOKIE['numero']??0);


extract($_REQUEST);

if (isset($sumar)) {
 $contador->incrementar();
 setcookie('numero', $contador->getResult());
}
if (isset($restar)) {
 $contador->decrementar();
 setcookie('numero', $contador->getResult());
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Contador</title>
</head>

<body>
 <form>

  <button name="sumar">+</button>
  <button name="restar">-</button>

  <input 
  type="hidden" 
  name="salida" 
  value="<?= $contador->getResult()?>">
  <?= $contador->getResult();?>

 </form>

</body>

</html>