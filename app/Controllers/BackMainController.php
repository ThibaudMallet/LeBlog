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

    public function addCategory()
    {
        $this->show('back/addCategory');
    }
    public function insertCategory()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

        // Verify data integrity
        $errors = [];

        // The name have to be filled
        if ($name === false || empty($name)) {
            $errors[] = "Le nom est vide";
        }
        if ($color === false) {
            $errors[] = "La couleur n'est pas valide'";
        }

        if (count($errors) === 0) {
            $category = new Category();
            $category->setName($name);
            $category->setColor($color);
            $success = $category->insert();

            if ($success) {
                header('Location: /back/categories');
            }
        }
        $this->show('back/addCategory', [
        "errors" => $errors
    ]);
    }

    public function modify($params)
    {
        $categoryToModify = Category::find($params);
        $viewData = [
            'category' => $categoryToModify
        ];

        $this->show('back/addCategory', $viewData);
    }

    public function update($params)
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);

        // Verify data integrity
        $errors = [];

        // The name have to be filled
        if ($name === false || empty($name)) {
            $errors[] = "Le nom est vide";
        }
        if ($color === false) {
            $errors[] = "La couleur n'est pas valide'";
        }

        if (count($errors) === 0) {
            $category = new Category();
            $category->setName($name);
            $category->setColor($color);
            $success = $category->update($params);

            if ($success) {
                header('Location: /back/categories');
            }
        }
        $this->show('back/addCategory', [
        "errors" => $errors
    ]); 
    }

    public function delete($params)
    {
        $category = new Category();
        $category->delete($params);

        header('Location: /back/categories');

    }
}
