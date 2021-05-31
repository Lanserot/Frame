<?php

namespace Core\Route;

/**
 * Класс для прописывания данных о рутере
 */
class RouteWayController
{
    public $routes = [];

    private $count = '';

    public function route($way)
    {
        $this->count = count($this->routes);
        $this->routes[$this->count]['route'] = $way;

        return $this;
    }

    public function method($method)
    {
        $this->routes[$this->count]['method'] = $method;
        return $this;
    }
    public function name($name)
    {
        $this->routes[$this->count]['name'] = $name;
        return $this;
    }
    public function controller($method)
    {
        $method = explode('@', $method);
        $this->routes[$this->count]['Cont'] = $method[0];
        $this->routes[$this->count]['func'] = $method[1];
        return $this;
    }
}