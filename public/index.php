<?php

use Framework\Core\Route;
use Framework\Core\Router;


require_once '../private/vendor/autoload.php';


/**
 * Error and Exception handling
 */
//error_reporting(E_ALL);
//set_error_handler('Framework\Error::errorHandler');
//set_exception_handler('Framework\Error::exceptionHandler');

$router = new Router();

// Add the routes
$router->add(["Admin", "user"]);
//echo $_SERVER['QUERY_STRING']."<br>";
$router->dispatch($_SERVER['QUERY_STRING']);
