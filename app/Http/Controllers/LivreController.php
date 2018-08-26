<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * @author Franck
     * cette fonction affiche le contenu de la vue livre.blade.php
     */
    public function index()
    {
        return view('livre');
    }
}
