<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    protected $session;
    private $UsuarioModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();

        $this->UsuarioModel = new UsuarioModel();
    }

    public function index(): string
    {
        return
            view('templates/header').
            view('login').
            view('templates/footer');
    }

    public function logar()
    {
        $EMAIL = $this->request->getPost('EMAIL');
        $SENHA = $this->request->getPost('SENHA');

        if ($this->UsuarioModel->where(['EMAIL' => $EMAIL, 'SENHA' => $SENHA])->first())
        {
            $usuario = $this->UsuarioModel->where(['EMAIL' => $EMAIL, 'SENHA' => $SENHA])->findAll()[0];

            $sessionData = [
                'logado' => true,
                'email'  => $EMAIL,
                'nome'   => $usuario['NOME']
            ];

            $this->session->set($sessionData);

            return redirect()->to('denuncia');
        }
        else
        {
            $this->session->setFlashdata('msg', 'E-mail e/ou senha incorreto!');

            return redirect()->to('login');
        }
    }
}
