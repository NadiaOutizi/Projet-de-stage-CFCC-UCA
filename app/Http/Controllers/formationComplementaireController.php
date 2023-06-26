<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formationComplementaireController extends Controller
{
    public function index(){
        return view('formationComplementaire.index');
    }
}
