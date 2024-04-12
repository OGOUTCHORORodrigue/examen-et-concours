<?php
include('connexion.php');
$requete = "SELECT* FROM optionc order by codeOpt";
$reponse = $bdd->query($requete);
$donne = $reponse->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <fieldset>
        <legend>Renseignement</legend>
        <form action="valider.php" method="POST">
            <label for="">Nom</label>
            <input type="text" name="s_nom"><br><br>
            <label for="">Prenom</label>
            <input type="text" name="s_prenom"><br><br>
            <label for="">Date de naissance </label>
            <input type="date" name="s_date"><br><br>
            <label for="">Ville</label>
            <input type="text" name="s_ville"><br><br>
            <label for="">Sexe</label>
            <input type="text" name="s_sexe"><br><br>
            <label for="">Option</label>
            <select name="s_option" id="">
                <option value="SIL">SIL</option>
                <option value="RIT">RIT</option>
                <option value="AGOS">AGO</option>
            </select><br><br>
            <button type="submit">Enregistrer</button>
            <button type="reset">suprimer</button>


        </form>
    </fieldset>
</body>

</html>