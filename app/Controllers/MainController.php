<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class MainController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
        $posts = Post::findAllForHomePage();
        $categories = Category::findAll();

        $viewData = [
            "posts" => $posts,
            "categories" => $categories
        ];

        $this->show('front/home', $viewData);
    }
}
