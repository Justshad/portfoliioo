<?php
/* Todo: si l'utilisateur n'est pas connecté ou n'est pas administrateur, le rediriger et
 lui afficher un message l'invitant à se connecter 
indice : $_SESSION est votre amie */

include("./assets/inc/headBack.php");
if(!isset($_SESSION["role"], $_SESSION["isLog"], $_SESSION["prenom"]) ||  $_SESSION["isLog"] ) 

?>
    <title>Portfolio</title>


    <?php
include("assets/inc/headerBack.php");

?>
<?php
if  (!isset($_SESSION["isLog"],$_SESSION["role"],$_SESSION["prenom"]) || !$_SESSION["isLog"] ||  $_SESSION["role"]!= 1){
    //L'utilisateur n'as pas le droit : redirigeons-le!
    $_SESSION["message"] = "Merci de vous connecter.";
header("Location:../admin/index.php");

exit;
}

?>




    <main>

    </main>
    <?php
include("assets/inc/footerBack.php");
?>
