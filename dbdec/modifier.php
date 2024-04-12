<?php
include('connexion.php');
$requete = "SELECT* FROM optionc order by codeOpt";
$reponse = $bdd->query($requete);
$donne = $reponse->fetchAll();

$code=$_GET['codeOpt'];
$requete2 ="SELECT * FROM etudiant where codeOpt='$code'";
$reponse2=$bdd->query($requete2);
$donnee2=$reponse2->fetchAll();
foreach($donnee2 as $option){
$etu=$option['codeOpt'];
}
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
        <form action="validermodif.php" method="POST">
        <input hidden type="text" name="s_idetu"  value="<?= $option['idetu'] ?>">
            <label for="">Nom</label>
            <input type="text" value="<?= $option['nom'] ?>" name="s_nom"><br><br>
            <label for="">Prenom</label>
            <input type="text" value="<?= $option['prenom'] ?>" name="s_prenom"><br><br>
            <label for="">Date de naissance </label>
            <input type="date" value="<?= $option['datenais'] ?>" name="s_date"><br><br>
            <label for="">Ville</label>
            <input type="text" value="<?= $option['ville'] ?>" name="s_ville"><br><br>
            <label for="">Sexe</label>
            <input type="text" value="<?= $option['sexe'] ?>" name="s_sexe"><br><br>
            <label for="">Option</label>
            <select name="s_option" id="">
                <option value="">SIL</option>
                <option value="">RIT</option>
                <option value="">AGO</option>
            </select><br><br>
            <button type="submit">Enregistrer</button>
            <button type="reset">suprimer</button>


        </form>
    </fieldset>
</body>

</html>