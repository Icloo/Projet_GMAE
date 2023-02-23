<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link.php'); ?>

    <title>Page inscription</title>
</head>

<body class="bodyLoginInscription">
<?php require('template/header.php'); ?>

    <section class="secInscriription">
        <!-- <h2>Inscription</h2> -->
        <form class="form formInscription">
            <input type="text" class="input" placeholder="Nom" name="name" required>
            <input type="text" class="input" placeholder="Prénom" name="lastname" required>
            <input type="text" class="input" placeholder="Pseudo" name="username" required>
            <input type="text" class="input" placeholder="Mot de passe" name="password" required>
            <label for="secrete" class="secreteQuestion">secréte question</label>
            <input type="text" id="secrete" name="secrete" class="input inputSecrete" placeholder="Réponse question secréte" required>
            <input type="submit" name="submitInscription" value="S'inscrire" class="submit submitInscription">
        </form>
    </section>
    <?php

    require("template/footer.php");
    ?>
</body>

</html>