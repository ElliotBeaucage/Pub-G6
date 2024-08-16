<?php



namespace Controllers;
use Bases\Controller;
use Models\user;
use Models\sub;
use Models\dishes_subcategories;
use Models\menu;
use Models\category;




class AdminController extends Controller {
   
    /**
     * Show the index of manager 
     * restricted to user and client = redirect to you own page
     * 
     *
     * @return void
     */
    public function index() {

        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }

        $this->vue("admin/manager/index",[
            "entree"=> (new category)-> getSectionEntree(),
        "repas"=> (new category)-> getSectionRepas(),
        "dessert"=> (new category)-> getSectionDesert(),
        ]);
        
    }

    /**
     * Show the index of user 
     * restricted to manager and client = redirect to you own page
     *
     * @return void
     */
    public function userIndex() {
        if(!empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index-manager?acces_denied");
        }
        else if (empty($_SESSION["user_id"])) {
            $this->rediriger("index");
        }
        $this->vue("admin/user/index");
    }

    /**
     * Show the admin menu of user 
     * restricted to manager and client = redirect to you own page
     *
     * @return void
     */
    public function menusUser() {

        if(!empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-manager?acces_denied");
        }
        else if (empty($_SESSION["user_id"])) {
            $this->rediriger("index");
        }
        $this->vue("admin/user/menu/menu",
    [
        "dishes" => (new menu) -> getDish(),
        "categories" => (new category) -> getAllCategory(),
        "entree"=> (new category)-> getSectionEntree(),
        "repas"=> (new category)-> getSectionRepas(),
        "dessert"=> (new category)-> getSectionDesert(),

        
    ]);
    }

    /**
     * Show the admin menu of manager 
     * restricted to user and client = redirect to you own page
     *
     * @return void
     */
    public function menuManager() {

        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("menus-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }

        $this->vue("admin/manager/menu/menu",
    [
        "dishes" => (new menu) -> getDish(),
        "categories" => (new category) -> getAllCategory(),
        "entree"=> (new category)-> getSectionEntree(),
        "repas"=> (new category)-> getSectionRepas(),
        "dessert"=> (new category)-> getSectionDesert(),
    
        ]);

    }

    /**
     * Show the propos page of user 
     * restricted to manager and client = redirect to you own page
     *
     * @return void
     */
    public function proposUser() {

        if(!empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("propos-manager?acces_denied");
        }
        else if (empty($_SESSION["user_id"])) {
            $this->rediriger("index");
        }
        $this->vue("admin/user/propos/propos");
    }

    /**
     * Show the propos page of manager 
     * restricted to user and client = redirect to you own page
     *
     * @return void
     */
    public function proposManager() {

        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("propos-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }

        $this->vue("admin/manager/propos/propos");
    }

    /**
     * Show the list of user page of manager 
     * restricted to user and client = redirect to you own page

     *
     * @return void
     */
    public function showList()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }

        $this->vue("admin/manager/account/accountList",
        [
            "lists" => (new user) ->list()
       
        ]);
    }
    /**
     * function that erase a user when call with id
     * manager only acces
     * restricted to user and client = redirect to you own page
     *
     * @return void
     */
    public function drop()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }
        $user = (new user)->getOneUser($_GET["id"]);
        
        if($user->role_id == 1)
        {
            $this->rediriger("List-manager?id_error");
        }
        

        $succes = (new user)->dropUser($_GET["id"]);

        if (!$succes) {
            $this->rediriger("List-manager?error_drop");
        }

        $this->rediriger("List-manager?succes_drop");

    }
    /**
     * show the create user page for manager
     * restricted to user and client = redirect to you own page
     *
     * @return void
     */
    public function create()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }
        $this->vue("admin/manager/account/create");

    }
    /**
     * function that store what you send of the create form
     * 
     * restricted to user and client = redirect to you own page
     * 
     *
     * @return void
     */
    public function store()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }

        if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) ||empty($_POST["mdp"])) {

            $this->rediriger("add-user?error_infos");
        }
        if ($_POST["mdp"] != $_POST["mdp_comfirm"]) {
            $this->rediriger("add-user?error_mdp");
        }
       
        
       
        $succes = (new user)->store(
            $_POST["lastname"],
            $_POST["firstname"],
            password_hash($_POST["mdp"], PASSWORD_DEFAULT),
            $_POST["email"],
           
        );
        

        if (!$succes) {
            $this->rediriger("add-user?error_creation_account");
        }

        $this->rediriger("List-manager?succes_creation_account");

    }
    /**
     * function that show an edit form of the account you wanna edit 
     * you can only edit (firstname. lastname, email)
     * restricted to user and client = redirect to you own page
     * @return void
     */
    public function edit()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }
        
       if(!$_GET["id"])
       {
        $this->rediriger("List-manager?error_id");

       }
    
        $this->vue("admin/manager/account/edit",
    [
        "user" => (new user)->getOneUser($_GET["id"])
    ]);

    }

    /**
     * function that can update (firstname, lastname, email) (cannot edit password) of an existing user in the database
     * restricted to user and client = redirect to you own page
     *
     * @return void
     */
    public function update()
    {
        if (!empty($_SESSION["user_id"]) && empty($_SESSION["manager_id"])) {
            
            $this->rediriger("index-user?acces_denied");
        }
        else if(empty($_SESSION["manager_id"]))
        {
            $this->rediriger("index");
        }
        
        if(!$_POST["id"])
        {
            $this->rediriger("edit-user?error_id");
        }

        

        $succes = (new user)->edit(
            $_POST["id"],
            $_POST["lastname"],
            $_POST["firstname"],
            $_POST["email"]
        );


        if (!$succes) {
            $this->rediriger("edit-user?id=". $_POST["id"] ."error_edit");
        }

        $this->rediriger("List-manager?succes_edit");

    }

    /**
     * function that show a form to create a new section/category
     * restricted to client
     *
     * @return void
     */
    public function createSection()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        $this->vue("admin/manager/menu/section/create");

    }
    /**
     * function that insert what you send in the form from createsection in the data base 
     *  restricted to client
     * @return void
     */
    public function storeSection()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }

        if(empty($_POST["name"]))
        {
            $this->rediriger("add-section?info_require");
        }

        $succes = (new category)->storeSection(
            $_POST["name"],
           
        );
        

        if (!$succes) {
            $this->rediriger("add-section?error_creating");
        }
        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes");
        }

        $this->rediriger("menus-manager?succes");

    }
    /**
     * function that show a form to create a new dish 
     * restrited to client
     *
     * @return void
     */
    public function createDish()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        $this->vue("admin/manager/menu/create",[
            "subs" => (new sub)->getAllSub(),
            "categories" => (new category)->getAllcategory(),
        ]);

    }
    /**
     * function that store dishes that you send in the createDish form in the database
     * restricted to client
     *
     * @return void
     */
    public function storeDish()
    {
       
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }

        if(empty($_POST["name"]) || empty($_POST["description"])|| empty($_POST["price"]) || empty($_POST["category"]))
        {
            $this->rediriger("add-dish?info_require");
        }
       

        $succes = (new menu)->addDish(
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $_POST["category"],
        );

        $dishId = (new menu)->lastInsertId();
        
       
    
        foreach($_POST["sub"] as $sub)
        {
            $succes2 = (new menu)->addSub(
                $dishId,
                $sub
            );
         
            
        }
         
       
        
        if (!$succes && !$succes2 &&!empty($_SESSION["user_id"])) {
            $this->rediriger("add-dish?error_creating");
        }

        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes");
        }

        $this->rediriger("menus-manager?succes");
        
          
    }
    /**
     * function that erase/drop a dish from the database andd menu
     * restricted to client
     *
     * @return void
     */
    public function dropDish()
    {
        
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        

        $succes2 = (new dishes_subcategories)->dropSub($_GET["id"]);


        $succes = (new menu)->dropDish($_GET["id"]);
      
        

        if (!$succes) {
            $this->rediriger("menus-manager?error_drop");
        }
        if (!$succes2) {
            $this->rediriger("menus-manager?error_drop");
        }
        if (!$succes && !empty($_SESSION["user_id"])) {
            $this->rediriger("menus-user?error_drop");
        }
        if (!$succes2 && !empty($_SESSION["user_id"])) {
            $this->rediriger("menus-user?error_drop");
        }
        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes_drop");
        }

        $this->rediriger("menus-manager?succes_drop");

    }

    /**
     * function that show a form with the info of the dish you wanna edit
     * restricted to client
     * @return void
     */
    public function editDish()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        $this->vue("admin/manager/menu/edit",[
            "dish" => (new menu)->getOneDish($_GET["id"]),
            "subs" => (new sub)->getAllSub(),
           "subFromId" => (new dishes_subcategories)->getSubFromId($_GET["id"]),
           "categories" => (new category)->getAllcategory(),

        ]);
    }
    /**
     * function that update the dish with the change that you made 
     * restricted to client
     *
     * @return void
     */
    public function updateDIsh()
    {
        
         if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        
        if(!$_POST["id"])
        {
            $this->rediriger("menus-manager?error_id");
        }

        

        $succes = (new menu)->update(
            $_POST["id"],
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $_POST["category_id"]
        );
   
       
       
        $succes3 = (new dishes_subcategories)->dropSub($_POST["id"]);

        

        foreach($_POST["sub"] as $sub)
        {
           
            $succes2 = (new dishes_subcategories)->update(
                $_POST["id"],
                $sub
            );
         
            
        }


        if (!$succes) {
            $this->rediriger("edit-user?id=". $_POST["id"] ."error_edit");
        }

        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes_edit");
            
        }

        $this->rediriger("menus-manager?succes_edit");
    }
    /**
     * function that erase/drop category/section from the database
     * restricted to client
     *
     * @return void
     */
    public function dropSection()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }

        $succes2 = (new category)->dropSection($_GET["id"]);

        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes");
        }
        $this->rediriger("menus-manager?succes_drop");
    }
    /**
     * function that show a edit form of the section/category 
     * you wanna edit
     *
     * @return void
     */
    public function editSection()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        $this->vue("admin/manager/menu/section/edit",[

            "category" => (new category)-> getCategory($_GET["id"])
        ]);
    }
    /**
     * function that get what you edited from editsection and update it 
     * in the database
     * restricted to client
     *
     * @return void
     */
    public function updateSection()
    {
        if(empty($_SESSION["manager_id"]) && empty($_SESSION["user_id"]))
        {
            $this->rediriger("index");
        }
        
        if(!$_POST["id"])
        {
            $this->rediriger("menus-manager?error_id");
        }

        $succes = (new category)->updateSection(
            $_POST["id"],
            $_POST["name"]
         
        );
        if(!empty($_SESSION["user_id"]))
        {
            $this->rediriger("menus-user?succes");
        }

        $this->rediriger("menus-manager?succes_edit");


    }

   

}