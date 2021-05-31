<?php

namespace Core\Route;


class Route
{
    static public $routes = NULL;

    static public function route($name)
    {
        foreach (static::$routes as $route){
            if(($route['name'] ?? '') == $name){
                return $route['route'];
            }
        }
        return '/';
    }
}