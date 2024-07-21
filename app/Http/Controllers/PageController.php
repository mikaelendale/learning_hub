<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function daniel()
    {
        return view('certificates.daniel');
    }
    public function maedot()
    {
        return view('certificates.maedot');
    }
    
}
