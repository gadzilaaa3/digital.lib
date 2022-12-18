<?php

namespace App\Controllers;

use App\Facades\Auth;

class LoginController
{
    public static function post()
    {
        $formData = [
            'login' => $_POST['email'],
            'password' => $_POST['password']
        ];
        $validatedData = validate($formData);
        if(Auth::attempt($validatedData)) {
            header("Location: /user/dashboard");
        } else {
            $_SESSION['authFailed'] = true;
            header("Location: /auth/login");
        }
    }
}