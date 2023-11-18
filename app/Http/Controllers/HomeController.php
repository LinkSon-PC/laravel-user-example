<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        return "Bienvenido a Laravel";
    }

    public function index($id)
    {
        return "Bienvenido Index $id";
    }

}
