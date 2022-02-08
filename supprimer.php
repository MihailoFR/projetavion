<?php
$servname = "localhost"; $dbname = "projetavion"; $user = "root"; $pass = "";

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*Supprime l'entrée avec l'id = 8
    $user_id = 8;
    $req = $dbco->prepare("DELETE FROM users WHERE id = :user_id");
    $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $req->execute();
    */

    $req = $dbco->prepare("DELETE FROM vol WHERE id = :id_vol");
    $req->bindParam(':id_vol', $_POST[id_vol], PDO::PARAM_INT);
    $req->execute();
    echo 'Données supprimées';
}

catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>
</body>
</html>