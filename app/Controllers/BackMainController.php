<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class BackMainController extends BackCoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
        $posts = Post::findAllForHomePage();
        $categories = Category::findAllForHomePage();

        $viewData = [
            "posts" => $posts,
            "categories" => $categories
        ];

        $this->show('back/home', $viewData);
    }

    public function article()
    {
        $posts = Post::findAll();

        $viewData = [
            "posts" => $posts
        ];

        $this->show('back/article', $viewData);
    }

    public function category()
    {
        $categories = Category::findAll();

        $viewData = [
            "categories" => $categories
        ];

        $this->show('back/category', $viewData);
    }
}
