
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sty.css">
    <title>formulaire</title>
</head>
<body>
  <section>
    <div class="texte">
        <h6>GESTION DES ABONNES</h6>
    </div>
    <form action="./enregistrement.php" method="post">
        <h2>Inscription</h2>
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
          <button type="submit" name="submit">S'inscrire</button>        
    </form>
    <a href="./index.php">autentification</a>
    <a href="./inscri_admin.php">inscription_admin</a>
  <style>
    body {
    margin  : 0;
    background: #411f1f;
}
  header{
    margin:1%;
    display: block;
    justify-content: center;
    color:white;
    text-align: center;
    border-radius: 15px;
  }
  
  form {
    align-items: center;
    width :;
    padding: 4% 0;
    margin :0 auto;
    background:rgba(255, 255, 255, 200);
  }
form h2{
    text-align: center;
}
fieldset{
  border:none;
}
  input, textarea {
    font    : .9em/1.5em "handwriting", sans-serif;
    padding : 1% 3%;
    display: block;
    justify-content: center;
    border: none;
  }

  input{
    width: 80%;
    margin: auto;
  }
  button {
    width: 80%;
    cursor: pointer;
    margin: auto;
    display: block;
    justify-content: center;
    background-color: rgba(72, 73, 107);
    color: white !important;
    font    : .9em/1.5em "handwriting", sans-serif;
    padding : 1% 0;
    border: none;
    border-radius: 5px;
  }
  a{
      text-decoration: none;
      color: white !important;
  }
  footer{
    text-align: center;
    background-color: #800d0d;
    color: white;
    padding: auto;
  }

  body{
        background-color: rgba(135, 103, 7, 0.355);
        padding: 0px auto;
        margin: 0px auto;
    }
    
input{
    border: 1px solid;
    height: 20px;
    border-radius: 5px;
}


.buttun{
    background: rgb(102, 16, 16);
    width: 20%;
    padding: 5px;
    height: auto !important;
    border: 2px solid rgb(102, 16, 16);
    color: #fff;
    text-align:center;
    cursor: pointer;
}
section{
    width: 30% !important;
    margin: 0px auto;
    display: block;
    justify-content: center;
    border: 1px solid;
    text-align: center;
    padding: 0px auto;
    background-color: #fff;
    box-shadow: 2px 3px 4px;
}
.texte{
    font-size: 2em;
    background:rgb(102, 16, 16);
    color: white;
    padding: 1%;
}
h5,h6{
    padding: 0px auto;
    margin:;
}

</style>


</body>
</html>