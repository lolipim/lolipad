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

$conn=mysqli_connect('localhost','root','','lolipad');

$res=mysqli_query($conn,"select * from histoires order by motscles" );

if ($res)
{
    while($search=mysqli_fetch_array($res)) 
    {
        echo $search ['votrehistoire'];  
        
    }
}else {echo("erreur dans l_execution de la requete");
       echo("le message derreure est : mysql_error($conn)");
        }
 
         

     
?>