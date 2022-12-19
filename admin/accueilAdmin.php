


<?php
include("../assets/inc/headBack.php");    
    echo "<pre>";
        var_dump($_SESSION);
    echo "</pre>";
?>
<title>console d'administration</title>
<?php
    include("../assets/inc/headerBack.php")
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h4>Bienvenue <?=$_SESSION["prenom"] ?>sur le back-office</h4>
            </div>
        </div>

        <div class="row justify-content-center col-4">
        <form class="form-group" action="../core/userControler.php" method="post">
        <input type="hidden" name="faire" value="log-admin">
            <input class="form-control mt-3" type="email" name="email" placeholder="Votre email">
            <input class="form-control mt-3" type="password" name="password" placeholder="votre mot de passe">
            <button class="btn bg-secondary text-light mt-3" type="submit" name="soumettre">se connecter</button>

    </div>
</main>
<?php
    include("../assets/inc/footerBack.php")
?>