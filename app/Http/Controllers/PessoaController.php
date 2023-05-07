<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        return view('dados_pessoais');
    }

    public function entidades(){
        return view('entidades');
    }

    public function contrato(){
        return view('contrato');
    }

    public function art_success(){
        return view('art-success');
    }
}
