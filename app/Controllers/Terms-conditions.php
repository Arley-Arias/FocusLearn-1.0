<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Terms_conditions extends Controller
{
    public function index()
    {
        // Puedes devolver una vista o texto
        return view('terms-conditions');
        // o simplemente:
        // return "Bienvenido a la página de inicio";
    }
}
