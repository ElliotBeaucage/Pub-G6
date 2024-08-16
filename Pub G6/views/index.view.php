<?php
include("views/components/head.php")
?>
<body>
    <div class="index">
        <header>
            <div class="imagebackground">
                <nav>
                    <div class="navbar">
                        <ul>
                            <li><a class="scale" href="menus">Menu</a></li>
                            <li><a class="scale" href="propos">À Propos</a></li>
                            <li><a class="scale" href="#infolettre">Infolettre</a></li>
                        </ul>
                        <span class="material-symbols-outlined" >
                            <a class="nav-open" href="#">menu</a>
                        </span>
                        
                    </div>
                </nav>
                <div class="container-logo">
                    <a href="index"><img class="logo" src="public/img/logo.png" alt="Logo PUB" ></a>
                    <div class="titre">
                        <h1 class="h1-pub">PUB G6</h1>
                        <h2 class="h2-ville">Saint-Jerome</h2>
                    </div>
                </div>
            </div>
        </header>
        <div class="quote">
            <p class="p">"Nous sommes fiers de notre héritage et de notre évolution constante"</p>
            <a class="btn-gap" href="propos">Notre histoire</a>
        </div>
        
        <div class="menu">
               <a href="menus" class=" flex"><div class="appetizer" onmouseover="showTexte()" onmouseout="UnShowTexte()"></div></a>
                <a href="menus" class=" flex">
                    <div class="meal " onmouseover="showTexte()" onmouseout="UnShowTexte()">
                        <div class="voirMenu">
                            <h1>
                                Voir le menu
                            </h1>  
                        </div>
                    </div>
                </a>
                <a href="menus" class=" flex"><div class="dessert " onmouseover="showTexte()" onmouseout="UnShowTexte()"></div></a>
        </div>
        
        <div class="comms">   
            <div class="comm">
                <p class="commentaire"></p>
            </div>
            <p class="etoile"></p>
        </div>
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
            <a href="index">Accueil</a>
            <a href="menus">Menus</a>
            <a href="propos">Propos</a>
            <a class="nav-close" href="">Retour</a>
        </div>
    </div>
    <script src="public/js/main.js"></script>
<?php
include("views/components/foot.php")
?>