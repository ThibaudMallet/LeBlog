<?php

namespace App\Models;

use App\Utils\Database;
use PDO;

// Classe mère de tous les Models
// On centralise ici toutes les propriétés et méthodes utiles pour TOUS les Models
class Category extends CoreModel
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
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $color;

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param  string  $color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Category');

        return $results;
    }

    public static function findAllForHomePage()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category` LIMIT 3';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\Models\Category');

        return $results;
    }

    public static function find($categoryId)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category` WHERE `id` =' . $categoryId;
        $pdoStatement = $pdo->query($sql);
        $category = $pdoStatement->fetchObject('App\Models\Category');

        return $category;
    }
    public function insert()
    {
        $pdo = Database::getPDO();
        $sql = "
            INSERT INTO `category` (name, color)
            VALUES (:name, :color)
        ";
        $sth = $pdo->prepare($sql);

        $sth->bindValue('name', $this->name, PDO::PARAM_STR);
        $sth->bindValue('color', $this->color, PDO::PARAM_STR);

        $success = $sth->execute();

        if ($success && $sth->rowCount()) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }
    public function update($id)
    {
        $pdo = Database::getPDO();
        $sql = "
            UPDATE `category`
            SET 
            `name`= :name,
            `color`= :color
            WHERE id = $id
        ";
        $sth = $pdo->prepare($sql);

        $sth->bindValue('name', $this->name, PDO::PARAM_STR);
        $sth->bindValue('color', $this->color, PDO::PARAM_STR);

        $success = $sth->execute();

        if ($success && $sth->rowCount()) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }

    public function delete($id)
    {
        $pdo = Database::getPDO();
        $sql = "DELETE FROM `category` WHERE `id`=:id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}