<?php
require_once('./models/Contador.php');
$contador = new Contador($_REQUEST['salida']??0);

extract($_REQUEST);

if (isset($sumar)) {
 $contador->incrementar();
}
if (isset($restar)) {
 $contador->decrementar();
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