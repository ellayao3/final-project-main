<?php

namespace app\core;

use app\controllers\MainController;

class Router
{
    public $routeList;

    public function __construct($routes)
    {
        $this->routeList = $routes;
    }

    public function serveRoute() {
        $uriParse = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $method =  $_SERVER['REQUEST_METHOD'];

        if (!empty($uriParse[0])) {
            if (array_key_exists($uriParse[0], $this->routeList)) {
                $route = $this->routeList[$uriParse[0]];
                $controller = $route['controller'];
                $action = $route[$method];
                $controller = new $controller();
                $controller->$action();
            } else {
                $homepageController = new MainController();
                $homepageController->notFound();
            }
        } else {
            $homepageController = new MainController();
            $homepageController->homepage();
        }
    }
}
?>
