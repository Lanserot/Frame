<?php

require $_SERVER['DOCUMENT_ROOT'] . '../core/Route/RouteWayController.php';

$route = new RouteWayController();


/**
    Начинать с функции Way
 */

$route->route('/')->method('POST')->controller('main@index');
$route->route('/test')->controller('main@index');
$route->route('/show')->method('GET')->controller('showText@index');


return $route->routes;
