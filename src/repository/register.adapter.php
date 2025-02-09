<?php
require_once __DIR__ . '/../interfaces/register.adapter.php';
require_once __DIR__ . '/../config/database.php';

class RegisterAdapter implements IRegisterAdapter
{
   private mysqli $connection;
   function __construct(mysqli $connection)
   {
      $this->connection  = $connection;
   }
   public function createRegisterUser(string $name, string $email, string $password)
   {
      try {
         $sql = $this->connection->prepare('INSERT INTO users (name, email, password) VALUES(?, ?, ?)');
         $sql->execute([$name, $email, $password]);
      } catch (Exception $e) {
         throw $e;
      } finally {
         $this->connection->close();
      }
   }
}
