<?php
require_once __DIR__ . '/../interfaces/register.adapter.php';
require_once __DIR__ . '/../config/database.php';

class RegisterAdapter implements IRegisterAdapter
{
   private mysqli $connection;

   function __construct(mysqli $connection)
   {
      $this->connection = $connection;
   }

   public function createRegisterUser(string $name, string $email, string $password):void
   {
      try {
         $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
         $sql = $this->connection->prepare('INSERT INTO users (name, email, password) VALUES(?, ?, ?)');
         if ($sql === false) {
            throw new Exception('Prepare failed: ' . $this->connection->error);
         }
         $sql->bind_param('sss', $name, $email, $hashedPassword);
         if (!$sql->execute()) {
            throw new Exception('Execute failed: ' . $sql->error);
         }
      } catch (Exception $e) {
         throw new Exception('Error creating user: ' . $e->getMessage());
      } finally {
         $this->connection->close();
      }
   }
}
