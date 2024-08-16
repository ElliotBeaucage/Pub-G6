<?php
include("views/components/head.php");

?>

<body>
    <div class="index">
        <header>
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

                </div>
            </div>
            <div class="imagebackground">
                <nav>
                    <div class="navbar">
                        <ul>
                            <li><a class="scale" href="menus-manager">Menu</a></li>
                            <li><a class="scale" href="propos-manager">À Propos</a></li>
                            <li><a class="scale" href="#">infolettre</a></li>
                        </ul>
                        <span class="material-symbols-outlined">
                            <a class="nav-open" href="#">menu</a>
                        </span>

                    </div>
                </nav>
                <div class="container-logo">
                    <a href="index"><img class="logo" src="public/img/logo.png" alt="Logo PUB"></a>
                    <div class="titre">
                        <h1 class="h1-pub">PUB G6</h1>
                        <h2 class="h2-ville">Saint-Jerome</h2>
                    </div>
                </div>
            </div>
        </header>
        <div class="quote-propos">
            <h2 class="histoire">Liste des Utilisateurs</h2>
        </div>
        <main class="container-create">
            <?php if (isset($_GET["error_id"])) : ?>
                <p>
                    une erreur ses produite.. Réessayer une autre fois
                </p>
            <?php endif; ?>
            <?php if (isset($_GET["error_edit"])) : ?>
                <p>
                    une erreur ses produite.. Réessayer une autre fois
                </p>
            <?php endif; ?>
            <form action="update-user" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <label>
                    <p>Prenom:</p>
                    <input type="text" class="edit" name="firstname" value="<?= $user->lastname ?>">
                </label>
                <label>
                    <p>Nom de famille</p>
                    <input type="text" class="edit" name="lastname" value="<?= $user->firstname ?>">
                </label>
                <label>
                    <p>Adresse email</p>
                    <input type="email" class="edit" name="email" value="<?= $user->email ?>">
                </label>

            </form>
            <input type="submit" value="Modifier" class="submit-admin">
            <a href="List-manager" class="btn-retour">retour</a>

        </main>
        <footer id="infolettre">
            <div class="network">
                <img class="logo-footer" src="public/img/logo.png" alt="logo">
                <p>PUB G6 / SAINT-JEROME</p>
                <img src="public/img/facebook.png" alt="fb">
                <img src="public/img/instagram.png" alt="inst">
                <img src="public/img/x.png" alt="x">
            </div>
            <div class="whitebar"> </div>
            <div class="location">
                <h3>Notre position</h3>
                <p>
                    297, rue St-Georges, Saint-Jérôme (Québec) J7Z 5A2
                </p>
                <p>
                    450 436-1531
                </p>
                <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7467856551384!2d-74.00559052307652!3d45.77626467108082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20Saint-Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%205A2!5e0!3m2!1sfr!2sca!4v1720109651639!5m2!1sfr!2sca" style="border:0;" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="whitebar"> </div>
            <div class="infolettre">
                <div class="info">
                    <h3>Infolettre</h3>
                    <p class="infotexte">Joignez-vous à nous au Pub G6 pour des soirées mémorables</p>
                </div>
                <input type="text" class="text">
                <input type="submit" value="S'inscrire" class="submit">
            </div>

        </footer>
    </div>
    <div class="index2">
        <div class="index2-nav">
            <a href="index">Accueil</a>
            <a href="menus">Menus</a>
            <a href="propos">Propos</a>
            <a class="nav-close" href="">Retour</a>
        </div>
    </div>
    <div class="desert-btn repas-btn entree-btn" style="display: non;"></div>
    <?php
    include("views/components/foot.php")
    ?>