<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="javascript/script.js"></script>
</head>
<body>
  <div id="menu"> <!--div permet juste d'organiser le contenu-->
	
  <ul id="onglets">

    <li><a href="../index.html"> Accueil </a></li>

    <li><a class="active" href="client.html"> Client  </a></li>

    <li><a  href="" > Vendeur</a></li>

    <li><a href=""> Produit </a></li>
	
	
</ul>
  <!-- Le reste du contenu -->
  <h1>Ajouter des produits à la base de donnée !!!!!! </h1>
  </div>



<?php
//paramètres de connexion à la base de données
$Server="e-srvlamp";
$User="s141042";
$Pwd="raq95wt";
$DB="s141042";

//connexion au serveur où se trouve la base de données
$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
//affichage d’un message d’erreur si la connexion a été refusée
if (!$Connect){
	echo "Connexion à la base impossible";
}
if (count($_POST) != 0){
$nom = $_POST["quantite"];
$nom =  $_POST["nom"];
$type = $_POST["type"];
$activite  = $_POST["activite"];
$image = $_POST["image"];
$description = $_POST["description"];
$age = $_POST["age"];

$Query = "INSERT INTO PROJET1_Produit VALUES ('$nom','$activite','$type','$age','$image', '$description','$quantite')";
$Result = $Connect->query($Query);
}




$Query = "SELECT * FROM Jeu";
$Result = $Connect->query($Query);




mysqli_close($Connect);

?>



</body>
</html>