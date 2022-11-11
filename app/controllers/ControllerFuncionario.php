<?php

namespace app\controllers;

use app\database\models\Funcionario;

class ControllerFuncionario extends Base
{
    private $funcionario;
    public function __construct()
    {
        $this->funcionario = new Funcionario();
    }
    public function listafunc($request, $response)
    {
        $funcionario = $this->funcionario->find();
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("listafuncionario"),
            [
                "funcionario" => $funcionario,
                "lista" => HOME,
                "base_url" => BASE_URL,
                "descricao_label" => "Listagem de clientes"
            ]
        );
    }
}