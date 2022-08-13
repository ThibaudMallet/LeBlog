<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

// Classe mère de tous les Models
// On centralise ici toutes les propriétés et méthodes utiles pour TOUS les Models
class Post extends CoreModel
{
    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }
    
    /**
     * title of the post
     *
     * @var string
     */
     private $title;

    /**
     * resume of the post
     *
     * @var string
     */
    private $resume;

    /**
     * content of the post
     *
     * @var string
     */
    private $content;
    
    /**
     * date when the post was published
     *
     * @var int
     */
    private $published_date;

    /**
     * author of the post
     *
     * @var string
     */
    private $author;

    /**
     * id of the category of the post
     *
     * @var int
     */
    private $category_id;
     

     /**
      * Get title of the post
      *
      * @return  string
      */ 
     public function getTitle()
     {
          return $this->title;
     }

     /**
      * Set title of the post
      *
      * @param  string  $title  title of the post
      *
      * @return  self
      */ 
     public function setTitle(string $title)
     {
          $this->title = $title;

          return $this;
     }

    /**
     * Get resume of the post
     *
     * @return  string
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set resume of the post
     *
     * @param  string  $resume  resume of the post
     *
     * @return  self
     */ 
    public function setResume(string $resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get content of the post
     *
     * @return  string
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content of the post
     *
     * @param  string  $content  content of the post
     *
     * @return  self
     */ 
    public function setContent(string $content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get date when the post was published
     *
     * @return  int
     */ 
    public function getPublished_date()
    {
        return $this->published_date;
    }

    /**
     * Set date when the post was published
     *
     * @param  int  $published_date  date when the post was published
     *
     * @return  self
     */ 
    public function setPublished_date(int $published_date)
    {
        $this->published_date = $published_date;

        return $this;
    }

    /**
     * Get author of the post
     *
     * @return  string
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set author of the post
     *
     * @param  string  $author  author of the post
     *
     * @return  self
     */ 
    public function setAuthor(string $author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get id of the category of the post
     *
     * @return  int
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set id of the category of the post
     *
     * @param  int  $category_id  id of the category of the post
     *
     * @return  self
     */ 
    public function setCategory_id(int $category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }

    public static function findAllForHomePage()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `post`
        INNER JOIN `category`
        ON post.category_id = category.id
        LIMIT 3';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Post');

        return $results;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT *, post.id as post_id FROM `post`
        INNER JOIN `category`
        ON post.category_id = category.id';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Post');

        return $results;
    }

    public static function findAllByCategory($categoryId)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT *, post.id as post_id FROM `post`
        INNER JOIN `category`
        ON post.category_id = category.id
        WHERE category.id = $categoryId";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Post');

        return $results;
    }

    public static function find($postId)
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `post` WHERE `id` = $postId";
        $pdoStatement = $pdo->query($sql);
        $post = $pdoStatement->fetchObject('App\Models\Post');

        return $post;
    }
}