<?php
$connexion=new mysqli("localhost", "root", "" ,"admin_auf");
if ($connexion->connect_error){
echo "connexion echoue";
}
?>