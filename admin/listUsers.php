<?php
/* TODO: Si l'utilisateur n'est pas connecté ou n'est pas administrateur,
le rediriger et lui afficher un message l'invitant à se connecter
Indice : $_SESSION est votre amie.
*/

include("../assets/inc/headBack.php");

// Vérifions si l'utilisateur a le droit d'accéder à la page
if (!isset($_SESSION["role"], $_SESSION["isLog"], $_SESSION["prenom"]) || !$_SESSION["isLog"] || $_SESSION["role"] != 1) {
    // L'utilisateur n'a pas le droit : redirigeons-le!
    $_SESSION["message"] = "Vous n'avez pas le droit d'accès à l'administration";
    header("Location: ../admin/index.php");
    exit;
}

require("../core/connexion.php");
$sql = "SELECT `id_user`, `nom`, `prenom`, `email`, `role`
        FROM `user`

";
// execution de la requète
$query = mysqli_query($connexion, $sql) or die(mysqli_error($connexion));


$users = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>
<title>liste des utilisateurs inscrits</title>
<?php
include("../assets/inc/headerBack.php");

?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 mt-5">
                <h1>Bienvenue <?= $_SESSION["prenom"] ?> sur la liste des utilisateurs</h1>
            </div>
        </div>
<table class="table">
    <tr>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
        <th>Id</th>
        <th>NOM</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
        <?php
        foreach($users as $user) {
            /*
            Todo: pour chaque utilisateur, créer une nouvelle ligne(tr) et afficher ses informations dans des cellules(td)
            */
            ?>
           
           <tr>
        <td><?= $user["id_user"]; ?></td>
        <td><?= $user["nom"]; ?></td>
        <td><?= $user["prenom"]; ?></td>
        <td><?= $user["email"]; ?></td>
        <td><?= $user["role"]; ?></td>
        <td><?php
    if($user["role"] == 1) {
        echo "administrateur";

    }
    else {
        echo"utilisateur";
    }   
       ?> </td>
    </tr>
    <?php
        }

        ?>

    </div>
</main>
<?php
include("../assets/inc/footerBack.php");
?>