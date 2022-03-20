<?php

namespace App\Http\Controllers;

use App\Models\Verbo;
use Illuminate\Http\Request;

class VerboController extends Controller
{
    public function index()
    {
        $verbos = Verbo::all();

        return view('verbo.index', compact('verbos'));
    }
}
