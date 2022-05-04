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
                header("Location: ./liste_abon.php");
            }
        }
        ?>
    <style>
        body{
            background-color: rgba(135, 103, 7, 0.355);
        }
        p{
            width: 20%;
            margin: 0px auto;
            color: white;
            display: block;
            justify-content: center;
            align-items: center;
            text-align: center;
            background:rgb(102, 16, 16);
            padding: 6%;
            margin-top: 15%;
            font: 1.5em sans-serif;
            box-shadow: 2px 4px 6px black;
            border-radius: 20px;
        }
        a{
            text-decoration: none;
            color: #fff;
            background-color: rgba(72, 73, 107);
            padding: 8px;
            border-radius: 20px;
        }
    </style>
    

