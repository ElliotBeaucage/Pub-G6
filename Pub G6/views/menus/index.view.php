<?php
include("views/components/head.php");

?>
<body>
   <header class="menuheader">
    <a href="index" class="button-menu">Retour</a>
        <div class="container-logo-menu">
            <a href="index"><img class="logo-menu" src="public/img/logo.png" alt="Logo PUB" ></a>
            <h1 class="menu-tire">MENU</h1>
        </div>
        <div class="nav-container">
            <div class="nav">
            <?php foreach($categories as $categorie) : ?>
                    <?php if($categorie->id == 1) : ?>
                    <a href="#" class="entree-btn"><?=$categorie->name?></a>
                <?php endif ?>
                <?php if($categorie->id == 2) : ?>
                    <a href="#" class="repas-btn"><?=$categorie->name?></a>
                <?php endif ?>
                <?php if($categorie->id == 3) : ?>
                    <a href="#" class="desert-btn"><?=$categorie->name?></a>
                <?php endif ?>
                <?php if($categorie->id > 3) : ?>
                    <a href="#" class="autrebtn"><?=$categorie->name?></a>
                <?php endif ?>
                <?php endforeach;?>
            </div>
        </div>
   </header>
   <main class="menu-main">
        
        <div class="entree">
                     <h1 class="menu-titre-entrées"><?=$entree->name?></h1>
                     <div class="entree-display">
                     <?php foreach($dishes as $dish) : ?>
                         <?php if($dish->category_id == 1) : ?>
                         <h2><?=$dish->name?></h2>
                         <p><?=$dish->description?></p>
                         <span><?=$dish->price?>$</span>
                         <span><?=$dish->category_name?>, <?=$dish->subcategories?></span>
                        
                         <div class="goldBarre"></div>
                         <?php endif ?>
                         <?php endforeach;?>
                     </div>
                 </div>
                 <div class="repas">
                     <h1 class="menu-titre-repas"><?=$repas->name?></h1>
                     <div class="meal-display">
                     <?php foreach($dishes as $dish) : ?>
                         <?php if($dish->category_id == 2) : ?>
                         <h2><?=$dish->name?></h2>
                         <p><?=$dish->description?></p>
                         <span><?=$dish->price?>$</span>
                         <span><?=$dish->category_name?>, <?=$dish->subcategories?></span>
                         
                         <div class="goldBarre"></div>
                         <?php endif ?>
                         <?php endforeach;?>
                     </div>
                 </div>
                 <div class="deserte">
                     <h1 class="menu-titre-desert"><?=$dessert->name?></h1>
                     <div class="desert-display">
                     <?php foreach($dishes as $dish) : ?>
                         <?php if($dish->category_id == 3) : ?>
                         <h2><?=$dish->name?></h2>
                         <p><?=$dish->description?></p>
                         <span><?=$dish->price?>$</span>
                         <span><?=$dish->category_name?>, <?=$dish->subcategories?></span>
                         
                         <div class="goldBarre"></div>
                         <?php endif ?>
                         <?php endforeach;?>
                     </div>
                 </div>
                 <div class="autre">
            <h1 class="menu-titre-desert"></h1>
            <div class="desert-display">
                <?php foreach ($dishes as $dish) : ?>
                    <?php if ($dish->category_id > 3) : ?>
                        <h2><?= $dish->name ?></h2>
                        <p><?= $dish->description ?></p>
                        <span><?= $dish->price ?>$</span>
                        <span><?= $dish->category_name ?>, <?= $dish->subcategories ?></span>
                        <div class="goldBarre"></div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
        </main>
        <script src="public/js/menu.js"></script>
<?php
include("views/components/foot.php")
?> 
