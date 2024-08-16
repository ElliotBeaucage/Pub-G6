<?php
include("views/components/head.php");
?>
<header class="menuheader-admin">
       
        <a href="menus-manager" class="button-menu">Retour</a>
        <div class="container-logo-menu">
            <a href="index-manager"><img class="logo-menu" src="public/img/logo.png" alt="Logo PUB"></a>
            <h1 class="menu-tire">MENU</h1>
        </div>
       
    </header>
<main class="menu-add">
    <form action="update-section" method="post" enctype="multipart/form-data" class="formedit">
        <input type="hidden" name="id" value="<?= $category->id ?>">
        <label>
            categorie:
            <input class="edit" type="text" name="name" value="<?= $category->name ?>">
        </label>
        <input type="submit" value="modifier" class="submit-admin">
    </form>
</main>
    

<?php
include("views/components/foot.php")
?>