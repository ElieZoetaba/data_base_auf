<?php 

include("./connexion_bdd.php");

$nom = $_GET["value"];

$query = "DELETE FROM `abonnes` where `prenom` like '$nom'";
// mysqli_query($connexion, $query);
$res = mysqli_query($connexion, $query);

if ($res) {
    header("Location: liste_abon.php");
    exit;
}else{
    echo "echec de suppression";
}
?>