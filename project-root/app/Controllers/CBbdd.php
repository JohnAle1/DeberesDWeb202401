<?php

namespace App\Controllers;

use App\Models\NModelSelect;

class CBbdd extends BaseController
{
    public function testbdd()
    {
        $db = \Config\Database::connect();

        if ($db->connect()) {
            print_r("conectado");
        }else{
            print_r("no conecta");
        }
    }

    public function Select_Controlador_bdd()
    {
        $instancia = new NModelSelect();
        $datosbdd = $instancia->Select_Modelo_Inventario();
        $data=[
            "keyselectbdd"=> $datosbdd,
        ];
        return view("vistainventario", $data);
    }
}