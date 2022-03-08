<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');
$req = $bdd->prepare('UPDATE utilisateur SET nom=:nom,prenom=:prenom,cp=:cp,ville=:ville,adresse=:adresse,mail=:mail,nom_utilisateur=:nom_utilisateur,mdp=:mdp where id_utilisateur=:id_utilisateur');
$req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'cp' => $_POST['cp'],
    'ville' => $_POST['ville'],
    'adresse' => $_POST['adresse'],
    'mail' => $_POST['mail'],
    'nom_utilisateur' => $_POST['nom_utilisateur'],
    'mdp' => $_POST['mdp'],
    'id_utilisateur'=> $_POST['id_utilisateur']));


header('Location: index.php');
?>