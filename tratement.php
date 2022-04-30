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
    // $user=$_POST["user"];
    // $pass=$_POST["pass"];
    // $hash = password_hash($pass, PASSWORD_DEFAULT);
    // $sql = "INSERT INTO `admin`(email ,password) value('$user','$hash')";
    // $result= mysqli_query($conn, $sql);
    // if($result){
    //     header("Location: inscri_admin.php");
    // }echo "error";
}
?>
