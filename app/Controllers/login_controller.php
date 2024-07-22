<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuarios_Model;

class login_controller extends Basecontroller
{
    public function index()
        helper(['form','url'] );
    {
        $dato['titulo']='login';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        //llamamos datos del formulario
        $email = $this ->request->gerVar('email');
        $password = $this ->request->gerVar('pass');

        $data = $model ->where('email', $email)->first();
        if($data)
        {
            $pass = $data ['pass'];
            $ba   = $data ['baja'];
            if($ba== 'SI')
            {
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to('/login_controller');
            }
            // se verifica y se inicia sesion si cumple la verificacion
            $verify_pass = password_verify($password,$pass);
            //password_verify determina requisitos de la conf de la contraseña
            if($verify_pass)
            {   $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'logged_in' => TRUE
                ];
                //si cumple se inicia sesion
                $session->set($ses_data);

                session()->setFlashdata('msg','Bienvenido!!!');
                returm redirect()->to('/panel');
            }
                else{
                    //no paso la validacion de la password
                    $session->setFlashdata('msg','Password Incorrecta');
                    return redirect()->to('/login_controller');
                    }
                else{
                    $session->setFlashdata('msg','No Existe el Email o es Incorrecto');
                    return redirect()->to('/login:controller')
                    }
        }
    }        
            public function logout()
            {
            $session = session();  
            $session => destroy();
            return redirect()->to('/')
            }
          
        
}        

