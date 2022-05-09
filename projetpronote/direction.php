<?php

class direction
{

    private $mail;
    private $mdp;
    public function __construct( )
    {


    }

    public function connexion()
    {
        session_start();

        $bdd = new PDO('mysql:host=localhost;dbname=pronote;charset=utf8', 'root', '');

        $req = $bdd->prepare('SELECT * FROM direction WHERE mail = :mail AND mdp = :mdp');
        $req->execute(array(
            'mail' => $_POST['mail'],
            'mdp' => $_POST['mdp']
        ));

        $res = $req->fetch();

        if ($res) {
            $_SESSION['mail'] = $res['mail'];
            $_SESSION['mdp'] = $res['mdp'];
            header('Location: indexDirection.php');
        } else {
            header('Location: connexiondir.html');
        }

    }
}