<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>nouvelle histoire</title>
</head>
<body class="I">


 <nav>
 <ul>
 <li><a href="acceuil.php">Accueil</a></li>
 <li><a href="bibliotheque.php">bibliotèque</a></li>
 <li><a href="nouvellehistoire.php">nouvelle histoire</a></li>
 <li><a href="profil.php">profil</a></li>
 </ul>
 </nav>
 <br><br><br><br><br><br>

 <form align="center" method="POST" action="traitementnouvellehistoire.php">
  
   <br><br>

   <label style="color: darkorange; font-size:1cm"> titre</label><br><br>
   <textarea id= "titre" name="titre" rows="3" cols="70"> </textarea>
   <br><br>

   <label style="color: darkorange;font-size:1cm"> description</label><br><br>
   <textarea id="description" name=" description" rows="10" cols="70"> </textarea>
   <br><br>

   <label style="color: darkorange ;font-size:1cm;"> mots clés</label><br><br>
   <textarea  id="motscles" name="motscles"rows="10" cols="70" ></textarea>
   <br><br>

   <label style="color: darkorange;font-size:1cm"> votre histoire</label><br><br>
   <textarea  id="votrehistoire" name="votrehistoire" rows="30" cols="70" ></textarea>

   <br><br>

   <input class="btn" type="submit" name="enregistrer" value="enregistrer"> 
	 <br><br>

  </form>

   
</body>

</html>