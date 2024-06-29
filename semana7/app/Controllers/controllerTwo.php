<?php

namespace App\Controllers;

class controllerTwo extends BaseController
{
    public function method3(): string
    {
        return view('historias');
    }

    public function method4(): string
    {
        return view('contacto');
    }
}
