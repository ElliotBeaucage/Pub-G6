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
    <h1>Créer une nouvelle section</h1>
    
        <form action="store-section" method="post" enctype="multipart/form-data" class="formedit">
            <label>
                nom de la section:
                <input class="edit" type="text" name="name">
            </label>
            <input type="submit" class="submit-admin">
        </form>
   
</main>
<?php
include("views/components/foot.php")
?>