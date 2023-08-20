<?php

namespace App\Controllers;

class Denuncia extends BaseController
{
    public function index(): string
    {
        return
            view('templates/header').
            view('denuncia').
            view('templates/footer');
    }
}
