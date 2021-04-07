<?php

$conn=mysqli_connect('localhost','root','','romain') or die(mysqli_error());

if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}
echo 'Connexion réussie';

echo '<br>';

echo $_POST['Field'];
$Field=$_POST['Field'];


$req="INSERT INTO chiffre (Field) values ('$Field')";

$res=mysqli_query($conn,$req);

?>