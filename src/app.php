<?php
require_once __DIR__ . '/config/instances.php';
require_once __DIR__ . '/utils/get.data.body.php';
require_once __DIR__ . '/utils/check.methods.php';

function App(mixed $controllerRegister): void
{
   try {
      session_start();
      checkMethodRequest();
      $body = getDataBody();
      ['message' => $message] = $controllerRegister($body);
      if ($message) $_SESSION['success'] = $message;
   } catch (Exception $e) {
      $_SESSION['error'] = $e->getMessage();
   } finally {
      header('Location: /');
   }
}

App([$registerControllers, 'registerUser']);
