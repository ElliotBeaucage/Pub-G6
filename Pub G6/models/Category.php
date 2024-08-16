<?php

namespace Models;

use Bases\Model;

class category extends Model
{
    protected $table = "categories";

    /**
     * insert a gategory/section
     *
     * @param string $name
     * @return void
     */
    public function storeSection($name)
    {
        $sql ="INSERT INTO $this->table
                (name)
                VALUES (:name)";
                            
                            
        $requete = $this->pdo()->prepare($sql);

        return $requete->execute([
            ":name" => $name,
            
        ]);  
    }
    /**
     * get all category
     *
     * @return void
     */
    public function getAllcategory()
{
    $sql = "SELECT * 
            FROM $this->table";

    $requete = $this->pdo()->prepare($sql);
    $requete->execute();
    return $requete->fetchAll();
}
/**
 * get entree 
 *
 * @return void
 */
public function getSectionEntree()
{
    $sql = "SELECT * 
            FROM $this->table
            WHERE id = 1";

    $requete = $this->pdo()->prepare($sql);
    $requete->execute();
    return $requete->fetch();
}
/**
 * get repas 
 *
 * @return void
 */
public function getSectionRepas()
{
    $sql = "SELECT * 
            FROM $this->table
            WHERE id = 2";

    $requete = $this->pdo()->prepare($sql);
    $requete->execute();
    return $requete->fetch();
}
/**
 * get dessert 
 *
 * @return void
 */
public function getSectionDesert()
{
    $sql = "SELECT * 
            FROM $this->table
            WHERE id = 3";

    $requete = $this->pdo()->prepare($sql);
    $requete->execute();
    return $requete->fetch();
}
/**
 * erase/drop category 
 *
 * @param int $id
 * @return void
 */
public function dropSection($id)
{
    $sql="DELETE
    FROM $this->table
    WHERE id = :id";

    $requete = $this->pdo()->prepare($sql);

    return $requete->execute([
        ":id" => $id
    ]);
}
/**
 * update/modify category
 *
 * @param int $id
 * @param string $name
 * @return void
 */
public function updateSection($id, $name)
{
    $sql = "UPDATE $this->table
        SET name = :name
        WHERE id = :id";

        $requete = $this->pdo()->prepare($sql);
        
        return $requete->execute([
            ":id" => $id,
            ":name" => $name,
           
        ]); 
}
/**
 * get all category
 *
 * @param int $id
 * @return void
 */
public function getCategory($id)
{
    $sql = "SELECT * 
            FROM $this->table
            WHERE id = :id";

    $requete = $this->pdo()->prepare($sql);
    $requete->execute([
        ":id" => $id
    ]);
    return $requete->fetch();
}
    

}
