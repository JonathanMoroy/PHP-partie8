<?php
// Démarrage de la session avant d'écrire le code HTML
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie8/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie8/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie8/exercice4/">Exercice 4</a></li>
                <li><a href="http://partie8/exercice5/">Exercice 5</a></li>
            </ul>
        </nav>
        <p>Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
            Il faudra afficher le contenu de ces variables sur la deuxième page.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            Affichage des variables enregistrés dans la session:<br/>
            <?php
            print_r($_SESSION['firstName']);
            ?>
            <br/>
            <?php
            print_r($_SESSION['secondName']);
            ?>
            <br/>
            <?php
            print_r($_SESSION['old']);
            ?>          
        </p>
    </body>
</html>