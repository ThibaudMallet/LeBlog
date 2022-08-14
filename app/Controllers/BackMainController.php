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

    public function modifyCategory($params)
    {
        $categoryToModify = Category::find($params);
        $viewData = [
            'category' => $categoryToModify
        ];

        $this->show('back/addCategory', $viewData);
    }

    public function updateCategory($params)
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

    public function deleteCategory($params)
    {
        $category = new Category();
        $category->delete($params);

        header('Location: /back/categories');

    }

    public function addArticle()
    {
        $this->show('back/addArticle');
    }
    public function insertArticle()
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $resume = filter_input(INPUT_POST, 'resume', FILTER_SANITIZE_STRING);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
        $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);
        $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

        // Verify data integrity
        $errors = [];

        // The name have to be filled
        if ($title === false || empty($title)) {
            $errors[] = "Le nom est vide";
        }
        if ($resume === false) {
            $errors[] = "Le résumé n'est pas valide";
        }
        if ($content === false) {
            $errors[] = "Le contenu n'est pas valide";
        }
        if ($author === false) {
            $errors[] = "L'auteur' n'est pas valide";
        }
        if ($category_id === false) {
            $errors[] = "L'id de la catégorie n'est pas valide";
        }

        if (count($errors) === 0) {
            $post = new Post();
            $post->setTitle($title);
            $post->setResume($resume);
            $post->setContent($content);
            $post->setAuthor($author);
            $post->setCategory_id($category_id);
            $success = $post->insert();

            if ($success) {
                header('Location: /back/posts');
            }
        }
        $this->show('back/addArticle', [
        "errors" => $errors
    ]);
    }
}
