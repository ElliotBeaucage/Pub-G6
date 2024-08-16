<?php
include("views/components/head.php")
?>
<header class="menuheader-admin">
    
    <a href="menus-manager" class="button-menu">Retour</a>
    <div class="container-logo-menu">
        <a href="index-manager"><img class="logo-menu" src="public/img/logo.png" alt="Logo PUB"></a>
        <h1 class="menu-tire">MENU</h1>
    </div>


</header>
<main class="menu-add">
    <div class="displayFlex">
    
    <?php if (isset($_GET["info_require"])) : ?>
        <p>
            Une erreur ses produite
        </p>
    <?php endif; ?>
    <?php if (isset($_GET["error_creating"])) : ?>
        <p>
            Une erreur ses produite
        </p>
    <?php endif; ?>
    
    <h1>Créer un nouveau Plat</h1>
    <form action="store-dish" method="post" enctype="multipart/form-data" class="formdish">
    
        <label>
            nom de la plat:
            <input class="edit" type="text" name="name">
        </label>
        <label>
            description:
            <input class="edit" type="text" name="description">
        </label>
        <label>
            prix:
            <input class="edit" type="number" name="price" step="0.01">
        </label>
        <label class="gap">
            categorie:
            <select name="category" class="option">
                <?php foreach ($categories as $category) : ?>
                    <option class="option" value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label>
            <h1>subcategory :</h1>
            <div class="subs">
                <?php foreach ($subs as $sub) : ?>
                    <label>
                        <?= $sub->name ?>
                        <input type="checkbox" name="sub[]" value="<?= $sub->id ?>">
                    </label>
                <?php endforeach; ?>
            </div>
        </label>
        <input type="submit" class="submit-admin">
        
    </form>
    </div>
    
    
</main>
<?php
include("views/components/foot.php")
?>