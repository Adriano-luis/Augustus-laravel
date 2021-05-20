<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecaInformacoesController extends Controller
{
    public function index(){
        return view('forneca-informacoes');
    }
}
