<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Category;

class CategoryController extends FrontCoreController
{
    /**
     * Méthode s'occupant des pages categories
     *
     * @return void
     */
    public function category($params)
    {
        $posts = Post::findAllByCategory($params);
        $categories = Category::findAll();
        $currentCategory = Category::find($params);

        $viewData = [
            "posts" => $posts,
            "categories" => $categories,
            "currentCategory" => $currentCategory
        ];

        $this->show('front/category', $viewData);
    }
}