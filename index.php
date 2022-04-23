
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="./css/styl.css">
    <title>formulaire</title>
</head>
<body>
    <header>
        <h4 class="h1">AUF</h4>
        <h4>GESTION DES DONNEES</h4>
    </header>
    <main>
    <form action="./enregistrement.php" method="post">
        <h2>Inscription</h2>
        <fieldset>
        <legend>Nom</legend>
        <input type="text" name="nom">
        </fieldset>
        <fieldset>
        <legend>Prenom(s)</legend>
        <input type="text" name="pre">
        </fieldset>
        <fieldset>
        <legend>Date de naissance</legend>
        <input type="text" name="nais">
        </fieldset>
        <fieldset>
        <legend>Date de debut</legend>
        <input type="text" name="debut">
        </fieldset>
        <fieldset>
        <legend>Contact</legend>
        <input type="text" name="contact">
        </fieldset>
        <fieldset>
        <legend>Adresse mail</legend>
        <input type="email" name="mail">
        </fieldset>
        <div class="submit">
        <button type="submit" name="submit">S'inscrire</button>
        <button ><a href="./affichage.php"> Affichez</a></button>
        </div>
    </form>
    </main>
    
    <footer>
        <h3>AGENCE UNIVAIRSITAIRE DE LA FRANCOPHONIE</h3>
    </footer>











<style>
    body {
    margin  : 0;
  }
  main{
    background-image: url(./img/musique\ \(1\).png);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 2% 0;
  }
  
  form {
    position: relative;
    width  : 20% !important;
    margin : 0 auto;
    background: #ffffff97;
    border: 2px solid;
    padding:0 3%;
    border-radius: 10% !important;
  }
  
  header{
      display: flex;
      background-color: rgba(165, 151, 151, 0.557);
      height: 70px !important;
  }
  header img{
    height: 50px;
  }
  .h1{
      margin-left: 5%;
      font-weight: 900;
      color: brown;
  }
  header h4{
    display: flex;
     margin: 0px auto;
     align-items: center;
     font-size: 1.5em;
     letter-spacing: 0.4em;
     color: brown;
  }
  h2{
      text-align: center;
  }
  label {
    font : .8em "typewriter", sans-serif;
  }
  input, textarea {
    font    : .9em/1.5em "handwriting", sans-serif;
    border :none;
    border-bottom:1px solid ;
    padding : 0 3%;
    margin  : 0;
    width   : 80%;
    background: none;
  }
  fieldset{
    border: 0px;
  }
  button {
    padding: 2%;
    font-size: 15px !important;
    font: bold .6em sans-serif;
    border-radius: 5px;
    cursor: pointer;
    margin: 0px auto;
    display: block;
    justify-content: center;
    margin-bottom: 8%;
    background-color: rgba(0, 0, 255, 0.703);
    color: white !important;
  }
  a{
      text-decoration: none;
  }
  button:after {
    content: " >>>";
    
  }
  
  button:hover,
  button:focus {
    outline   : none;
    color   : rgb(255, 255, 255);
  }
  .submit{
    display: flex;
  }
  .submit a{
    color: #fff !important;
  }
  tbody, td,tfoot, th, tr, thead{
    border-width: 2px !important;
  }

  footer{
    padding: 0px;
    background-color: rgb(183, 47, 47);
    text-align: center;
  }
  footer h3{
    align-items: center;
    text-align: center;
    font-size: 2em;
    letter-spacing: 0.4em;
    padding: 1%;
    margin: 0px auto;
  }
  @media only screen and (max-width:1326px){
    header img{
      height: 90px !important;
    }
    form{
      width: 30%;
      
    }
    footer h3{
      font-size: 1.5em !important;
    }
  }
  @media only screen and (min-width:1009px){
    header{
      height: ;
    }
    form{
      width: 32%;
    }
    footer h3{
      font-size: 1.5em !important;
      
    }
  }
  @media only screen and (max-width:1009px){
    header{
      height: ;
    }
    form{
      width: 35%;
    }
    footer h3{
      font-size: 1.4em !important;
    }
  }
  @media only screen and (max-width:360px){
    header{
      height: ;
      font-size: 0.5em;
    }
    form{
      width: 60%;
    }
    header h3{
      font-size: 1.5em;
    }
    footer h3{
      font-size: 1.2em !important;
    }
  }
  
  @media only screen and (max-width:820px){
    header{
      height: ;
      font-size: 0.6em;
    }
    form{
      width: 42%;
    }
    header h3{
      
    }
    footer h3{
      font-size: 1em !important;
    }
  }
  @media only screen and (max-width:768px){
    header{
      height: ;
      font-size: 0.5em;
    }
    form{
      width: 45%;
    }
    footer h3{
      font-size: 0.9em !important;
    }
  }
  @media only screen and (max-width:1368px){
    body{
      font-size: large;
      font-weight: 600;
    }
    header{
      height: ;
    }
    form{
      width: 55%;
    }
    header h3{
      font-size: 2.5em;
    }
  }
  @media only screen and (max-width:540px){
    header{
      height: ;
    }
    form{
      width: 60%;
    }
    header h3{
      font-size: 1em;
    }
    footer{
      font-size:1.2em ;
    }
  }
  @media only screen and (max-width:520px){
    header{
      height: ;
    }
    form{
      width: 60%;
    }
    header h3{
      font-size: 0.8em;
    }
  }
  @media only screen and (max-width:412px){
    header{
      font-size: 0.8em !important;
    }
    form{
      width: 60%;
    }
    footer{
      font-size: 0.6em;
    }
  }
  @media only screen and (max-width:280px){
    header img{
      display: none;
    }
    form{
      width: 60%;
    }
    header h3{
      font-size: 0.9em;
    }
    footer h3{
      font-size: 0.05em;
      letter-spacing: none;
    }
  }
</style>


</body>
</html>