<?php
declare(strict_types=1);
require_once('./cancions.php');



class CD
{

 public array $canciones = [];
 private int $contador = 0;

 /**
  * @param Cancion[]  $canciones
  */
 function __construct(array $canciones) {
  // mirar si hay objetos:
  foreach ($canciones as $cancion) {
   if (get_class($cancion) !== 'Cancion')
    throw new Error('el objeto no es de tipo Canción');
  }
  $this->canciones = $canciones;
  $this->contador = count($this->canciones);
 }

 public function dameCancion (int $numeroCancion) : Cancion | null {
  if (array_key_exists($numeroCancion, $this->canciones));
   return $this->canciones[$numeroCancion];
  return null;
 }

function grabacion (int $indice, Cancion $cancion) {
 if (array_key_exists($indice, $this->canciones)){ 
  $cancionPrevia = $this->canciones[$indice];
  $this->canciones[$indice] = $cancionNueva;
  return $cancionPrevia;
}
return false;
}

public function agrega (Cancion $cancion) : void {
 array_push($this->canciones, $cancion);
}

function eliminar (int $indice) : ?Cancion {
 if (array_key_exists($indice, $this->canciones)) {
  $cancionCopia = $this->canciones[$indice];
  unset($this->canciones[$indice]);
  return $cancionCopia;
 } 
}
 

function numeroCanciones () : int {
  return count($this->canciones);
 }
}

$cd = new CD([new cancion('Schism ', 'Tool'), new cancion('Black', 'Pearl Jam')]);

$cancion = new Cancion ('Buff', 'Manuel');

$cd->agrega($cancion);

$cancion2 = new Cancion("");

$cd->grabacion(2, $cancion2);

echo $cd->numeroCanciones();


// $tmp = 'Chachi';

// if ($tmp=$cd->eliminar(2)) {
 
// };

// if ($cancion1) {
//  print_r($cancion1);
// } else {
//  echo "No existe ese número de canción";
// }