<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // calling view
        return view('team', [
            'title' => 'team',
            'authors' => User::all()
        ]);
    }
}
