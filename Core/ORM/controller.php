<?php
namespace Core\ORM;

require 'interface.php';

class controller implements \mustFunk
{
    static public function create($name)
    {
        if(file_exists('public/Controllers/'.$name.'.php')){
            echo 'Контроллер с этим именем уже существует';
            return;
        }

        file_put_contents('public/Controllers/' . $name . '.php', '<?php
namespace public\Controllers;

use Core\Controller\Controller;

class '.$name.' extends Controller
{
    public function index()
    {
        //Тело метода
    }

}');
    }

    static public function delete($name){
        unlink('public/Controllers/' . $name . '.php');
    }
}