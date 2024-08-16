<?php

namespace Controllers;

use Bases\Controller;
use Models\user;

class UserController extends Controller
{

    /**
     * function that show the connexion page for admin
     *
     * @return void
     */
    public function index()
    {
        $this->vue("user/index");
    }


    /**
     * function that verify if the email and password exist in the database
     * and verify if the role is manager or user then 
     * redirect to is respective page
     *
     * @return void
     */
    public function connect()
    {
        if (empty($_POST["courriel"]) || empty($_POST["mdp"])) {
            $this->rediriger("admin-connection?empty_field");
        }

        $user = (new user)->parCourriel($_POST["courriel"]);
        
        
        if (!$user || !password_verify($_POST["mdp"], $user->password)) {
           
            $this->rediriger("admin-connection?info_incorrect");
        }
       
        if($user->role_id == 1)
        {
            
            $_SESSION["manager_id"] = $user->role_id;
            $this->rediriger("index-manager?succes_connection");
        }
        else if($user->role_id == 2)
        {
            
            $_SESSION["user_id"] = $user->role_id;
            $this->rediriger("index-user?succes_connection");
        }

        
    }
    /**
     * function that destroy the session_id
     * then redirect 
     *
     * @return void
     */
    public function logOut()
    {
        session_destroy();
        $this->rediriger("admin-connection?succes_logOut");
    }

}