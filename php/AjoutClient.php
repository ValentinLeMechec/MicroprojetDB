<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="javascript/script.js"></script>
</head>
<body id="fond">
  <div id="menu"> <!--div permet juste d'organiser le contenu-->
	
  <ul id="onglets">

    <li><a href="../index.html"> Accueil </a></li>

    <li><a class="active" href="client.html"> Client  </a></li>

    <li><a  href="" > Vendeur</a></li>

    <li><a href=""> Produit </a></li>
	
	
</ul><?php
	if(count($_POST) !=0){
		
			//Variable programme
			$nom = $_POST["nom"];
			$prenom = $_POST["prenom"];
			$sexe = $_POST["sexe"];
			$datenaissance = $_POST["jour"];
			$tp = $_POST["tp"];
			$tf = $_POST["tf"];
			$mail = $_POST["mail"];
			$pseudo = $_POST["pseudo"];
			$pass = $_POST["pass"];
			
			
			//Variable connexion au serveur
			$Server="e-srvlamp";
			$User="s141042";
			$Pwd="raq95wt";
			$DB="s141042";
			
			//Connexion au serveur
			$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
			if (!$Connect)
				echo "Connexion à la base impossible";
			else{
				echo "Connexion réussi";
			
			//Insertion des élément dans la table
			$Query = "INSERT INTO `PROJET1_Client`(`Pseudo`, `MDP`, `nom`, `prenom`, `sexe`, `dateNaissance`, `adresse`, `mail`, `nTelephoneFixe`, `nTelephonePortable`, `pointFideliteActuel`, `pointFideliteTotal`)
			VALUES('$pseudo', '$pass', '$nom','$prenom','$sexe','$datenaissance','rue du porc','$mail', '$tf', '$tp', '0', '0')";
			$Result = $Connect->query($Query);
			
			if($Result!=null){
			echo "OK";
			}
			}
		}
		else{
			echo "Toutes les cases du formulaire ne sont pas remplies<br/><br/>";
		}
	
	mysqli_close($Connect);
	
	
?>
</html>