<?php
include('connexion.php');

$nom=$_POST['s_nom'];
$prenom=$_POST['s_prenom'];
$date=$_POST['s_date'];
$ville=$_POST['s_ville'];
$sexe=$_POST['s_sexe'];
$option=$_POST['s_option'];
if( empty($nom) || empty($prenom) || empty($option))
{
    echo '<script> alert("Veuillez entrer les donnees")</script>';
    
}else{
    $requete="INSERT INTO etudiant values( 0,'$nom',$prenom,'$date','$ville','$sexe','$option')";
    if($bdd->query($requete)==true )
    {
       echo '<script> alert("Enregistrement effectué avec succès")</script>';
       header('refresh:1, url=inscriptionDec.php');
    }
}

?>