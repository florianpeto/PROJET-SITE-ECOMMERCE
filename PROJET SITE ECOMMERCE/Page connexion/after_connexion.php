<?php 
session_start();

if (isset($_SESSION['ID_user']) && isset($_SESSION['Nom_user'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style_error.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['Nom_user']; ?></h1>
     <a href="se_deconnecter.php">Se deconnecter</a>
</body>
</html>

<?php 
}else{
     header("Location: login_register.php");
     exit();
}
 ?>