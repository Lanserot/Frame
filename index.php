<?php
$timeStart = microtime(true);

require 'functions.php';

use Core\Route\Route;

$route = new Route();

$route->route();

$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;
absolute($time);