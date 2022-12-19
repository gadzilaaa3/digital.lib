<?php

require_once __DIR__ . '/router.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/core/core.php';

use App\Facades\Auth;

// Auth Routes
get('/auth/login', 'views/auth/login.php');
post('/auth/login', function(){
    \App\Controllers\LoginController::post();
});

//Public routes
//Test Routes
get('/test', 'views/test.php');
post('/test', 'views/test.php');

//Routes for authenticated users
// User Routes
get('/user/dashboard', function(){
    if(Auth::check()){
        get('/user/dashboard', 'views/user/dashboard.php');
    } else{
        header("Location: /auth/login");
    }
});

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'views/404.php');