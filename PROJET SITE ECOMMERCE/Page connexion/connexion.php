<?php 
session_start(); 
include "BD_connexion.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login_register.php?error=Le nom d'utilisateur est requis");
	    exit();
	}else if(empty($pass)){
        header("Location: login_register.php?error=Le mot de passe est requis");
	    exit();
	}else{
		$sql = "SELECT * FROM utilisateurs WHERE Nom_user='$uname' AND Mdp_user='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Nom_user'] === $uname && $row['password'] === $pass) {
            	$_SESSION['Nom_user'] = $row['Nom_user'];
            	$_SESSION['Email_user'] = $row['Email_user'];
            	$_SESSION['ID_user'] = $row['ID_user'];
            	header("location: after_connexion.php");
		        exit();
            }else{
				header("Location: login_register.php?error=Mot de passe ou Nom d'utilisateur incorrect");
		        exit();
			}
		}else{
			header("Location: login_register.php?error=Mot de passe ou Nom d'utilisateur incorrect");
	        exit();
		}
	}
	
}else{
	header("Location: login_register.php");
	exit();
}