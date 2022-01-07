<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    function index()
    {
        return view('dashboard.index');
    }
    
}
