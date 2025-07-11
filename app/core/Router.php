<?php

namespace App\Core;

class Router
{
    public static function resolve()
    {
        global $routes;

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (array_key_exists($uri, $routes)) {
            $route = $routes[$uri];
            $controller = $route['controller'];
            $action = $route['action'];

            // var_dump($_SESSION);
            // exit;

            // Middleware
            // if (!empty($route['middlewares'])) {
            //     $middlewares = $routes['middlewares'];
            //     foreach ($middlewares as $middleware) {
            //         $handler = AbstractMiddleware::
            //     }
            //     Middleware::handle($route['middlewares']);
            // }

            if (class_exists($controller) && method_exists($controller, $action)) {
                $controllerInstance = new $controller();
                $controllerInstance->$action();
            } else {
                header('Location: /error/500');
            }
        } else {
            header('Location: /error/404');
        }
    }
}
