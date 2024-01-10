<html>
<head>
<title>Ajouter un message</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
 function verif() {
	 
	 if (document.getElementById("cin").value == "") { alert("Veuillez taper votre cin!"); return false; }
	 if (document.getElementById("nom").value == "") { alert("Veuillez taper votre nom!"); return false; }
	 if (document.getElementById("adresse").value == "") { alert("Veuillez taper votre  adresse!"); return false; }
	 if (document.getElementById("produit").value == "") { alert("Veuillez taper votre produit!"); return false; }
	 if (document.getElementById("quantite").value == "") { alert("Veuillez taper votre quqntite!"); return false; }
 }
 </script>
 
</head>
<link  rel="stylesheet" href="index.css" >
<body>
<div id="globale">
<?php 

// include('fonction.php) faire appel a la fonctions car on a une interaction avec la bdd 
include('fonctionss.php');
?>
<header>
<div id="div1">
	<img id="zoz" src="s.png"  width="70" height="70" alt="imag">
	<h3 id="zozor"> Perles de luxe </h3>
	<h4 id="cv">site de bijoux   </h4>
</div>

<nav > 

<ul id="list">
	<li> <a href="inscription.php" title="TITRE" >Inscription </a> </li>	
	<li> <a href="femme.php" title="TITRE" >Pour Femme </a> </li>
	<li> <a href="homme.php" title="TITRE" > Pour Homme </a> </li>	
	<li> <a href="index.php" title="TITRE" class="Accueil" > Accueil </a> </li>
</ul>
</nav>
</header>
<img id="spr" src="separateur.jpeg" width ="105%" height="5"; >
<center>

<h3> "Explorez notre univers en ligne et transformez vos envies en réalité ! 
Découvrez des expériences uniques et des produits exceptionnels. Prêt à concrétiser vos rêves ? 
Faites le premier pas en passant commande dès maintenant et vivez une nouvelle dimension de satisfaction !"
</h3>

<form action="cmnd.php" method="POST" onSubmit="verif()" >
	<table border="1" bgcolor="black" class="form">
		
		<tr><th>cin</th><td><input type="text" size="30" name="cin" id="cin"></td></tr>
		<tr><th>nom</th><td><input type="text" size="30" name="nom" id="nom"></td></tr>
		<tr><th>Adresse</th><td><input type="text" size="30" name="adresse" id="adresse"></td></tr>
		<tr><th>produit</th><td><input type="text" size="30" name="produit" id="produit"></td></tr>
		<tr><th>quantite</th><td><input type="text" size="30" name="quantite" id="quantite"></td></tr>
		<tr><th>date AAAA-MM-JJ</th><td><input type="text" size="30" name="date" id="date"></td></tr>
	</table>
<br>
<input type="submit" value="commander" id="button"> &nbsp;&nbsp;<input type="reset" value="Effacer" id="button">
</form>
</center>
<?php
	
		if( !empty($_POST['cin']) and !empty($_POST['nom']) and !empty($_POST['adresse'])and !empty($_POST['produit'])and !empty($_POST['quantite']) and !empty($_POST['quantite']))
		{
		// conexion pour appeler la  fonction fonctions.php
		connexion();
		
		
				$sql4="insert into commandes( cin, nom, adresse , produit ,quantite,date) values('".$_POST['cin']."','".$_POST['nom']."','".$_POST['adresse']."','".$_POST['produit']."','".$_POST['quantite']."','".$_POST['date']."')";
				$bdd->exec($sql4);
				//deconnexion();
			echo "<center>La commande  est ajouté avec succés </center>";
			
			
		}
		else
		echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
	

	?>
	</div >
</body>
</html>