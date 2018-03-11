<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function mentions()
    {
        return view('mentions');
    }

    public function cgv()
    {
        return view('cgv');
    }

    public function donnees()
    {
        return view('donnees');
    }
}
