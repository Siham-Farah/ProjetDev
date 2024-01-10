<html>
<head>
<title>Ajouter un message</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
 function verif() {
	 if (document.getElementById("NP").value == "") { alert("Veuillez taper votre nom et prenom!"); return false; }
	 if (document.getElementById("cin").value == "") { alert("Veuillez taper votre CIN!"); return false; }
	 var v = 1;
	 var taille = document.getElementById("cin").value.length;
	 for (i = 0; i < taille;i++) { if( taille != "8") v = -1;}
	 if (v == -1) {alert("Le numero de votre CIN est incorrect!"); return false; }
 
 if (document.getElementById("eml").value == "") { alert("Veuillez entrer votre adresse email!"); return false;}
 if (document.getElementById("eml").value.indexOf('@') == -1) { alert("Adresse e-mail incorrecte!"); return false; }
 
 
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
<h3> Nous sommes ravis de vous informer que nous lançons un tout nouveau programme d'informations exclusives !
 En vous inscrivant à notre newsletter, vous serez les premiers à recevoir des informations sur nos promotions spéciales,
 des offres exclusives et les derniers produits sensationnels que nous avons à vous offrir. 
 Soyez aux premières loges pour découvrir ce que nous avons de mieux à vous offrir !
 </h3><h3> "Inscrivez-vous pour découvrir notre site"

</h3>
<form action="inscription.php" method="POST" onSubmit="verif()" >
	<table border="1" bgcolor="black" class="form">
		
		<tr><th>cin:</th><td><input type="text" size="30" name="cin" id="cin" ></td></tr>
		<tr><th>Nom:</th><td><input type="text" size="30" name="nom" id="NP" ></td></tr>
		<tr><th>email:</th><td><input type="text" size="30" name="email" id="eml" ></td></tr>
	</table>
<br>
<input type="submit" value="valider" id="button"> &nbsp;&nbsp;<input type="reset" value="Effacer" id="button">
</form>
</center>
<?php
	if(isset($_POST['cin']) and isset($_POST['nom'])  and isset($_POST['email']) )
	{
		if(!empty($_POST['cin']) and !empty($_POST['nom'])  and !empty($_POST['email']) )
		{
		// conexion pour appeler la  fonction fonctions.php
		connexion();
		//ref='".$_POST['ref']."'"  pour entree une donee
		$sql1="select * from clients where cin='".$_POST['cin']."'";
		//query exicute la requete  (utiliser avec select)
		$reponse = $bdd->query($sql1);
		// fetch pour parcourir ligne par ligne 
	    $donnees = $reponse->fetch();
		// empty( donnee) --> donnee=vide
			if(empty($donnees))
			{   
				$sql2="insert into clients(cin, nom, email) values('".$_POST['cin']."','".$_POST['nom']."','".$_POST['email']."')";
				$bdd->exec($sql2);
				//deconnexion();
			echo "<center>Le client ".$_POST['nom']." est ajouté avec succés</center>";
			
			}
			else
			echo "<center>Le client existe déja !!!</center>";
		}
		else
		echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
	} 

	?>
	</div >
</body>
</html>