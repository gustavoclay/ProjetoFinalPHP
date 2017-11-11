<?php
require_once('functions.php');

if (isset($_GET['idcustomers'])){
	delete($_GET['idcustomers']);
} else {
	die("ERRO: ID não definido.");
}
?>