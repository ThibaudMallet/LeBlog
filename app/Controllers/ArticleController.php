<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class ArticleController extends CoreController
{
    /**
     * Méthode s'occupant de la page article
     *
     * @return void
     */
    public function article()
    {
        $posts = Post::findAll();
        $categories = Category::findAll();

        $viewData = [
            "posts" => $posts,
            "categories" => $categories
        ];

        $this->show('front/article', $viewData);
    }
}