<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Detalis extends BaseController
{
    public function details()
    {
        return view('details/details'); // si está directamente en /Views/
        // o return view('carpeta/details'); si está en una carpeta
    }
}

