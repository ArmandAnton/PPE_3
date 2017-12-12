<?php
include_once('inc/init.php');
error_reporting(E_ALL);


$DAO_Adherent = new DAO_Adherent;

$email_log=isset($_POST['email_log']) ? $_POST['email_log'] : '';
$email_reg=isset($_POST['email_reg']) ? $_POST['email_reg'] : '';
$password_reg=isset($_POST['password_reg']) ? $_POST['password_reg'] : '';
$password_log=isset($_POST['password_log']) ? $_POST['password_log'] : '';
$conf_password_reg=isset($_POST['conf_password_reg']) ? $_POST['conf_password_reg'] : '';
$submit_log = isset($_POST['submit_log']);
$submit_reg = isset($_POST['submit_reg']);


/* Connexion */
if($submit_log) {

	$DAO_Adherent = new DAO_Demandeur;
	$DAO_Adherent->find($email_log,$password_log);



}
/* Inscription */
if($submit_reg) {
	
	if($password_log == $password_reg) {

	}

}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription - Connexion</title>
</head>
<body>
	<form action="<?php ($_SERVER['PHP_SELF']);?>" name="Form1" method="POST">
		<div>Connexion: </div><br/>
		Adresse email: <input type="email" name="email_log" placeholder=" Adresse email"><br/><br/>
		Mot de passe: <input type="password" name="password_log" placeholder=" Mot de passe">
		<input type="submit" name="submit_log" value="Connexion">
	</form>
	<p><a href="mdplost.php">Mot de passe oublié</a></p>
	<form action="<?php ($_SERVER['PHP_SELF']);?>" name="Form2" method="POST">
		<div>Inscription: </div><br/>
		Adresse email: <input type="email" name="email_reg" placeholder=" Adresse email"><br/><br/>
		Mot de passe: <input type="password" name="password_reg" placeholder=" Mot de passe"><br/><br/>
		Confirmation mot de passe: <input type="password" name="conf_password_reg" placeholder="Mot de passe">
		<input type="submit" name="submit_reg" value="Inscription">
	</form>



</body>
</html>