<?php

namespace App\Http\Controllers;

class NoticiasController extends Controller
{
    public function index()
    {
        // Retorna la vista de noticias
        return view('index'); // Asegúrate de que esta vista exista
    }
}