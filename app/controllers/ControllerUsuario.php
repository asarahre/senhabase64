<?php

namespace app\controllers;

use app\database\models\Usuario;

class ControllerUsuario extends Base
{
    private $usuario;
    public function __construct()
    {
        $this->usuario = new Usuario();
    }
    public function listausu($request, $response)
    {
        $usuario = $this->usuario->find();
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("listausuario"),
            [
                "usuario" => $usuario,
                "lista" => HOME,
                "base_url" => BASE_URL,
                "descricao_label" => "Listagem de usuarios"
            ]
        );
    }
}