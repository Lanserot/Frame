<style>
    .err-hand{
        background: #000; color: white; padding: 15px;
    }
</style>
<?php
$timeStart = microtime(true);

require 'functions.php';

use Core\Route\RouteMain;

$route = new RouteMain();

$route->route();

$timeEnd = microtime(true);
$time = $timeEnd - $timeStart;
absolute($time);

