<?php

// appel de function
$nom= $_POST['nom'];
$email= $_POST['email'];
$mdp= $_POST['mdp'];


$connection = mysqli_connect('localhost', 'root', '','commerce');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'commerce');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$query = "INSERT INTO `utilisateurs` (Nom_user, Email_user, Mdp_user) VALUES ('$nom','$email','$mdp')";

if($result = mysqli_query($connection, $query)){
    echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Utilisateur enregistré avec succès</h3>
         
         <div class='customer-details'>
            <p> votre nom : <span>" . $nom . "</span> </p>
            <p> votre email : <span>" . $email . "</span> </p>
            <p> Votre mot de passe : <span>" . $mdp . "</span> </p>
            
         </div>
            <a href='login_register.php' class='btn'>Connectez-vous</a>
         </div>
      </div>
      <style>
      .order-message-container{
        position: fixed;
        top:0; left:0;
        height: 100vh;
        overflow-y: scroll;
        overflow-x: hidden;
        padding:2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1100;
        background-color: var(--dark-bg);
        width: 100%;
     }
     
     .order-message-container::-webkit-scrollbar{
        width: 1rem;
     }
     
     .order-message-container::-webkit-scrollbar-track{
        background-color: var(--dark-bg);
     }
     
     .order-message-container::-webkit-scrollbar-thumb{
        background-color: var(--blue);
     }
     
     .order-message-container .message-container{
        width: 50rem;
        background-color: var(--white);
        border-radius: .5rem;
        padding:2rem;
        text-align: center;
     }
     
     .order-message-container .message-container h3{
        font-size: 2.5rem;
        color:var(--black);
     }
     
     .order-message-container .message-container .order-detail{
        background-color: var(--bg-color);
        border-radius: .5rem;
        padding:1rem;
        margin:1rem 0;

        .order-message-container .message-container .order-detail span{
            background-color: var(--white);
            border-radius: .5rem;
            color:var(--black);
            font-size: 2rem;
            display: inline-block;
            padding:1rem 1.5rem;
            margin:1rem;
         }
         
         .order-message-container .message-container .order-detail span.total{
            display: block;
            background: var(--red);
            color:var(--white);
         }
         
         .order-message-container .message-container .customer-details{
            margin:1.5rem 0;
         }
         
         .order-message-container .message-container .customer-details p{
            padding:1rem 0;
            font-size: 2rem;
            color:var(--black);
         }
         
         .order-message-container .message-container .customer-details p span{
            color:var(--blue);
            padding:0 .5rem;
            text-transform: none;
     }
      </style>
      ";
}
   
    
   
   

?>