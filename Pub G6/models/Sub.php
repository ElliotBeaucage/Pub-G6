<?php

namespace Models;

use Bases\Model;

class sub extends Model
{
    
    protected $table = "subcategories";

    /**
     * get all sub
     *
     * @return void
     */
    public function getAllSub()
    {
        $sql="SELECT *
        FROM $this->table";

        $requete = $this->pdo()->prepare($sql);

         $requete->execute();

         return $requete->fetchAll();


        }
}