<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
	$db = open_database();

	if ($db) {
		echo "<h1>Banco de dados conectado!</h1>";
	} else {
		echo "<h1>ERRO: Banco de dados não conectado!</h1>";
	}

 ?>