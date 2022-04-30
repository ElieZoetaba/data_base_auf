<?php
$connexion=new mysqli("localhost", "root", "" ,"admin_auf");
if ($connexion->connect_error){
echo "Erreur de connexion";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <div class="geo">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/liste.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
        <ul>
        <li class="nav-item">
            <a class="nav-link">GESTION DES ABONNES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Ajouter un abonné</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#supprimer">Supprimer un abonné</a>
          </li>
        </ul>
      
    </div>
</nav>
<main>
  <div class="img1"></div>
    <center><h4 class="title">LISTES DES ABONNES</h4></center>
    <div class="container">
      <div class="row">
        <div class="col">
    <table >
    <thead>
            <td class="t">Nom</td>    
            <td class="t">Prenom</td>
            <td class="t">Date de naissance</td>
            <td class="t">Date du debut</td>
            <td class="t">Contact</td>
            <td class="t">Email</td>
            <td class="t" id="supprimer">Supprimer</td>
    </thead>
        
    <tbody>
        <?php
        $sql_rec = "select * from `abonnes`";
        $resulta = mysqli_query($connexion, $sql_rec);
        if (isset($resulta)) {

            while ($row = mysqli_fetch_assoc($resulta)) {
                echo "  
              <tr>
                <td>$row[nom]</td>
                <td>$row[prenom]</td>
                <td>$row[date_de_naissance]</td>
                <td>$row[date_du_debut]</td>
                <td>$row[contact]</td>
                <td>$row[email]</td>
                <td><a href='./delete.php?value=$row[prenom]'> <button>Supprimer</button> </a></td>
              </tr>
              <tr><td colspan='7' class='space'></td></tr>

                </form> 
            ";
            }
        }
        ?>      
      </tbody>
    </table>
    </div>
  </div>
    </div>
    </main>
    <div class="img2"></div>
<footer>
<center>AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</center>
</footer>


<style>

</style>


</body>
</html>