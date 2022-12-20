<?php

namespace App\Controllers;

class LogoutController
{
    public static function get()
    {
        $_SESSION['user'] = null;
        header("Location: /auth/login");
    }
}