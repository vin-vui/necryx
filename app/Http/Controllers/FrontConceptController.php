<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontConceptController extends Controller
{
    public function index()
    {
        return view ('concepts');
    }
}
