<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie8/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie8/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie8/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie8/exercice5/">Exercice 5</a></li>
            </ul>
        </nav>
        <p>Faire une page HTML permettant de donner à l'utilisateur :<br/>
            - son User Agent<br/>
            - son adresse ip<br/>
            - le nom du serveur
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage de l'user agent, de l'ip de l'utilisateur et du nom du serveur:<br/>
            <?php
            print_r($_SERVER['HTTP_USER_AGENT']);
            ?>
            <br/>
            <?php
            print_r($_SERVER['REMOTE_ADDR']);
            ?>
            <br/>
            <?php
            print_r($_SERVER['SERVER_NAME']);
            ?>          
        </p>
    </body>
</html>