<?php

namespace App\Controllers;

use App\Models\NModelSelect;

class CBdd extends BaseController
{
    public function testbdd()
    {
        $db = \Config\Database::connect();

        if($db -> connect()){
            print_r('Listo mijin conectado');
        
        }else{
            print_r('Cambiese de carrera');
        }
    }

 

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function Select_Controlador_bdd()
    {
        $instancia = new NModelSelect();

        $datosbdd = $instancia -> get_users_with_roles();
        $data = [
            "keyselectbdd" => $datosbdd
        ];
        
        return view('vistainventario', $data);
    }
}
