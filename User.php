<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link.php'); ?>

    <title>Page inscription</title>
</head>

<body >
<?php require('template/header.php'); ?>

    <section class="secModifier">
        <form class="form formModification">
            <input type="text" class="input" placeholder="Nom" name="name" required>
            <input type="text" class="input" placeholder="Prénom" name="lastname" required>
            <input type="text" class="input" placeholder="Pseudo" name="username" required>
            <div class="divPassModifier">
            <label for="#" class="text-Modifier">changer de mot de passe:</label>
            <input type="password" class="input" placeholder="Mot de passe" name="password" required>
        </div>
            <input type="text" class="input questionSecréte" placeholder=" Question secréte " name="QuesSecrete" value="">
            <input type="text" class="input reponseSecrete" placeholder="Réponse question secréte" name="ResSecrete" required>
            <input type="submit" class="submit submitModifier" name="submitModifier" value="Modifier">
        </form>
    </section>

 
    <?php
    
    require("template/footer.php");
    ?>
</body>

</html>