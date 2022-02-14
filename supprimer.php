<?php

$bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');
$req = $bdd->prepare('DELETE * FROM vol WHERE id_vol =: id_vol');
$req->execute(array(
    'id_vol' => $_POST['id_vol'],
));


$res = $req->fetch();

?>