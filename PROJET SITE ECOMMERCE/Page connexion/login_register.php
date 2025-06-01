<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" type="text/css" href="style_error.css">
  <title>Sign in & Sign up Form</title>
</head>
<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="verifier_profil.php" class="sign-in-form" method="POST">
          <h2 class="title">Se connecter</h2>
          <?php if (isset($_POST['error'])) { ?>
            <p class="error"><?php echo $_POST['error']; ?></p>
          <?php } ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="nom d'utilisateur" name="username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="password"/>
          </div>
          <input type="submit" value="Connection" class="btn solid" />
        </form>
        <form action="add_user.php" class="sign-up-form" method="post">
          <h2 class="title">S'inscrire</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Nom d'utilisateur" name="nom"/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" name="mdp"/>
          </div>
          <input type="submit" class="btn" value="Inscription" name="submit" />
          <p class="social-text">Ou inscrivez vous par</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Nouveau sur le site ?</h3>
          <p>
            Enregistrez-vous
          </p>
          <button class="btn transparent" id="sign-up-btn">
            S'inscrire
          </button>
        </div>
        <img src="img/porc3-removebg-preview.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Vous faitez deja partie des notres?</h3>
          <p>
            Connectez vous tout simplement
          </p>
          <button class="btn transparent" id="sign-in-btn">
          
            Se connecter
          
          </button>
        </div>
        <img src="img/poules_xd-removebg-preview.png" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="app.js"></script>
</body>
</html>