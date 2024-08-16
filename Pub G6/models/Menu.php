<?php

namespace Models;

use Bases\Model;

class menu extends Model
{
    protected $table = "dishes";


    /**
     * get all dish with category and subcategory
     *
     * @return void
     */
    public function getDish()
    {
        $sql= "SELECT dishes.id,dishes.name,dishes.description,dishes.price,categories.name as category_name, category_id,
        group_concat(subcategories.name SEPARATOR ',') subcategories
        FROM $this->table
        JOIN dishes_subcategories ON dish_id = dishes.id
        JOIN categories on category_id = categories.id
        JOIN subcategories on subcategory_id = subcategories.id
        GROUP BY dishes.id";

        $requete = $this->pdo()->prepare($sql);

        $requete->execute();
        return $requete->fetchAll();
    }

    /**
     * insert a new dish
     *
     * @param string $name
     * @param string $description
     * @param int $price
     * @param int $category
     * @return void
     */
    public function addDish($name, $description, $price, $category)
    {
        $sql="INSERT INTO $this->table
         (`name`, `description`, `price`, `category_id`)
          VALUES (:name, :description, :price, :category)";

          $requete = $this->pdo()->prepare($sql);
          
          
         
         return $requete->execute([
            ":name" => $name,
            ":description" => $description,
            ":price" => $price,
            ":category" => $category,
          ]);

          

          
          
    }
    /**
     * get the last insert id 
     *
     * @return void
     */
    public function lastInsertId()
    {
        return $this->pdo()->lastInsertId();
    }

    /**
     * insert a sub into dish
     *
     * @param int $dish_id
     * @param int $sub
     * @return void
     */
    public function addSub($dish_id,$sub)
    {
       
        
        $sql ="INSERT INTO `dishes_subcategories`
        (`dish_id`, `subcategory_id`) 
        VALUES (:dish_id, :sub)";

        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":last_id" => $dish_id,
            ":sub" => $sub,
            
          ]);
    }
    /**
     * drop/erase a dish
     *
     * @param int $id
     * @return void
     */
    public function dropDish($id)
    {
        $sql="DELETE 
        FROM $this->table 
        WHERE dishes.id = :id";
        
       $requete = $this->pdo()->prepare($sql);

       return $requete->execute([
           ":id" => $id
       ]);
    }
    /**
     * Undocumented function
     *
     * @param int $id
     * @param string $name
     * @param string $description
     * @param int $price
     * @param int $category_id
     * @return void
     */
    public function update($id, $name, $description, $price, $category_id)
    {
        $sql = "UPDATE $this->table
        SET id = :id, name = :name, description = :description, price = :price, category_id = :category_id
        WHERE dishes.id = :id";

        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":id" => $id,
            ":name" => $name,
            ":description" => $description,
            ":price" => $price,
            ":category_id" =>$category_id
        ]); 
    }
    /**
     * get 1 dish with category and subcategory
     *
     * @param int $id
     * @return void
     */
    public function getOneDish($id)
    {
        $sql = "SELECT dishes.id, dishes.name, dishes.description, dishes.price, categories.name as category_name, subcategories.name as sub_name,categories.id as category_id
        FROM dishes 
        JOIN dishes_subcategories ON dish_id = dishes.id 
        JOIN categories on category_id = categories.id 
        JOIN subcategories on subcategory_id = subcategories.id 
        WHERE dishes.id = :id";
        
        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":id" => $id,
        ]);
        return $requete->fetch();
    }
    



   

}