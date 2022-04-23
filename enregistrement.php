<?php
    include("connexion_bdd.php");
    if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['pre'];
        $naissance=$_POST['nais'];
        $debut=$_POST['debut'];
        $contact=$_POST['contact'];
        $email=$_POST['mail'];
        
            $sql= "INSERT INTO `abonnes` (nom,prenom,date_de_naissance,date_du_debut,contact,email)
            values('$nom','$prenom','$naissance','$debut','$contact','$email')";
            $result = mysqli_query($connexion, $sql);
            if ($result) {
                header("Location: index.php");
                
            }
        }
    ?>
    
    
