<?php

if (!isset($argv[1])) {
    exit('Нет аргументов');
}

$params = explode(':', $argv[1]);

var_dump($params);

$class = $params[0];
$function = $params[1];

if(!class_exists($class)){
    exit('Не знаю с каким классом работать');
}
if(!method_exists($class, $function)){
    exit('Не знаю с каким методом работать');
}


class controller
{
    static public function create($name)
    {
        if(file_exists('Controllers/'.$name.'.php')){
            echo 'Данный класс уже существует';
            return;
        }

        file_put_contents('Controllers/' . $name . '.php', '<?php
namespace Controllers;

use Core\Controller\Controller;

class '.$name.' extends Controller
{
    public function index()
    {
        //Тело функции
    }

}');
    }
}

$class::$function($argv[2]);

