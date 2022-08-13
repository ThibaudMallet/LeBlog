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

// MAPPING FRONT 

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

// MAPPING BACK

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

// Gestion de l'ajout, de la supression et de la modification d'une catégorie

$router->map(
    'GET',
    '/back/category/add',
    [
        'method' => 'addCategory',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-categoryAdd'
);

$router->map(
    'POST',
    '/back/category/add',
    [
        'method' => 'insertCategory',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-categoryInsert'
);

$router->map(
    'GET',
    '/back/category/add/[i:id]',
    [
        'method' => 'modify',
        'controller' => '\App\Controllers\BackMainController' // On indique le FQCN de la classe
    ],
    'back-categoryModify'
);

$router->map(
    'POST',
    '/back/category/add/[i:id]',
    [
        'method' => 'update',
        'controller' => '\App\Controllers\BackMainController' // On indique le FQCN de la classe
    ],
    'back-categoryUpdate'
);

$router->map(
    'GET',
    '/back/category/delete/[i:id]',
    [
        'method' => 'delete',
        'controller' => '\App\Controllers\BackMainController' // On indique le FQCN de la classe
    ],
    'back-categoryDelete'
);


// Gestion de l'ajout d'un article 

$router->map(
    'GET',
    '/back/article/add',
    [
        'method' => 'addArticle',
        'controller' => '\App\Controllers\BackMainController'
    ],
    'back-articleAdd'
);





/* -------------
--- DISPATCH ---
--------------*/


$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
$dispatcher->dispatch();
