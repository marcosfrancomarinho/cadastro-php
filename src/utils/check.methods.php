<?php

function checkMethodRequest(): void
{
   try {
      $methodRequest = $_SERVER['REQUEST_METHOD'];
      if ($methodRequest !== 'POST') throw new Exception("metódo inválido");
   } catch (Exception $e) {
      throw $e;
   }
}
