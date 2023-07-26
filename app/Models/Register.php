<?php
namespace App\Models;

use Illuminate\Validation\Rules\Password;

class Register
{
    public static function validateStore()
    {
        return [
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => [ 'required'] //Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
        ];
    }
}