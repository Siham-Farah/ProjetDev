<!doctype html>
<html>

<head>
<title>  Pour Femme </title>
<link  rel="stylesheet" href="index.css" >
</head>

<body>
<!-- ---------------------------------------------------------------------------------------------------------------------------  !-->
<?php 

// include('fonction.php) faire appel a la fonctions car on a une interaction avec la bdd 
include('fonctionss.php');
?>
		<div id="globale">
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
<!-- input de recherche !-->
<center>
	
	<form action="femme.php" method="POST">
		<table  >
		<tr>
		<td><input type="text" name="mc" size="100px" ></td> <td><input type="submit" value="Rechercher"> 
		<input type="reset" value="Annuler"></td>
		</tr>
		</table>
		<br>
		
	</form>
</center>
 <?php
	if(isset($_POST['mc'])) // variable existant
	{
		if(!empty($_POST['mc'])) //champs non vide
		{
			connexion();
			$sql1="select * from produits where id_prod='".$_POST['mc']."' or nom_prod='".$_POST['mc']."'" ;
			$reponse = $bdd->query($sql1);
			$nbrDeLigne = $reponse->rowCount();
			echo "<center> <b>Il y a ".$nbrDeLigne." Produit(s) ,vous pouvez chercher 
			le numero de produit sur le menu por le voir et commonder </b></center>";
?>
			<center><table border="1" bgcolor="black" class="form">
			    <tr ><th>produit</th><th>nom</th><th>prix_unitaire</th>
			<?php
				while($enreg = $reponse->fetch())
				{
				echo "<tr ><td>".$enreg['id_prod']."</td>";
				echo "<td>".$enreg['nom_prod']."</td>";
				echo "<td>".$enreg['prix_unitaire']."</td>";
				echo "</tr>";
				}
			echo "</table>";
		} 
				
	} 
			?></center>
			
			

<div id="div2">
	<img  src="s.png" title="imag" width="30" height="30" alt="photo">
	<h3 id="jsu" > Salutations à tous les Femmes qui rejoignent notre famille en ligne !  </h3>
</div>
<!-- div3 pour le bloc1 en verticale !-->
<div id="div3">


	<img class="img" src="f1.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 1</p>
	<p>249 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>  
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f2.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 2</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	 <img class="img" src="f3.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 3</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	<p>

	<img class="img" src="f4.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 4</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 <p>
	<img class="img" src="f5.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 5</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 <p>
	 

	<img class="img" src="f6.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 6</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
	
	<img class="img" src="f7.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 7</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f8.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 8</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
	 
	 <img class="img" src="f9.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 9</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
<img class="img" src="f10.jpeg"  width="200" height="200" >
	</p>
	<p class="bc" >Produit: 10</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
</div>	


<!-- div4 pour le bloc2 en verticale !-->
 <div id="div4">
 
	
	<img class="img" src="f11.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 11</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f12.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 12</p>
	<p>249 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f13.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 13</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
		

	<img class="img" src="f14.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 14</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>  
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f15.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 15</p>
	<p>109 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
	 
	<img class="img" src="f16.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 16</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f17.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 17</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f18.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 18</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f19.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 19</p>
	<p>100 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f20.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 20</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
</div>

<!-- div5 pour le bloc3 en verticale !-->
<div id="div5">

	<img class="img" src="f21.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 21</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	<img class="img" src="f22.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 22</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	 <img class="img" src="f23.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 23</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	

	<img class="img" src="f24.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 24</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f25.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 25</p>
	<p>299 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f26.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 26</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f27.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 27</p>
	<p>89 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="f28.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 28</p>
	<p>299 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="f29.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 29</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="f30.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 30</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>		
	 
</div>
</div>


</body>
</html>










