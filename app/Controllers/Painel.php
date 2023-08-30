<?php

namespace App\Controllers;

class Painel extends BaseController
{
    public function index(): string
    {
        return
            view('templates/header').
            view('painel-administrativo').
            view('templates/footer');
    }
}
