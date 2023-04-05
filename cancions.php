<?php

declare(strict_types=1);

class Cancion {

 private string $titulo = '';
 private string $autor = '';

 function __construct(?string $title = 'desconocido', ?string $author = 'desconocido')
 {
  $this->titulo = $title;
  $this->autor = $author??''; // deja introducir nulos
 }

 public function dameTitulo () : string {
  return $this->titulo;
 }

 public function dameAutor () : string {
  return $this->autor;
 }

 function setTitulo (string $title) : void {
  $this->titulo = $title;
 }

 function setAutor (string $value) : void {
  $this->autor = $value;
 }

}

$schism = new Cancion ('schism', 'tool');
print_r($schism);