<?php

require_once '../vendor/autoload.php';

/* -------------
--- ROUTER ---
--------------*/

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else { // sinon
    $_SERVER['BASE_URI'] = '/';
}

// $router->map(
//     'GET',
//     '/',
//     [
//         'method' => 'home',
//         'controller' => '\App\Controllers\MainController' // On indique le FQCN de la classe
//     ],
//     'main-home'
// );




/* -------------
--- DISPATCH ---
--------------*/


$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
$dispatcher->dispatch();
