

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>acceuil</title>
</head>
<body>
<?php 

$conn=mysqli_connect('localhost','root','','formation');

$res=mysqli_query($conn,"select * from lolipad order by nom");

if ($res)
{
    while($PRE=mysqli_fetch_array($res)) 
    {
        echo $PRE ['prenom'];
    }
}else {echo("erreure dans lexecution de la requete");
       echo("le message derreure est : mysql_error($conn)");
}


?>