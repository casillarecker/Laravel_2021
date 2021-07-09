<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Para mostrar una pagina principal 
    public function index()
    {
        return "Bienvenido a la pagina principal 'Esto va entorno de otro controlador'";
    }

    //Un formulario de cursos, como crear cursos o que quieras crear
    public function create()
    {

        return "En esta pagina podras crear un curso";
    }

    //Para mostrar un curso en particular
    public function show($curso)
    {
        return "Bienvenido al curso $curso";
    }
}
