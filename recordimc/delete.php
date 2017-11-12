<?php
require_once('functions.php');

if (isset($_GET['id'])){
	deleteimc($_GET['id']);
} else {
	die("ERRO: ID não definido.");
}
?>