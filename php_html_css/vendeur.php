<!doctype html>
<html lang="fr">
<head>

<div id="page">
<img src="entete1.png">

</div>

  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="javascript/script.js"></script>
</head>
<body id="fond">
  <div id="menu"> <!--div permet juste d'organiser le contenu-->
	
  <ul id="onglets">

    <li><a href="index.html"> Accueil </a></li>

    <li><a  href="client.html"> Client  </a></li>

    <li><a  href="vendeur.php" > Vendeur</a></li>

    <li><a href="produit.html"> Produit </a></li>
	
	
</ul>
  <!-- Le reste du contenu -->
  
  <form  method="post" action="http://e-srvlamp/s141042/ModifDevise.php" id="page" >
					
					<td >
						<h2>Entrez la valeur en dollar et en livre pour 1€.</h2>
						<p></br>Valeur en dollar :</p>
						<input class="champs" id="dollar" name = "dollar" required type="text" size="25">
						<p>Valeur en Livre :</p>
						<input class="champs" id="livre" name = "livre" required type="text" size="25">
						</br>
						</br>
						<input class="champs" type = "submit" value = "Valider" name = "Envoyer">
						<input class="champs" type = "submit" value = "Reset" name = "Reset" onclick = "reset()">
					</td>
					
					
	</form>
  
  
  </div>
</body>
</html>