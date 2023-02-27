<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link.php'); ?>

    <title>Page inscription</title>
</head>

<body class="bodyAdmin">
<?php require('template/header.php'); ?>

    <div class="bodyModification">
        <div class="adminInfo1">
            <section class="secModifier">
                <form class="form formModification adminModif">
                    <h2 class="adminTitles">Modification du profil</h2>
                    <input type="text" class="input" placeholder="admin" name="name" required>
                    <div class="divPassModifier divModifier">
                        <label for="#" class="text-Modifier">changer de mot de passe:</label>
                        <input type="password" class="input" placeholder="Mot de passe" name="password" required>
                    </div>
                    <input type="text" class="input questionSecréte" placeholder=" Question secréte " name="QuesSecrete" value="">
                    <input type="text" class="input reponseSecrete" placeholder="Réponse question secréte" name="ResSecrete" required>
                    <input type="submit" class="submit submitModifierAdmin" name="submitModifierAdmin" value="Modifier">
                </form>
            </section>
        </div>

        <div class="adminInfo2">

            <section class="secModifier">
                <form class="form formModification adminModif">
                    <h2 class="adminTitles">Ajout d’un compte utilisateur</h2>
                    <input type="text" class="input" placeholder="Pseudo" name="username" required>
                    <input type="text" class="input" placeholder="Mot de passe" name="password" required>
                    <input type="submit" class="submit submitAjouterCréer" name="submitCréerCompte" value="Ajouter ">
                </form>
            </section>

            <section class="secModifier">
                <form class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Ajout d’un partenaire
                    </h2>
                    <input type="text" class="input questionSecréte" placeholder=" Nom" name="nomPartenaire" value="">
                    <input type="text" class="input reponseSecrete" placeholder="Description du partenaire" name="ajouterPartenaire" required>
                    <input type="submit" class="submit submitAjouterCréer" name="submitAjouter" value="Ajouter ">
                </form>
            </section>
            <section class="secModifier">
                <form class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Suppression d’un compte utilisateur
                    </h2>
                    <div class="divPartenaireUtilisateur"></div>
                    <label for="#" class="textSup1">Saisir l’identifiant du compte utilisateur:</label>
                    <input type="text" class="input" name="SupprimerUtilisateur" required>
                    <input type="submit" class="submit submitSupprimer" name="submitSupprimerUtilisateur" value="Supprimer">
                </form>
            </section>
            <section class="secModifier">
                <form class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Suppression d’un partenaire
                    </h2>
                    <div class="divPartenaireModifier"></div>
                    <label for="#" class="textSup2">Saisir l’identifiant du partenaire :</label>
                    <input type="text" class="input" name="Supprimer" name="submitSupprimerPartenaire" required>
                    <input type="submit" class="submit submitSupprimer" name="submitSupprimerPartenaire" value="Supprimer">
                </form>
            </section>
        </div>
    </div>


        <?php
    require("template/footer.php");
        ?>
</body>

</html>