<?php

namespace App\Controllers;

class Controlleruno extends BaseController
{
    public function method1(): string
    {
        return view('view1');
    }

    public function method2(): string
    {
        return view('view2');
    }
}
