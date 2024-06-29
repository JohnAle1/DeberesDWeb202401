<?php

namespace App\Controllers;

class controllerOne extends BaseController
{
    public function method1(): string
    {
        return view('main');
    }

    public function method2(): string
    {
        return view('champs');
    }
}
