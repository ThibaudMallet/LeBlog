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

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController'
    ],
    'main-home'
);

$router->map(
    'GET',
    '/articles',
    [
        'method' => 'article',
        'controller' => '\App\Controllers\ArticleController'
    ],
    'main-article'
);

$router->map(
    'GET',
    '/categorie/[i:id]',
    [
        'method' => 'category',
        'controller' => '\App\Controllers\CategoryController'
    ],
    'main-category'
);

$router->map(
    'GET',
    '/back',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-home'
);

$router->map(
    'GET',
    '/back/articles',
    [
        'method' => 'article',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-article'
);

$router->map(
    'GET',
    '/back/categories',
    [
        'method' => 'category',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-category'
);




/* -------------
--- DISPATCH ---
--------------*/


$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
$dispatcher->dispatch();
