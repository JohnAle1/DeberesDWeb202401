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
        if ($db->connect()) {
            echo "se conecto";
        } else {
            echo "no se conecto";
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

    public function returnVestidos($variableV)
    {
        $datas = [
            'Dirvestidos' => 'http://localhost/semana9/vestidos/vestidos',
            'Dirgala' => 'http://localhost/semana9/vestidos/gala',
            'Dircasual' => 'http://localhost/semana9/vestidos/casual',
            'Dirverano' => 'http://localhost/semana9/vestidos/verano',
        ];

        if ($variableV == 'gala') {
            return view('vestidos/vistagala', $datas);
        } elseif ($variableV == 'casual') {
            return view('vestidos/vistacasual', $datas);
        } elseif ($variableV == 'vestidos') {
            return view('vestidos/vestidos', $datas);
        } elseif ($variableV == 'verano') {
            return view('vestidos/vistaverano', $datas);
        }
    }
    public function returnZapatos($variableZ)
    {
        $datas = [
            'Dirzapatos' => 'http://localhost/semana9/zapatos/zapatos',
            'Dirhombre' => 'http://localhost/semana9/zapatos/hombre',
            'Dirmujer' => 'http://localhost/semana9/zapatos/mujer',
            'Dirniño' => 'http://localhost/semana9/zapatos/kids',
        ];

        if ($variableZ == 'hombre') {
            return view('zapatos/hombre', $datas);
        } elseif ($variableZ == 'mujer') {
            return view('zapatos/mujer', $datas);
        } elseif ($variableZ == 'kids') {
            return view('zapatos/kids', $datas);
        } elseif ($variableZ == 'zapatos') {
            return view('zapatos/zapatos', $datas);
        }
      
    }
}