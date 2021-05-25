<?php

use Core\Route\RouteWayController;


$route = new RouteWayController();


/**
 * Начинать с функции Way
 */

$route->route('/')->method('GET')->controller('MainController@index');
$route->route('/test')->controller('MainController@index');
$route->route('/show')->method('GET')->controller('ShowTextController@index');


return $route->routes;
