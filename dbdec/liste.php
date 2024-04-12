<?php
include('connexion.php');
//on ecrit la reaquete
$requete = "SELECT * FROM etudiant";
$reponse = $bdd->query($requete);
$donnee = $reponse->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <button><a href="inscriptionDec.php">Nouveau etudiant</a></button>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Datenais</th>
                <th>Ville</th>
                <th>Sexe</th>
                <th>Option</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donnee as $ligne) { ?>
                <tr>
                    <td><?= $ligne['nom'] ?></td>
                    <td><?= $ligne['prenom'] ?></td>
                    <td><?= $ligne['datenais'] ?></td>
                    <td><?= $ligne['ville'] ?></td>
                    <td><?= $ligne['sexe'] ?></td>
                    <td><?= $ligne['codeOpt'] ?></td>
                    <td> <button> <a href="modifier.php?codeOpt=<?= $ligne['codeOpt'] ?>">Modifier</a></button>
                        <button>supprimer</button>
                    </td>
                <?php } ?>
                </tr>
        </tbody>
    </table>
</body>

</html>