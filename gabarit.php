<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="logo.PNG"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title><?php $titre ?></title>
    </head>

    <body>
        <header>
            <div id="bloc_logo">
                <p>Le rucher du soleil</p>
                <a href="#accueil"> <img id="logo" src="logo.PNG" alt="Logo"/> </a>
            </div>
            <div id="bloc_nav">
                <ul class="menu">
                    <?php
                        echo '<li><a href="index.php" title="accueil" class="fas fa-home"> Accueil </a></li>';
                        echo '<li><a href="index.php?action=reservation" title="reservation"> Réservation </a></li>';
                        echo '<li><a href="#contact" title="contact"> Contact </a></li>';
                    ?>
                </ul>
            </div>
        </header>

        <div id="contenu">
            <?= $contenu ?>   <!-- Élément spécifique -->
        </div>

        <footer>
            Site réalisé par GTL en PHP, HTML5 et CSS3.    
        </footer>
    <script src="Slider.js"></script>
    <script src="main.js"></script> 
    </body>
</html>