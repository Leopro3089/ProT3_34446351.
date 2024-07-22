<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('front/head_view',$data);
        echo view('front/header');
        echo view('front/navbar_view');
        echo view('front/principal_ultimo');
        
        echo view('front/footer');
    }
    public function quienes_somos()
    {   
        $data['titulo']='quienes_somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer');
       
        
    }
    public function acerca_de()
    {
        $data['titulo']='acerca_de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer');
    }
    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }
    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
    public function tienda()
    {
        $data['titulo']='tienda';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/tienda');
        echo view('front/footer');
    }
}
