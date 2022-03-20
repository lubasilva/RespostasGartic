<?php

namespace App\Http\Controllers;

use App\Models\Desenho;
use Illuminate\Http\Request;

class DesenhoController extends Controller
{
    public function index()
    {
        $desenhos = Desenho::all();

        return view('desenho.index', compact('desenhos'));
    }
}
