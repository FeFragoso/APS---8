<?php

namespace App\Controllers;

use App\Models\DenunciaModel;

class Denunciar extends BaseController
{
    private $DenunciaModel;

    public function __construct()
    {
        $this->DenunciaModel = new DenunciaModel();
    }

    public function index(): string
    {
        return
            view('templates/header').
            view('denunciar').
            view('templates/footer');
    }

    public function cadastro()
    {
        $data = $this->request->getJSON(true);

        // Status
        $data['STATUS'] = 'Pendente';

        $this->DenunciaModel->insert($data);

        $retorno = [
            'status' => 'success',
            'data'   => $data
        ];

        return $this->response->setJSON($retorno);
    }
}
