<?php

require_once '../app/core/init.php';
require_once '../app/core/routes.php';
$env = parse_ini_file('../.exampleenv');
require '../app/core/config.php';

use app\core\Router;
use app\controllers\AppointmentsController;
use app\controllers\ReviewsController;

require_once __DIR__ . '/helpers.php';

//to add a new route add to the app/core/routes.php array
$router = new Router($routes);
$router->serveRoute();
?>

