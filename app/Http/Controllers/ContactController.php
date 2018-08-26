<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @author Franck
     * cette fonction affiche le contenu de la vue contact.blade.php
     */
    public function index()
    {
        return view('contact');
    }
}
