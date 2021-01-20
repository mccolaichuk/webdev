<?php

include '../app/controllers/HomeController.php';


$url = $_SERVER['REQUEST_URI'];
$trimmed = trim($url, '/');
$url = explode('/', $trimmed);

if ($url[0] != '') {
    if ($url[0] == "feed") {
        $url[0] = "home";
    }
    $className = $url[0] . 'Controller';
    if (class_exists($className)) {
        $controller = new $className;
    } else {
        die('controller not found');
    }
    if (isset($url[1]) == '') {
        $url[1] = "default";
    }
    if (isset($url[0]) && $url[1] != '') {
        $methodName = $url[1];
        if (method_exists($controller, $methodName)) {
            $controller->$methodName();
        } else {
            die('method not found');
        }
    }
} else {
    $controller = new HomeController;
    $controller->default();
}