<?php

namespace App\Controllers;

use Config\App;





class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }



    public function returnCatalogo($categoria)
    {
        $config = new App();
        $baseURL = $config->baseURL;
        $datos = [
            'iniciovestidos' => $baseURL . 'vestidos',
            'iniciozapatos' => $baseURL . 'zapatos',
            'gala' => $baseURL . 'vestidos/gala',
            'nocturno' => $baseURL . 'vestidos/nocturnos',
            'verano' => $baseURL . 'vestidos/verano',
            'casuales' => $baseURL . 'zapatos/casuales',
            'deportivos' => $baseURL . 'zapatos/deportivos',
            'formales' => $baseURL . 'zapatos/formales'
        ];
        if ($categoria == 'zapatos') {
            return view('zapatos/indexzapatos', ['datos' => $datos]);
        } elseif ($categoria == 'vestidos') {
            return view('vestidos/indexvestidos', ['datos' => $datos]);
        } else {
            echo "Categoría no encontrada.";
        }
    }



    public function categoria($categoria, $subcategoria)
    {
        $config = new App();
        $baseURL = $config->baseURL;
        $datos = [
            'iniciovestidos' => $baseURL . 'vestidos',
            'iniciozapatos' => $baseURL . 'zapatos',
            'gala' => $baseURL . 'vestidos/gala',
            'nocturno' => $baseURL . 'vestidos/nocturnos',
            'verano' => $baseURL . 'vestidos/verano',
            'casuales' => $baseURL . 'zapatos/casuales',
            'deportivos' => $baseURL . 'zapatos/deportivos',
            'formales' => $baseURL . 'zapatos/formales'
        ];
        if ($categoria == 'vestidos') {
            if ($subcategoria == 'gala') {
                return view('vestidos/gala', ['datos' => $datos]);
            } elseif ($subcategoria == 'nocturnos') {
                return view('vestidos/nocturnos', ['datos' => $datos]);
            } elseif ($subcategoria == 'verano') {
                return view('vestidos/verano', ['datos' => $datos]);
            } else {
                echo "Categoría de vestidos no encontrada.";
            }
        } elseif ($categoria == 'zapatos') {
            if ($subcategoria == 'casuales') {
                return view('zapatos/casuales', ['datos' => $datos]);
            } elseif ($subcategoria == 'deportivos') {
                return view('zapatos/deportivos', ['datos' => $datos]);
            } elseif ($subcategoria == 'formales') {
                return view('zapatos/formales', ['datos' => $datos]);
            } else {
                echo "Categoría de zapatos no encontrada.";
            }
        }
    }
}
