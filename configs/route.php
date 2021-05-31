<?php

use Core\Route\RouteWayController;


$route = new RouteWayController();


/**
 * Начинать с функции Way
 */

$route->route('/')->method('GET')->controller('MainController@index')->name('main');
//$route->route('/test')->controller('MainController@index');
$route->route('/show')->method('POST')->controller('ShowTextController@index');
$route->route('/show')->method('GET')->controller('ShowTextController@index')->name('show');


return $route->routes;
