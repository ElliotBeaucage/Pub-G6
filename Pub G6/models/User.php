<?php

namespace Models;

use Bases\Model;

class user extends Model
{
    protected $table = "users";

    /**
     * retourne un user selon un courriel
     *
     * @param string $courriel
     * @return object|false
     */
    public function parCourriel(string $email)
    {
        // Créer la requête
        $sql = "SELECT * 
                FROM $this->table
                WHERE email = :email";

        // Préparer la requête
        $requete = $this->pdo()->prepare($sql);

        // Exécuter la requête (associer valeur à placeholder)
        $requete->execute([
            ":email" => $email
        ]);

        return $requete->fetch();
    }

    /**
     * insere un new user
     *
     * @param string $prenom
     * @param string $nom
     * @param string $courriel
     * @param string $mdp
     * 
     * @return bool
     */
    public function inserer(string $nom, string $prenom, string $courriel, string $mdp)
    {
        $sql = "INSERT INTO $this->table 
                (nom, prenom, mdp, courriel)
                        VALUES (:prenom, :nom, :mdp, :courriel)";


        $requete = $this->pdo()->prepare($sql);

        //bind param sauf pour where ou insert into
        return $requete->execute([
            ":nom" => $nom,
            ":prenom" => $prenom,
            ":mdp" => $mdp,
            ":courriel" => $courriel,

        ]);
    }
    /**
     * get all user where role_id = 2
     *
     * @return void
     */
    public function list()
    {
        $sql = "SELECT *
        FROM $this->table
        WHERE role_id = 2";

        
        $requete = $this->pdo()->prepare($sql);

        $requete->execute();
        
        return $requete->fetchAll();
        
    }
    /**
     * drop/erase user
     *
     * @param int $id
     * @return void
     */
    public function dropUser($id)
    {
        $sql = "DELETE 
        FROM $this->table 
        WHERE id = :id ";

       $requete = $this->pdo()->prepare($sql);

       return $requete->execute([
           ":id" => $id
       ]);
    }
    /**
     * insert a new user
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $mdp
     * @param string $email
     * @return void
     */
    public function store($lastname, $firstname, $mdp ,$email)
    {
        $sql ="INSERT INTO $this->table
                (lastname, firstname, password, email, role_id)
                VALUES (:lastname, :firstname, :mdp, :email, :role)";

            $requete = $this->pdo()->prepare($sql);

            
            return $requete->execute([
                ":lastname" => $lastname,
                ":firstname" => $firstname,
                ":mdp" => $mdp,
                ":email" => $email,
                ":role" => 2

            ]);  
    }

    /**
     * update a user
     *
     * @param int $id
     * @param string $lastname
     * @param string $firstname
     * @param string $email
     * @return void
     */
    public function edit($id, $lastname, $firstname, $email)
    {
        $sql = "UPDATE $this->table
                SET lastname = :lastname, firstname = :firstname, email = :email
                WHERE id = :id";

                $requete = $this->pdo()->prepare($sql);
                
                return $requete->execute([
                    ":id" => $id,
                    ":lastname" => $lastname,
                    ":firstname" => $firstname,
                    ":email" => $email,
                ]); 

    }
    /**
     * get one user
     *
     * @param int $id
     * @return void
     */
    public function getOneUser($id)
    {
        $sql = "SELECT *
        FROM $this->table
        WHERE id = :id";
        
        $requete = $this->pdo()->prepare($sql);

        $requete->execute([
            ":id" => $id,
        ]);
        return $requete->fetch();
    }
}
