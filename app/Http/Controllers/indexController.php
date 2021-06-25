<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function user()
    {
        return view('user');
    }
}
