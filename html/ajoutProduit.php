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

    <li><a href="index.html"> Accueil </a></li>

    <li><a class="active" href="client.html"> Client  </a></li>

    <li><a  href="" > Vendeur</a></li>

    <li><a href=""> Produit </a></li>
	
	
</ul>
  <!-- Le reste du contenu -->
  <h1>Ajouter des produits � la base de donn�e !!!!!! </h1>
  </div>



<?php
//param�tres de connexion � la base de donn�es
$Server="e-srvlamp";
$User="s141042";
$Pwd="raq95wt";
$DB="s141042";

//connexion au serveur o� se trouve la base de donn�es
$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
//affichage d�un message d�erreur si la connexion a �t� refus�e
if (!$Connect){
	echo "Connexion � la base impossible";
}
if (count($_POST) != 0){

$nomProduit =  $_POST["nomProduit"];
$codeItem = $_POST["codeItem"];
$prixProduit = $_POST["prixProduit"];
$volume = $_POST["volume"];
$prixDollar = $prixProduit * "SELECT valeur FROM PROJET1_Devise WHERE nDevise = 'Dollar' ";
echo $prixDollar;
$Query = "INSERT INTO PROJET1_Produit (`nomProduit,sellPriceEuro`,`itemCode`,`volumeProduit` ) VALUES ('$nomProduit','$codeItem','$prixProduit','$volume')";
$Result = $Connect->query($Query);
}




$Query = "SELECT * FROM Jeu";
$Result = $Connect->query($Query);




mysqli_close($Connect);

?>



</body>
</html>