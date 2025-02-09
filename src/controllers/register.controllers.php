<?php
require_once __DIR__ . '/../interfaces/register.controllers.php';
require_once __DIR__ . '/../interfaces/register.adapter.php';

class RegisterControllers implements IRegisterControllers
{
   private IRegisterAdapter $registerAdapter;
   public function __construct(IRegisterAdapter $registerAdapter)
   {
      $this->registerAdapter = $registerAdapter;
   }
   
   public function registerUser(mixed $body): array
   {
      try {
         ['name' => $name, 'email' => $email, 'password' => $password] =  $body;
         $this->registerAdapter->createRegisterUser($name, $email, $password);
         return ['status' => 200, 'message' => "usuário registrado com sucesso."];
      } catch (Exception $e) {
         throw new Exception($e->getMessage());
      }
   }
}
