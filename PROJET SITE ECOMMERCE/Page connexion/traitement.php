<?php

// appel de function
$Nom= $_POST['Nom'];
$email= $_POST['email'];
$plat= $_POST['plat'];
$nombre= $_POST['nombre'];
$date= $_POST['date'];

$connection = mysqli_connect('localhost', 'root', '','resto');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'resto');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$query = "INSERT INTO `client` (Nom_client,Email_client,plat_a_reserve,numbre_plat,date) VALUES
     ('$Nom','$email','$plat','$nombre','$date')";
     
    $result = mysqli_query($connection, $query);
   
    header('Location: reservation.html');
     echo"reservation pris en compte"
   

?>