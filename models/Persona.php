<?php

declare(strict_types=1);

class Persona
{
 protected string $dni = '';
 public string $nombre = 'Desconocido';
 public int $edad = 50;

 // Método constructor en php:
 function __construct(string $nif, ?string $name, ?int $age)
 {
  $this->dni = $nif ?? 0;
  $this->nombre = $name ?? 'Desconocido';
  $this->edad = $age ?? 0;
 }

 function setNif(string $nif): void
 {
  $this->dni = $nif;
 }

 // Dar acceso al contenido privado:
 public function getEdad(): int
 {
  return $this->edad;
 }
 function getNif(): string
 {
  return $this->dni;
 }


 // Pasar a string
 function __toString()
 {
  return join(
   ',',
   [$this->nombre, $this->dni, $this->edad]
  );
 }
}

class Profesor extends Persona
{
 public array $asignaturas = [];
 public bool $esTutor = false;
 function __construct(string $nif, string $name, int $age, bool $tutor)
 {
  parent::__construct($nif, $name, $age);
  $this->esTutor = $tutor;
 }
}

$xurxo = new Profesor('32443r32', 'pepe', 54, true);
array_push($xurxo->asignaturas, ['Desarrollo Web', 'BBDD']);

print_r($xurxo)
