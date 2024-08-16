<?php

/**
 * Routes disponibles dans le projet
 * 
 * Format: url => [Controller, méthode]
 */
$routes = [
    "index" => ["DefautController", "index"],
    "menus" => ["DefautController", "MenusIndex"],
    "propos" => ["DefautController", "ProposIndex"],
    "admin-connection" => ["UserController", "index"],
    "admin-connect" => ["UserController", "connect"],
    "index-manager" => ["AdminController", "index"],
    "List-manager" => ["AdminController", "showList"],
    "drop-user" => ["AdminController", "drop"],
    "add-user" => ["AdminController", "create"],
    "store-user" =>["AdminController", "store"],
    "edit-user" =>["AdminController", "edit"],
    "update-user" => ["AdminController", "update"],
    "index-user" => ["AdminController", "userIndex"],
    "menus-user" => ["AdminController", "menusUser"],
    "menus-manager" => ["AdminController", "menuManager"],
    "add-section" => ["AdminController", "createSection"],
    "store-section" => ["AdminController", "storeSection"],
    "drop-section" => ["AdminController", "dropsection"],
    "edit-section" => ["AdminController", "editsection"],
    "update-section" => ["AdminController", "updatesection"],
    "add-dish" => ["AdminController", "createDish"],
    "store-dish" => ["AdminController", "storeDish"],
    "drop-dish" =>["AdminController", "dropDish"],
    "edit-dish" =>["AdminController", "editDish"],
    "update-dish" => ["AdminController", "updateDish"],
    "propos-user"=> ["AdminController", "proposUser"],
    "propos-manager" => ["AdminController", "proposManager"],
    "log-out" => ["UserController", "logOut"],

    
];
