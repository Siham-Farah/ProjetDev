<!doctype html>
<html>
<head>
<title>Pour Homme </title>
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
	
	<form action="homme.php" method="POST">
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
	<img src="s.png" title="imag" width="30" height="30" alt="photo">
	<h3 id="jsu" > Salutations à tous les Hommes qui rejoignent notre famille en ligne !  </h3>
</div>

<!-- div3 pour le bloc1 en verticale !-->
<div id="div3">


	<img class="img" src="h1.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 31</p>
	<p>249 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>  
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h2.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 32</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	 <img class="img" src="h3.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 33</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="h4.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 34</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h5.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 35</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 

	<img class="img" src="h6.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 36</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
	
	<img class="img" src="h7.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 37</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h8.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 38</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
	 
	 <img class="img" src="h9.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 39</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h10.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 40</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	
</div>	



<!-- div4 pour le bloc2 en verticale !-->
 <div id="div4">
 
	<img class="img" src="h11.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 41</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h12.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 42</p>
	<p>249 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h13.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 43</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="h14.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 44</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>  
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="h15.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 45</p>
	<p>109 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>	

	<img class="img" src="h16.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 46</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h17.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 47</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h18.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 48</p>
	<p>149 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h19.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 49</p>
	<p>100 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h20.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 50</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
</div>

<!-- div5 pour le bloc3 en verticale !-->
<div id="div5">

	<img class="img" src="h21.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 51</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	<img class="img" src="h22.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 52</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	 
	<img class="img" src="h23.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 53</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	

	<img class="img" src="h24.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 54</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h25.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 55</p>
	<p>299 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h26.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 56</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p>
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h27.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 57</p>
	<p>89 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="h28.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 58</p>
	<p>299 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>
	
	<img class="img" src="h29.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 59</p>
	<p>99 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>

	<img class="img" src="h30.jpeg"  width="200" height="200" >
	<p class="bc" >Produit: 60</p>
	<p>199 DH</p> 
	<p > <input type="button" value="acheter" id="button" onclick="window.location.href='cmnd.php';"> </p> 
	<p> <img id="sp" src="separateur.jpeg" width ="200" height="5" > </p>		
	 
</div>
</div>

</body>
</html>












