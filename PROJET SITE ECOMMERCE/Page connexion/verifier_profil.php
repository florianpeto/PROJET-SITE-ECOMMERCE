<?php //recuperation des donnees depuis le formualire html
    //preparation des donnes de connexion à la base de donnee
$serveur="localhost";
$login="root";
$pass="";
$bd="commerce";
try{
    $connexion = new PDO("mysql:host=$serveur; dbname=$bd",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $nom= $_POST['username'];
        $mdp= $_POST['password'];
        $sql="SELECT * from utilisateurs where Nom_user = '".$nom."'AND Mdp_user='".$mdp."' limit 1";
      $selection=$connexion->prepare($sql);
      $selection->execute();
        $result= $selection->fetchAll(PDO:: FETCH_ASSOC);
        if($result!=null)
        {
            header("location: ../Page Accueil/Nouveau dossier/formation.html");
            echo "Bienvenu a vous ";

        }
        else{
            echo "aucun compte correspondant n a été trouvé";
            
        }
    
}catch(PDOException $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";

}
catch (Exception $e)
{
    $message=addslashes('erreur: '.$e->getMessage());
    echo "<script>alert('$message')</script>";}
?>