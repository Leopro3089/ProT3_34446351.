<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
class Auth implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
{
// usuario logueado
if(!session()->get('logged_in'))
{
    //rediricciona la pagina de login
    return redirect()->to('/login');
}
}
//------
public function after(RequestInterface $request, ResponseInterface $response,$arguments = null)
{
    //do something here
}
}