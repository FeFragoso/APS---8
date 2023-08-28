<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AutenticacaoFilter implements FilterInterface
{
    protected $session;

    public function before(RequestInterface $request, $arguments = null)
    {
        
        $session = $this->session = \Config\Services::session();

        if ($session->logado != true)
        {
            return redirect()->to('login');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}