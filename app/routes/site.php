<?php


use app\controllers\ControllerCliente;
use app\controllers\ControllerFuncionario;
use app\controllers\ControllerHome;
use app\controllers\ControllerUsuario;

$app->get('/', ControllerHome::class . ":home");
$app->get('/listacliente', ControllerCliente::class . ':listacliente');
$app->get('/listafuncionario', ControllerFuncionario::class . ':listafunc');
$app->get('/listausuario', ControllerUsuario::class . ':listausu');