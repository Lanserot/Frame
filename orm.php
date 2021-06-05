<?php

require __DIR__ . '/autoload.php';


if (!isset($argv[1])) {
    exit('Нет аргументов');
}

$params = explode(':', $argv[1]);

$class = '\Core\ORM\\' . $params[0];
$function = $params[1];

if(!class_exists($class)){
    exit('Не знаю с каким классом работать');
}
if(!method_exists($class, $function)){
    exit('Не знаю с каким методом работать');
}


$class::$function($argv[2]);

