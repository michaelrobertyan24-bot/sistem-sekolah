<?php
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();
//Register Routes
$router->add('GET', '/students', 'StudentController', 'function');
$router->add('GET', '/students/create', 'StudentController', 'function');
$router->add('GET', '/students/{id}', 'StudentController', 'function');


$router->run();
?>