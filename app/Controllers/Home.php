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
public function logros() { return view('logros'); }
public function ranking() { return view('ranking'); }
public function preguntas() { return view('preguntas'); }
public function curso() { return view('curso'); }
public function configuracion() { return view('configuracion'); }

}
