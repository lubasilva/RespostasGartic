<?php

namespace App\Http\Controllers;

use App\Models\Adjetivo;
use Illuminate\Http\Request;

class AdjetivoController extends Controller
{
    public function index()
    {
        $adjetivos = Adjetivo::all();

        return view('adjetivo.index', compact('adjetivos'));
    }
}
