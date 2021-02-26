<?php 
$conn=mysqli_connect('localhost','root','','lolipad');

if(isset($_POST['enregistrer']))
{
//$COUVERTURE=$_POST["couverture"];
$TITRE=htmlentities($_POST["titre"], ENT_QUOTES);
$DESCRIPTION=htmlentities($_POST["description"], ENT_QUOTES);
$MOTSCLES=htmlentities($_POST["motscles"], ENT_QUOTES);
$VOTREHISTOIRE=htmlentities($_POST["votrehistoire"], ENT_QUOTES);
// var_dump($_POST);

$req="INSERT INTO histoires (titre ,description , motscles , votrehistoire ) values('$TITRE' ,'$DESCRIPTION' ,'$MOTSCLES' ,'$VOTREHISTOIRE')";

$res=mysqli_query($conn,$req);

var_dump($res);

if ($res){
    header("location:nouvellehistoire.php");
}

//var_dump($conn);

//   header('Location: acceuil.php ');
};
// var_dump($_POST);

?>
