<?php
    //la configuration de la connexion à la base de données 

    //création d'une variable $online (enligne) avec le type boolean à true
    $online = false;
    if(!$online):
    $host = "localhost";
    $user = "root";
    // pour les mac c'est "root", pour les pc"".
    $password = "";
    $bdd = "portfolio";
    else:
        // à remplir avec les données que vous fournira votre hébergeur
        // le nom du serveur
        $host = "";
        // l'utilisateur 
        $user = "";
        // LE MOT DE PASSE
        $password = "";
        // le nom de la bdd
        $bdd = ""; 
endif;
// mise en place de la connexion )ànla bdd
$connexion = mysqli_connect($host, $user, $password, $bdd);
//passage des retours de requetes au format d'encodage UTF-8.
mysqli_query($connexion,"SET NAMES 'utf8'");
?>