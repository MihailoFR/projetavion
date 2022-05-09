<?php

//var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=pronote;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO devoir(nom,ref_matiere) VALUES (:nom,:ref_matiere)');

session_start();
$req->execute(array(
    'nom' => $_POST['nom'],
    'ref_matiere' => $_POST['ref_matiere']));