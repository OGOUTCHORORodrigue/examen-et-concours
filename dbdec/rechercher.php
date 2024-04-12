<?php
include 'connexion.php';

$req = "SELECT * from etudiant"; // preparer la requete
$reponse = $bdd->query($req); // excecuter la requete
$donnee = $reponse->fetchAll(); //recuperer les donnees



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container  bg-white shadow p-5 m-5 rounded-2">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="input-group mb-3">
                        <label class="input-group-text">Dansoption :</label>
                        <select class="form-select" name="s_code">
                            <?php foreach ($donnee as $optionc) { ?>
                                <option value="<?= $optionc['codeOpt'] ?>">
                                    <?= $optionc['codeOpt'] ?>
                                </option>
                            <?php   } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="resech"  class="btn btn-secondary input-group-text" name="rechercher">Rechercher</button>
                </div>

            </div>
        </form>
        <hr>

        <h1 class="h3">Liste des projets
        </h1>
        <div class="row my-5  ">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>sexe</th>
                        

                    </thead>
                    <tbody>
                        <?php if (isset($_POST['rechercher'])) {

                            $donneeselected = $_POST['s_code'];

                            $req2 = "SELECT * from etudiant where codeOpt ='$donneeselected' "; // preparer la requete
                            $reponse2 = $bdd->query($req2); // excecuter la requete
                            $projets = $reponse2->fetchAll(); //recuperer les donnees

                            foreach ($projets as $etudiant) { ?>
                            <tr>
                                <td> <?= $etudiant['nom'] ?></td>
                                <td> <?= $etudiant['prenom'] ?></td>
                                <td> <?= $etudiant['sexe'] ?></td>
                               
                            </tr>
                            <?php   } ?>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>

    <script src="assets/js/bootstrap.js"></script>
</body>

</html>