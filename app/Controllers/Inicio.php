<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller
{
    public function index()
    {
        // Puedes devolver una vista o texto
        return view('inicio');
        // o simplemente:
        // return "Bienvenido a la página de inicio";
    }
}
