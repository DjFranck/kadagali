<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * @author Franck
     * cette fonction affiche le contenu de la vue nosServices.blade.php
     */
    public function index()
    {
        return view('nosServices');
    }
}
