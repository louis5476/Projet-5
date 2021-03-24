<!doctype html>

<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="logo.PNG"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Le rucher du soleil</title>
    </head>

    <body>
        <header>
            <div id="bloc_logo">
                <p>Le rucher du soleil</p>
                <img id="logo" src="logo.PNG" alt="Logo" />
            </div>
            <div id="bloc_nav">
                <ul class="menu">
                    <li><a href="#accueil" title="accueil" class="fas fa-home"> Accueil </a></li>
                    <li><a href="#infos" title="infos"> Plus d'infos </a></li>
                    <li><a href="#contact" title="contact"> Contact </a></li>
                </ul>
            </div>
        </header>
        <section>
            <div id ="slider">
                <div id="images_slider">
                    <figure><img class="photos_slider" src="apiculteur_1.jpeg" alt="image1" widht='800' height="480" /></figure>
                    <figure><img class="photos_slider hidden" src="apiculteur_2.jpeg" alt="image2" widht='800' height="480" /></figure>
                    <figure><img class="photos_slider hidden" src="apiculteur_3.jpeg" alt="image3" widht='800' height="480" /></figure>
                </div>
                <div id="boutons_slider">
                    <span class="boutons" id="boutongauche"><i class="fas fa-chevron-left"></i></span>
                    <span class="boutons" id="boutondroite"><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
        </section>
        
    <script src="Slider.js"></script>
    <script src="main.js"></script> 
    </body>
</html>