<?php
include("views/components/head.php")
?>
<body>
    <div class="index">
        <header>
        <div class="adminBar">
                <div class="imdone">
                    <h1>Utillisateur</h1>
                    <a href="log-out"><span class="material-symbols-outlined">
                            logout
                        </span>Deconnexion</a>
                </div>

                <div class="lien">

                    <a href="index-user">Accueil</a>
                    <a href="menus-user">Voir menus</a>
                    <a href="propos-user">Voir propos</a>
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
                <div class="imagebackground">
                    <nav>
                        <div class="navbar">
                        <ul>
                            <li><a class="scale" href="menus-user">Menu</a></li>
                            <li><a class="scale" href="propos-user">À Propos</a></li>
                            <li><a class="scale" href="#">infolettre</a></li>
                        </ul>
                            <span class="material-symbols-outlined">
                                <a class="nav-open" href="#">menu</a>
                            </span>
                           
                        </div>
                    </nav>
                    <div class="container-logo">
                    <a href="index-user"><img class="logo" src="public/img/logo.png" alt="Logo PUB" ></a>
                        <div class="titre">
                            <h1 class="h1-pub">PUB G6</h1>
                            <h2 class="h2-ville">Saint-Jerome</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="quote-propos">
                <h2 class="histoire">Notre Histoire</h2>
            </div>
            <main class="contenu-histoire">
            <div class="p1">
                <div class="containerimg">
                    <img class="image" src="public/img/histoire1.jpg" alt="">
                </div>
                <p class="texte">Bienvenue chez Pub G6, un établissement emblématique qui a su séduire les gourmets depuis sa fondation il y a 20 ans. Niché au cœur de notre charmante ville, notre restaurant propose une expérience culinaire unique, alliant tradition et innovation. Chaque plat est préparé avec des ingrédients frais et locaux, reflétant notre engagement envers la qualité et l'authenticité.</p>
            </div>
            <div class="p2">
                <p class="texte">Au fil des années, Pub G6 est devenu un lieu de rencontre incontournable pour les amoureux de la bonne cuisine. Notre équipe passionnée et talentueuse, dirigée par notre chef renommé, met un point d'honneur à offrir un service chaleureux et attentif. Que vous veniez pour un dîner romantique, une réunion entre amis ou un événement spécial, notre atmosphère conviviale et élégante vous accueillera toujours avec plaisir.</p>
                <div class="containerimg">
                    <img class="image" src="public/img/histoire2.jpg" alt="">
                </div>
            </div>
            <div class="p3">
                <div class="containerimg">
                    <img class="image" src="public/img/histoire3.jpg" alt="">
                </div>
                <p class="texte">Nous sommes fiers de notre héritage et de notre évolution constante. En célébrant deux décennies de succès, nous continuons à innover et à réinventer nos menus pour surprendre et ravir nos clients fidèles. Venez découvrir pourquoi le Bistro du Vieux-Port est une véritable institution culinaire, où chaque visite est une fête pour les sens.</p>
            </div>
        </main>
            <footer id="infolettre">
        <div class="network">
                <img class="logo-footer" src="public/img/logo.png" alt="logo">
                <p>PUB G6 / SAINT-JEROME</p>
               <img src="public/img/facebook.png" alt="fb" >
               <img src="public/img/instagram.png" alt="inst" >
               <img src="public/img/x.png" alt="x" >
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
            <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7467856551384!2d-74.00559052307652!3d45.77626467108082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccf2ca136664c05%3A0x90430ecdc061500!2s297%20Rue%20Saint-Georges%2C%20Saint-J%C3%A9r%C3%B4me%2C%20QC%20J7Z%205A2!5e0!3m2!1sfr!2sca!4v1720109651639!5m2!1sfr!2sca"  style="border:0;" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <a href="index-user">Accueil</a>
            <a href="menus-user">Menus</a>
            <a href="propos-user">Propos</a>
            <a class="nav-close" href="">Retour</a>
        </div>
    </div>
    <script src="public/js/propos.js"></script>

<?php
include("views/components/foot.php")
?>
    
</body>
</html>