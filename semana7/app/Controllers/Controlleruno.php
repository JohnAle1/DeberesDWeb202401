<?php

namespace App\Controllers;

class Controlleruno extends BaseController
{
    public function metodo1(): string
    {
        return view('vista1');
    }
    public function metodo2(): string
    {
        return view('vista2');
    }
}
