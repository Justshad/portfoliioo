<?php
session_start();
// il faut créer un user avec le role de admin dans la bdd pour avoir 
// personne administrateur du backoffice (console d'administration)
// pour cela on crée un formulaire user pour renseigner la bdd au niveau du CRUD
// nous allons faire un create avec l'instruction SQL INSERT INTO
include("../assets/inc/headFront.php");
?>

<title>Création d'un admin </title>
<?php
include("../assets/inc/headerFront.php");
?>
<main>
    <div class="container">
            <div class="row">
                <h3>Admin</h3>
                <div class="col-4 form-group">
                    <form action="" method="post">
                    <input class="form-control" type="text" name="nom" placeholder="votre nom">
                    <input class="form-control mt-3" type="text" name="prenom" placeholder="votre prénom">
                    <input class="form-control mt-3" type="email" name="email" placeholder="votre email">
                    <input class="form-control mt-3" type="password" name="password" placeholder="votre mot de passe">
                    <button class="btn bg-primary text-light fw-bold mt-3" type="submit" name="soumettre">Enregistrer</button>
                    </form>
                    <?php
                //on récupère le fichier de connexion -> connexion.php qui correspond aux paramètre de connexion de notre bdd
                require("../core/connexion.php");
                // Une condition pour récupérer les données du formulaires

                if (isset($_POST["soumettre"])) :
                    $nom = addslashes(trim(ucfirst($_POST["nom"])));
                    $prenom = addslashes(trim(ucfirst($_POST["prenom"])));
                    $email = trim(strtolower($_POST["email"]));
                    $options = ['cost' => 12];
                    $password = password_hash(trim($_POST
                    ["password"]),PASSWORD_DEFAULT, $options);
                    // on dit que 1 est admin pour le rôle
                    $role1 = 1;
                    // préparation de l'ecriture SQL
                    $sql = "
                        INSERT INTO user (nom,prenom,email,password,role)
                        VALUE ('$nom', '$prenom', '$email', '$password', '$role1')
                    ";

                    // execution de la requète avec les paramètre de connexion
                    mysqli_query($connexion, $sql) or die(mysqli_error($connexion));

                    // Message
                    $_SESSION["message"] = "Administrateur $nom $prenom est correctement ajoutée en base de données";
                    // redirection vers notre page d'acceuil (index.php)
                    header('Location:../index.php');
                        exit;

                endif;
                ?>
                    
                
                </div>




            </div>


    </div>
    </main>
    <?php
include("../assets/inc/footerFront.php");
?>
