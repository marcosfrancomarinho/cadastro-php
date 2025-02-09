<?php
function getDataBody(): array
{
   return [
      "name" => $_POST['name'],
      "email" => $_POST['email'],
      "password" => $_POST['password']
   ];
}
