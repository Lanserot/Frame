<?php

spl_autoload_register(function ($name) {

    if (file_exists($name . '.php')) {
        require $name . '.php';
    }
    if (file_exists('Controllers\\' . $name . '.php')) {
        require 'Controllers\\' . $name . '.php';
    }

});
