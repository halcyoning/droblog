<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData =  $request->validate(Register::validateStore());
        $validateData['password'] = password_hash($validateData['password'], PASSWORD_BCRYPT);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
