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
            <input type="text" class="input questionSecréte" placeholder=" Question secréte " name="QuesSecrete" value="">
            <input type="text" class="input reponseSecrete" placeholder="Réponse question secréte" name="ResSecrete" required>
            <input type="submit" class="submit submitInscription" name="submitInscription" value="S'inscrire">
        </form>
    </section>
    <?php

    require("template/footer.php");
    ?>
</body>

</html>