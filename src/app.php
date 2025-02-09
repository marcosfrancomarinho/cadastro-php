<?php
require_once __DIR__ . '/config/instances.php';
require_once __DIR__ . '/utils/get.data.body.php';
require_once __DIR__ . '/utils/check.methods.php';

function mainRouter(mixed $controllerRegister): void
{
   session_start();
   $body = getDataBody();
   checkMethodRequest();
   $controllerRegister($body);
   header('Location: /');
}

mainRouter([$registerControllers, 'registerUser']);
