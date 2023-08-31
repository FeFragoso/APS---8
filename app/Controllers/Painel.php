<?php

namespace App\Controllers;

use App\Models\DenunciaModel;

class Painel extends BaseController
{
    private $DenunciaModel;

    public function __construct()
    {
        $this->DenunciaModel = new DenunciaModel();
    }

    public function index(): string
    {
        $data = $this->DenunciaModel;

        return
            view('templates/header').
            view('painel-administrativo', ['data' => $data]).
            view('templates/footer');
    }

    public function atendido($PK)
    {
        $this->DenunciaModel->set('STATUS', 'Atendido')->where('PK', $PK)->update();

        return redirect()->to('painel');
    }

    public function desconsiderar($PK)
    {
        $this->DenunciaModel->delete(['PK' => $PK]);

        return redirect()->to('painel');
    }
}
