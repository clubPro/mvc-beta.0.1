<?php

use App\Models\User;
use App\Models\users;
use Framework\Bootstrap;
use Framework\Core\Route;
use Framework\Core\Router;
use Framework\Security\ClinetInfo;


require_once '../private/vendor/autoload.php';
/**
 * Error and Exception handling
 */
/*error_reporting(E_ALL);
set_error_handler('Framework\Error::errorHandler');
set_exception_handler('Framework\Error::exceptionHandler');
$loader = new Twig_Loader_Filesystem('../private/App/Views');

$router = new Router();

// Add  folder
$router->add(["Admin", "user"]);

$router->dispatch($_SERVER['QUERY_STRING']);
*/

echo "<pre>";
var_dump(new ClinetInfo());
echo "</pre>";
