<?php


namespace Controllers;
use Models\menu;
use Models\category;
use Bases\Controller;

class DefautController extends Controller {
  
    /**
     * function that show the index for client
     *
     * @return void
     */
    public function index() {
        $this->vue("index",[
            "entree"=> (new category)-> getSectionEntree(),
            "repas"=> (new category)-> getSectionRepas(),
            "dessert"=> (new category)-> getSectionDesert(),
        ]);
    }
    /**
     * function that show the menus for the client 
     *
     * @return void
     */
    public function MenusIndex() {
        $this->vue("menus/index",
    [ 
        "dishes" => (new menu) -> getDish(),
        "categories" => (new category) -> getAllCategory(),
        "entree"=> (new category)-> getSectionEntree(),
        "repas"=> (new category)-> getSectionRepas(),
        "dessert"=> (new category)-> getSectionDesert(),
      

        
    ]);
    }
    /**
     * function that show the propos page for client only
     *
     * @return void
     */
    public function Proposindex() {
        $this->vue("propos/index");
    }
}