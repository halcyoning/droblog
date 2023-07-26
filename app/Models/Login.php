<?php
namespace App\Models;

class Login
{
    public static function validateAuthenticate()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
}