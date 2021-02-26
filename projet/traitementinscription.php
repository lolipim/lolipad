<?php 
$conn=mysqli_connect('localhost','root','','lolipad') or die(mysqli_error($link));


$NOM=$_POST["nom"];
$PRE=$_POST["prenom"];
$EML=$_POST["eml"];
$PWD=$_POST["pwd"];

   $req="INSERT INTO `inscription` ( nom, prenom, email, motdepasse) values('$NOM','$PRE','$EML','$PWD')";

   $res=mysqli_query($conn,$req);

   if($res){
   header('Location: acceuil.php');
}

// var_dump($_POST);

?>

 
