<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComunityController extends Controller
{
    public function index()
    {
        return view('comunity', [
            'title' => 'Comunity'
        ]);
    }
}
