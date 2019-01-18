<?php 

include("connexion.inc.php");
$nom=$_POST['nom'];
$passe=$_POST['passe'];
$query="SELECT * FROM utilisateur WHERE pseudo=:pseudo AND mdp=:passe";
$prep=$pdo->prepare($query);
$prep->bindValue(':nom', $nom);
$prep->bindValue(':passe', $passe);
$prep->execute();

$nbr=$prep->rowCount();

if($nbr==0){

	header("Location:..\connection.php");

}
else{

	$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
	setcookie('nom', $nom, time()+60*60*24*365, '/', $domain, false);
	echo $_COOKIE['nom'];
	header("Location:..\index.php");

}


?>

