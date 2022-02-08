<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=projetavion;charset=utf8', 'root', '');

$req = $bdd->prepare('SELECT * FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur AND mdp = :mdp');
$req->execute(array(
    'nom_utilisateur' => $_POST['nom_utilisateur'],
    'mdp' => $_POST['mdp']
));

$res = $req->fetch();

if ($res) {
    $_SESSION['nom_utilisateur'] = $res['nom_utilisateur'];
    $_SESSION['mdp'] = $res['mdp'];
    echo "Bienvenue";
    header('Location: indConnecte.php');
} else {
    echo "Erreur,reesayer";
    header('Location: index.php');
}

?>
