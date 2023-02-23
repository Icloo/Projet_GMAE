<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include('template/link.php'); ?>


    <title>Page login</title>
</head>
<body class="bodyLoginInscription">
  <section class="secLogin">
    <form action="" method="" class="form formLogin">
      <div>
      <img src="assets/logo_GMAE-1.png" alt="" class="GMAE-Logo"></div>
      <input type="text" name="username" class="input inputUser" placeholder="Pseudo" required>
      <input type="text" name="password" class="input inputPass" placeholder="Mot de passe" required>
      <!-- <label for="">Nouvel utilisateur? <a href="inscription.php">S'inscrire</a></label> -->
      <input type="submit" name="submit" value="Connexion" class="submit submitLogin">
    </form>
  </section>
 
</body>
</html>