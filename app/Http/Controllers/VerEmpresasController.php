<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerEmpresasController extends Controller
{
    public function index(){
        return view('ver-empresas');
    }
}
