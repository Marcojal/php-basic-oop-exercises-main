<?php
declare(strict_types = 1);

class Persona {
 public string $nombre = 'Desconocido';
 public string $pais = 'Desconocido';
 private int $edad = 50;

 // Método constructor en php:
 function __construct (?string $name, ?int $edad) {
  $this->nombre = $name??'';
  $this->edad = $edad??0;
 }

 // Pasar a string
 function __toString () {
  return join (
   ',',
   [$this->nombre, $this->pais, $this->edad]
  );
 }

 // Dar acceso al contenido privado:
 public function getEdad () : int {
  return $this->edad;
 }
}
