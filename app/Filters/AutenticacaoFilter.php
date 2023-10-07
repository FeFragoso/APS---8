<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\URI;

class AutenticacaoFilter implements FilterInterface
{
    protected $session;
    protected $uri;

    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = new URI(current_url());

        $session = $this->session = \Config\Services::session();

        if ($uri->getPath() != '/denunciar' && $uri->getPath() != '/' && $uri->getPath() != '/denunciar/cadastro')
        {
            if ($session->logado != true)
            {
                return redirect()->to('login');
            }
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}