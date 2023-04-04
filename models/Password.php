<?php

class Password {
 
   private $longitud;
   private string $contraseña;
   
   
   function __construct ($maxLong) {
      $this->longitud = $maxLong;
      $this->contraseña = $password??'';

      if (!strlen($maxLong) === 8) {
         return 'La clave debe tener al menos 8 caracteres';
      }
   }

   public function esFuerte() {
      
   }

   public function get() {
      echo $this->contraseña;
   }
}

 ?>