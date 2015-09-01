<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>commerce ajouts</title>
    </head>
   <style>
//    form
//    {
//        text-align:center;
//    }
//  </style>
    <body>
    
    <form action="commerce_post.php" method="post">
        <p>
        <label for="id">id</label> : <input type="text" name="id" id="id" /><br />
        <label for="nom">nom</label> :  <input type="text" name="nom" id="nom" /><br />
        <label for="rue">rue</label> :  <input type="text" name="rue" id="rue" /><br />
        <label for="postal">Code postal</label> :  <input type="text" name="postal" id="postal" /><br />
        <label for="ville">Ville</label> :  <input type="text" name="ville" id="ville" /><br />
        <label for="description">Description</label> :  <input type="text" name="description" id="description" /><br />
        <label for="mail">Mail</label> :  <input type="text" name="mail" id="mail" /><br />
        <label for="numero">Numéro</label> :  <input type="text" name="numero" id="numero" /><br />
        <label for="site">Site Web</label> :  <input type="text" name="site" id="site" /><br />
        <label for="activite">Activité</label> :  <input type="text" name="activite" id="activite" /><br />

<br>
        <p>Horaire =><p>
            <label for="lundi">Lundi</label> :  <input type="text" name="lundi" id="lundi" /><br />
            <label for="mardi">Mardi</label> :  <input type="text" name="mardi" id="mardi" /><br />
            <label for="mercredi">Mercredi</label> :  <input type="text" name="mercredi" id="mercredi" /><br />
            <label for="jeudi">Jeudi</label> :  <input type="text" name="jeudi" id="jeudi" /><br />
            <label for="vendredi">Vendredi</label> :  <input type="text" name="vendredi" id="vendredi" /><br />
            <label for="samedi">Samedi</label> :  <input type="text" name="samedi" id="samedi" /><br />
            <label for="dimanche">Dimanche</label> :  <input type="text" name="dimanche" id="dimanche" /><br />
        <input type="submit" value="Envoyer" />
    </p>
    </form>

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

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT id, nom, rue, postal, ville, description, mail, numero, site, activite, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche FROM commerce ORDER BY ID DESC LIMIT 0, 5');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p>' . htmlspecialchars($donnees['id']) . ' : ' . htmlspecialchars($donnees['nom']) . ' : ' . htmlspecialchars($donnees['rue']) . ' : ' . htmlspecialchars($donnees['postal']) . ' : ' . htmlspecialchars($donnees['ville']) . ' : ' . htmlspecialchars($donnees['description']) . ' : ' . htmlspecialchars($donnees['mail']) . ' : ' . htmlspecialchars($donnees['numero']) . ' : ' . htmlspecialchars($donnees['site']) . ' : ' . htmlspecialchars($donnees['activite']) . ' : ' . htmlspecialchars($donnees['lundi']) . ' : ' . htmlspecialchars($donnees['mardi']) . ' : ' . htmlspecialchars($donnees['mercredi']) . ' : ' . htmlspecialchars($donnees['jeudi']) . ' : ' . htmlspecialchars($donnees['vendredi']) . ' : ' . htmlspecialchars($donnees['samedi']) . ' : ' . htmlspecialchars($donnees['dimanche']) . '</p>';
}

$reponse->closeCursor()
?>
    </body>
</html>