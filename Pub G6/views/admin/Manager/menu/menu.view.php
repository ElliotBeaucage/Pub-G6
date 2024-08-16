<?php
include("views/components/head.php");

?>

<body>
    <header class="menuheader-admin">
        <div class="adminBar">
            <div class="imdone">
                <h1>Gestionnaire</h1>
                <a href="log-out"><span class="material-symbols-outlined">
                        logout
                    </span>Deconnexion</a>
            </div>

            <div class="lien">
                <a href="index-manager">Accueil</a>
                <a href="List-manager" style="color:#fff;">Voir utilisateur</a>
                <a href="menus-manager">Voir menus</a>
            </div>
            <div class="codeError2">
                <?php if (isset($_GET["succes_connection"])) : ?>
                    <p class="succesBarreAdmin">
                        Vous etes bien connecter
                    </p>
                <?php endif; ?>
                <?php if (isset($_GET["acces_denied"])) : ?>
                    <p>
                        Vous n'avez pas les droit
                    </p>
                <?php endif; ?>
            </div>
        </div>
        <a href="index-manager" class="button-menu">Retour</a>
        <div class="container-logo-menu">
            <a href="index-manager"><img class="logo-menu" src="public/img/logo.png" alt="Logo PUB"></a>
            <h1 class="menu-tire">MENU</h1>
        </div>
        <div class="center">
            <div class="add-dish">
                <a href="add-dish"> Ajouter un plat<span class="material-symbols-outlined">add</span></a>
            </div>
            <div class="add-dish">
                <a href="add-section">Ajouter une section<span class="material-symbols-outlined">add</span></a>
            </div>
        </div>
        <div class="nav-container">
            <div class="nav">

                <?php foreach ($categories as $categorie) : ?>

                    <?php if ($categorie->id == 1) : ?>
                        <div class="section-border">
                            <a href="#" class="entree-btn"><?= $categorie->name ?></a>
                            <a href="drop-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                    <?php endif ?>


                    <?php if ($categorie->id == 2) : ?>
                        <div class="section-border">
                            <a href="#" class="repas-btn"><?= $categorie->name ?></a>
                            <a href="drop-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                    <?php endif ?>


                    <?php if ($categorie->id == 3) : ?>
                        <div class="section-border">
                            <a href="#" class="desert-btn"><?= $categorie->name ?></a>
                            <a href="drop-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                    <?php endif ?>


                    <?php if ($categorie->id > 3) : ?>
                        <div class="section-border">

                            <a href="#" class="autrebtn"><?= $categorie->name ?></a>
                            <a href="drop-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-section?id=<?= $categorie->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
    </header>
    <div class="codeError">
        <?php if (isset($_GET["error_creating"])) : ?>
            <p class="error">
                Une erreur ses produite
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["succes"])) : ?>
            <p class="succes">
                Succes!
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["error_drop"])) : ?>
            <p class="error">
                Une erreur ses produite
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["succes_drop"])) : ?>
            <p class="succes">
                Succes! cela a bien été supprimer
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["error_id"])) : ?>
            <p class="succes">
                Une erreur ses produite
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["error_edit"])) : ?>
            <p class="succes">
                Une erreur ses produite
            </p>
        <?php endif; ?>
        <?php if (isset($_GET["succes_edit"])) : ?>
            <p class="succes">
                Succes! cela a bien été modifier
            </p>
        <?php endif; ?>

    </div>
    <main class="menu-main">

        <div class="entree">

            <h1 class="menu-titre-entrées"><?= $entree->name ?></h1>
            <div class="entree-display">
                <?php foreach ($dishes as $dish) : ?>
                    <?php if ($dish->category_id == 1) : ?>
                        <h2><?= $dish->name ?></h2>
                        <p><?= $dish->description ?></p>
                        <span><?= $dish->price ?>$</span>
                        <span><?= $dish->category_name ?>, <?= $dish->subcategories ?></span>
                        <div class="icons-menu">
                            <a href="drop-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                        <div class="goldBarre"></div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="repas">
            <h1 class="menu-titre-repas"><?= $repas->name ?></h1>
            <div class="meal-display">
                <?php foreach ($dishes as $dish) : ?>
                    <?php if ($dish->category_id == 2) : ?>
                        <h2><?= $dish->name ?></h2>
                        <p><?= $dish->description ?></p>
                        <span><?= $dish->price ?>$</span>
                        <span><?= $dish->category_name ?>, <?= $dish->subcategories ?></span>
                        <div class="icons-menu">
                            <a href="drop-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                        <div class="goldBarre"></div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="deserte">
            <h1 class="menu-titre-desert"><?= $dessert->name ?></h1>
            <div class="desert-display">
                <?php foreach ($dishes as $dish) : ?>
                    <?php if ($dish->category_id == 3) : ?>
                        <h2><?= $dish->name ?></h2>
                        <p><?= $dish->description ?></p>
                        <span><?= $dish->price ?>$</span>
                        <span><?= $dish->category_name ?>, <?= $dish->subcategories ?></span>
                        <div class="icons-menu">
                            <a href="drop-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                        <div class="goldBarre"></div>
                    <?php endif ?>
                <?php endforeach; ?>
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
                        <div class="icons-menu">
                            <a href="drop-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    delete
                                </span></a>
                            <a href="edit-dish?id=<?= $dish->id ?>"><span class="material-symbols-outlined">
                                    edit
                                </span></a>
                        </div>
                        <div class="goldBarre"></div>
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <div style="display: none;" class="nav-close nav-open ">allo</div>

    <script src="public/js/menu.js"></script>
    <?php
    include("views/components/foot.php")
    ?>