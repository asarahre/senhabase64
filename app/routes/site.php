<?php


use app\controllers\ControllerCliente;
use app\controllers\ControllerFuncionario;
use app\controllers\ControllerHome;

$app->get('/', ControllerHome::class . ":home");
$app->get('/listacliente', ControllerCliente::class . ':listacliente');
$app->get('/listafuncionario', ControllerFuncionario::class . ':listafunc');