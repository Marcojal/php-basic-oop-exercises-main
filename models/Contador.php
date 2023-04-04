<?php

class Contador {
 private int $result;

 function __construct (int $resultadoActual) {
  $this->result = $resultadoActual??0;
 }

 function getResult (): int {
  return $this->result;
 }

 function incrementar(): void
 {
  $this->result++;
 }
 function decrementar(): void
 {
  $this->result--;
 }
}

?>