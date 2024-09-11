<?php

//inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php';// inclui o controlador de autenticação
require 'controllers/UserController.php'; // inclui o controlador de usuários
require 'controllers/DashboardController.php'; //inclui o controlador de dashboard

//cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // instancia controlador de autenticaçã
?>