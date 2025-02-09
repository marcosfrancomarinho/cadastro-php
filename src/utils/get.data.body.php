<?php
function getDataBody(): array
{
   try {
      $datasBody = [
         "name" => $_POST['name'],
         "email" => $_POST['email'],
         "password" => $_POST['password']
      ];
      if (!$datasBody['email'] || ! $datasBody['name'] || ! $datasBody['password']) {
         throw new Exception('preencha todos os campos.');
      }
      return $datasBody;
   } catch (Exception $e) {
      throw new Exception($e->getMessage());
   }
}
