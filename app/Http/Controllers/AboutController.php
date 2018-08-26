<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * @author Franck
     * cette fonction affiche le contenu de la vue about.blade.php
     */
    public function index()
    {
        return view('about');
    }
}
