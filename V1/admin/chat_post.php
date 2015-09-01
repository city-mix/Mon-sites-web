<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=v1;charset=utf8', 'root', '1478965');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO chatbev (num_message, id, message) VALUES(?, ?,?)');
$req->execute(array($_POST['num_message'], $_POST['id'], $_POST['message']));

// Redirection du visiteur vers la page du commerce
header('Location: reglage.php');
?>
