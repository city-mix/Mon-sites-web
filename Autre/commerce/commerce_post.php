<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=commerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO commerce (id, nom, rue, postal, ville, description, mail, numero, site, activite, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['id'], $_POST['nom'], $_POST['rue'], $_POST['postal'], $_POST['ville'], $_POST['description'], $_POST['mail'], $_POST['numero'], $_POST['site'] ,$_POST['activite'], $_POST['lundi'], $_POST['mardi'], $_POST['mercredi'],$_POST['jeudi'], $_POST['vendredi'], $_POST['samedi'], $_POST['dimanche']));

// Redirection du visiteur vers la page du commerce
header('Location: listing.php');
?>