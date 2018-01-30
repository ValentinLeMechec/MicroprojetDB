<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="javascript/script.js"></script>
</head>
<body id="fond">
<div id="page">
<img src="entete.jpg" width="840px" height="200px">
</div>

  <div id="menu"> <!--div permet juste d'organiser le contenu-->
	
  <ul id="onglets">

    <li><a href="index.html"> Accueil </a></li>

    <li><a href="client.html"> Client  </a></li>

    <li><a  href="vendeur.php" > Vendeur</a></li>

    <li><a id="active" href="produit.html"> Produit </a></li>
	
	
</ul>
  <!-- Le reste du contenu -->
 
  </div>
  <div id="page">
   <h1>Ajout des produits à la base de donnée </h1>



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

$nomProduit =  $_POST["nomProduit"];
$codeItem = $_POST["codeItem"];
$prixProduit = $_POST["prixProduit"];
$volume = $_POST["volume"];


$Query = "SELECT valeur FROM PROJET1_Devise WHERE nDevise = 'Dollar' ";
$Result = $Connect->query($Query);
$prixDollar = $prixProduit * $Result;
echo $prixDollar;
echo $volume;
echo $prixProduit;
echo $nomProduit;
}
//$Query = "INSERT INTO PROJET1_Produit (`nomProduit,sellPriceEuro`,`itemCode`,`volumeProduit` ) VALUES ('$nomProduit','$codeItem','$prixProduit','$volume')";
//$Result = $Connect->query($Query);





mysqli_close($Connect);

?>

</div>
</body>
</html>