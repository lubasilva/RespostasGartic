<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use Illuminate\Http\Request;

class ObjetoController extends Controller
{
    public function index()
    {
        $objetos = Objeto::all();

        return view('objeto.index', compact('objetos'));
    }
}
