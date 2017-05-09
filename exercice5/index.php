<?php
session_start();
// Conditions de déclaration des cookies
if (isset($_POST['userName']) && isset($_POST['pass'])) {
// Déclaration des cookies
    setcookie('userName', $_POST['userName'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('pass', $_POST['pass'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie8/exercice1/">Exercice 1</a></li>
                <li><a href="http://partie8/exercice2/">Exercice 2</a></li>
                <li><a href="http://partie8/exercice3/">Exercice 3</a></li>
                <li><a href="http://partie8/exercice4/">Exercice 4</a></li>
            </ul>
        </nav>
        <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p> 
        <?php
        // Conditions d'affichage du formulaire
        if (!isset($_POST['userName']) && !isset($_POST['pass'])) {
            ?>
            <form name="cookie" method="post" action="index.php">
                <label for="userName">Nom d'utilisateur: <input type="text" name="userName" id="userName"/></label>
                <label for="pass">Mot de passe: <input type="password" name="pass" id="pass"/></label>
                <button type="submit">Envoyer</button>
            </form>
            <?php
        }
        ?>
    </body>
</html>