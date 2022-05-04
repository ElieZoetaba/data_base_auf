<?php
$conn= new mysqli("localhost","root","","admin_auf");
if($conn->connect_error){
    echo "Error";
}
?>

<?php
include("./connexion_bdd.php");
if(isset($_POST["submit"])){

    header('location:inscription_abon.php');
     $user=$_POST["user"];
     $passe=$_POST["pass"];
     $hash = password_hash($pass, PASSWORD_DEFAULT);
     $sql = "SELECT FROM admin password where password = $passe and email= $user";
     $result= mysqli_query($conn, $sql);
     if($result){
       if(mysqli_fetch_assoc($result)){
        header("Location: liste_abon.html");
       }
         
     }echo "error";
}
?>

