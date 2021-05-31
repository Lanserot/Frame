<?php
$timeStart = microtime(true);

require 'functions.php';

use Core\Route\RouteMain;
use Core\Route\Route;

$route = new RouteMain();

$route->route();

$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;
absolute($time);