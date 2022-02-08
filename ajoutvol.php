<?php
//var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');
$req = $bdd->prepare( 'INSERT INTO vol( date_depart,heure_depart,heure_arrivee, ref_pilote,ref_avion) VALUES (:date_depart,:heure_depart,:heure_arrivee, :ref_pilote,:ref_avion )' );

session_start();
$req->execute(array(
    'date_depart'=> $_POST['date_depart'],
    'heure_depart'=> $_POST['heure_depart'],
    'heure_arrivee'=> $_POST['heure_arrivee'],
    'ref_pilote'=> $_POST['ref_pilote'],
    'ref_avion'=> $_POST['ref_avion']));

