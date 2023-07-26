<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'about',
            'name' => 'umam asfiyaul',
            'email' => 'nurasfiyaulumam@gmail.com',
            'image' => 'umam.jpeg'
        ]);
    }
}
