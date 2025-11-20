<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Inicio');
    }

public function retos() { return view('retos'); }
public function recompensas() { return view('recompensas'); }
public function progreso() { return view('progreso'); }
public function actividades() { return view('actividades'); }
public function perfil() { return view('perfil'); }
}
