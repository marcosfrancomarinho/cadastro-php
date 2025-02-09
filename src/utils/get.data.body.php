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
         throw new Exception('os campos precisa está todos preenchidos');
      }
      return $datasBody;
   } catch (Exception $e) {
      throw new Exception($e->getMessage());
   }
}
