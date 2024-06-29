<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function returnVista1(): string
    {
        $datos1 = [
            'Dir1' => 'http://localhost/semana9/vista1',
            'Dir2' => 'http://localhost/semana9/vista2',
            'Dir3' => 'http://localhost/semana9/vista3'
        ];
        return view('vista1', $datos1);
    }
    public function returnVista2(): string
    {
        $datos1 = [
            'Dir1' => 'http://localhost/semana9/vista1',
            'Dir2' => 'http://localhost/semana9/vista2',
            'Dir3' => 'http://localhost/semana9/vista3'
        ];
        return view('vista2', $datos1);
    }
    public function returnVista3(): string
    {
        $datos1 = [
            'Dir1' => 'http://localhost/semana9/vista1',
            'Dir2' => 'http://localhost/semana9/vista2',
            'Dir3' => 'http://localhost/semana9/vista3'
        ];
        return view('vista3', $datos1);
    }
    public function returnVista4($variable)
    {
        if ($variable == '1') {
            print_r('Estoy dentro del primer ciclo');
        } elseif ($variable == '2') {
            print_r('Estoy dentro del segundo ciclo');
        } else {
            print_r('Estoy dentro del tercer ciclo');
        }
    }

    public function testdb()
    {
    $db = \Config\Database::connect();
        if($db->connect()){
            echo("soy estupido");
        }else{
            echo("vamos a tomar");
    } 
    }

    public function returnCatalogo($variable)
{
        $datas = [
            'Dirzap' => 'http://localhost/semana9/catalogo/zapatos',
            'Dirves' => 'http://localhost/semana9/catalogo/vestidos',
        ];

        if ($variable == 'zapatos') {
            return view('catalogo/vistazap', $datas);
        } elseif ($variable == 'vestidos') {
            return view('catalogo/vistaves', $datas);
        }
    }

    public function returnVestiditos($variableVes)
    {
        $datas = [
            'Dirnashe' => 'http://localhost/semana9/vestidos/nashe',
            'Dircasual' => 'http://localhost/semana9/vestidos/casual',
            'Dirgod' => 'http://localhost/semana9/vestidos/god',
        ];

        if ($variableVes == 'nashe') {
            return view('vestidos/vistanashe', $datas);
        } elseif ($variableVes == 'casual') {
            return view('vestidos/vistacasual', $datas);
        } elseif ($variableVes == 'god') {
            return view('vestidos/vistagod', $datas);
        }
    }
}