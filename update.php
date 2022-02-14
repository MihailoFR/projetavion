<?php

    $bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');
    $req = $bdd->prepare('UPDATE vol SET date_depart=:date_depart,heure_depart=:heure_depart,heure_arrivee=:heure_arrivee,ref_pilote=:ref_pilote,ref_avion=:ref_avion where id_vol=:id_vol' );
    $req->execute(array(
        'date_depart'=> $_POST['date_depart'],
        'heure_depart'=> $_POST['heure_depart'],
        'heure_arrivee'=> $_POST['heure_arrivee'],
        'ref_pilote'=> $_POST['ref_pilote'],
        'ref_avion'=> $_POST['ref_avion']));


?>