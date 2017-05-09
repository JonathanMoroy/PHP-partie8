<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie8/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie8/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie8/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie8/exercice5/">Exercice 5</a></li>
            </ul>
        </nav>
        <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p> 
        <p>
            Nom d'utilisateur: 
            <?php
            // Conditions d'affichage des cookies
            if (isset($_COOKIE['userName']) && isset($_COOKIE['pass'])) {
                echo $_COOKIE['userName'];
                ?>

                <br/>
                Mot de passe:   
                <?php
                echo $_COOKIE['pass'];
            }
            ?>
        </p>
    </body>
</html>