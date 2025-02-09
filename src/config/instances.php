<?php
require_once __DIR__ . '/database.php';
require_once __DIR__ . '/../repository/register.adapter.php';
require_once __DIR__ . '/../controllers/register.controllers.php';

$registerAdapter = new RegisterAdapter($connection);
$registerControllers = new RegisterControllers($registerAdapter);
