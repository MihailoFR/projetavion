<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO utilisateur ( nom, prenom, cp, ville, adresse, mail, nom_utilisateur, mdp) VALUES (:nom, :prenom, :cp, :ville, :adresse, :mail,:nom_utilisateur, :mdp )');
$req->execute(array(
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'cp' => $_POST['cp'],
    'ville' => $_POST['ville'],
    'adresse' => $_POST['adresse'],
    'mail' => $_POST['mail'],
    'nom_utilisateur' => $_POST['nom_utilisateur'],
    'mdp' => $_POST['mdp']));


$res = $req->fetchAll();
header('Location: index.php');
