<?php

namespace Models;

use Bases\Model;

class dishes_subcategories extends Model
{
    protected $table = "dishes_subcategories";

    /**
     * erase/drop subcategory 
     *
     * @param int $id
     * @return void
     */
    public function dropSub($id)
    {
        $sql="DELETE 
        FROM $this->table 
        WHERE dish_id = :id";
        
       $requete = $this->pdo()->prepare($sql);

       return $requete->execute([
           ":id" => $id
       ]);
    }
    /**
     * get all sub where dishes_id
     *
     * @param int $dishes_id
     * @return void
     */
    public function getSubFromId($dishes_id)
    {
        $sql="SELECT subcategory_id
        FROM $this->table
        WHERE dish_id = :dishes_id";

        $requete = $this->pdo()->prepare($sql);

         $requete->execute([
            ":dishes_id" => $dishes_id
        ]);

        return $requete->fetchAll();
    }
    /**
     * its a insert a new sub to a dish but i used it to update the subcategory to avoid a conflict
     *
     * @param int $id
     * @param int $sub
     * @return void
     */
    public function update($id,$sub)
    {
        $sql = "INSERT $this->table
        (dish_id, subcategory_id)
        VALUES (:dish_id, :sub)";

        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":dish_id" => $id,
            ":sub" => $sub,
            
        ]); 
    }


   
}