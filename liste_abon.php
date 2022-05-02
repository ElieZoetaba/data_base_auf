<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap.min.css">
  <title>Document</title>
</head>
<body>

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
            <a class="nav-link" href="./choice.html">Acceuil</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            AJOUTEZ UN ABONNE
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">AJOUTEZ UN ABONNE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <section>
                      <div class="texte">
                        <h3>AUF</h3>
                      </div>
                      <form action="./enregistrement.php" method="post">
                        <div class="cadre">
                          <fieldset>
                            <input type="text" name="nom" placeholder="Nom">
                          </fieldset>
                          <fieldset>
                            <input type="text" name="pre" placeholder="Prenom(s)">
                          </fieldset>
                          <fieldset>
                            <input type="text" name="nais" placeholder="Date de naissance">
                          </fieldset>
                          <fieldset>
                            <input type="text" name="debut" placeholder="Date de debut">
                          </fieldset>
                          <fieldset>
                            <input type="text" name="contact" placeholder="Contact">
                          </fieldset>
                          <fieldset>
                            <input type="email" name="mail" placeholder="Adresse mail">
                          </fieldset>
                          <button type="submit" name="submit">Envoyer</button>        
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                      </div>
                    </div>
                  </div>
                </div>
                
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
                <table class="table table-hover">
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

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</html>
