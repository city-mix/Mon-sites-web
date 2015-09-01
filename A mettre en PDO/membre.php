<?php

session_start();

if (!isset($_SESSION['login'])) {
	header ('Location: index.php');

	exit();

}

?>


<html>

<head>

<title>Espace membre</title>

</head>


<body>

Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<p>Je te remercie d etre venu sur cette page pour le moment elle est en construction </p>

<h1><center>Construction de la page en cours </center></h1>

<a href="deconnexion.php">Deconnexion</a>

</body>
</html>
