<?php

require 'core/config.php';

//Controlador
if (!empty($_GET['c']))
    $controller = $_GET['c'];
else
    $controller = DEFAULT_CONTROLLER;

//Accion
if (!empty($_GET['a']))
    $accion = $_GET['a'];
else
    $accion = DEFAULT_ACTION;

$controller = CONTROLLER_PATH . $controller . 'Controller.php';

if (is_file($controller))
    require_once $controller;
else
    die('El controlador <b>' . $controller . '</b> no existe - 404 not found');

if (is_callable($accion))
    $accion(4);
else
    die('La accion <b>' . $accion . '</b> no existe - 404 not found');