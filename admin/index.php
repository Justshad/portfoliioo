<?php
// dans cette page on va creer la page de connexion à notre back-office / avec le login : identifiant & mot de passe

include("../assets/inc/headFront.php");

?>
<title>Login administration</title>
<?php
include("../assets/inc/headerFront.php");
?>
<main>
<div class="container">
    <!gestion de l'affichage des messages -->
<div class="row">
<?php
            if(isset($_SESSION["message"])){
                echo '<div class="alert alert-danger" role="alert">' .$_SESSION["message"] . "</div>";
                //on efface la clé message, un fois qu'elle a été affiche avec unset()
                unset($_SESSION["message"]);
            }
            ?>
    <div class="justify-content-center col-4">
        <form class="form-group" action="../core/userController.php" 
        method="post">
        <input type="hidden" name="faire" value="log-admin">
            <input class="form-control mt-3" type="email" name="email" placeholder="Votre email">
            <input class="form-control mt-3" type="password" name="password" placeholder="votre mot de passe">
            <button class="btn bg-secondary text-light mt-3" type="submit" name="soumettre">se connecter</button>
        </form>
    </div>
</div>
</div>
</main>
<?php
include("../assets/inc/footerFront.php");
?>
