<?php

// Require autoloader
require_once DIR . "/vendor/autoload.php";

// Helpers function
require_once DIR . '/core/helpers.php';

// Facades
require_once DIR . '/app/Facades/Auth.php';
require_once DIR . '/app/Facades/Http.php';

// Controllers
require_once DIR . '/app/Controllers/LoginController.php';

// Requests
require_once DIR . '/app/Requests/Teachers.php';