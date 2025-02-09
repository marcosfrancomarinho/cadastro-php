<?php

function checkMethodRequest(): void
{
   try {
      $methodRequest = $_SERVER['REQUEST_METHOD'];
      if ($methodRequest !== 'POST') throw new Exception("metódo de formulário permitido apenas POST");
   } catch (Exception $e) {
      throw new Exception($e);
   }
}
