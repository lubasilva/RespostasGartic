<?php

namespace App\Http\Controllers;

use App\Models\Profissao;
use Illuminate\Http\Request;

class ProfissaoController extends Controller
{
    public function index()
    {
        $profissoes = Profissao::all();

        return view('profissao.index', compact('profissoes'));
    }
}
