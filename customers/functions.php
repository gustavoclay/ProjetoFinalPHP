<?php

require_once('../config.php');
require_once(DBAPI);
//variaveis globais para foreach
$customers = null;
$customer = null;


/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('customers');
}

/**
 *  Cadastro de Clientes
 */
function add() {

	if (!empty($_POST['customer'])) {

		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

		$customer = $_POST['customer'];
		$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");

		save('customers', $customer);
		header('location: index.php');
	}
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

	if (isset($_GET['idcustomers'])) {

		$idcustomers = $_GET['idcustomers'];

		if (isset($_POST['customer'])) {

			$customer = $_POST['customer'];
			$customer['modified'] = $now->format("Y-m-d H:i:s");

			update('customers', $idcustomers, $customer);
			header('location: index.php');
		} else {

			global $customer;
			$customer = find('customers', $idcustomers);
		}
	} else {
		header('location: index.php');
	}
}

/**
 *  Visualização de um Cliente
 */
function view($idcustomers = null) {
	global $customer;
	$customer = find('customers', $idcustomers);
}

/**
 *  Exclusão de um Cliente
 */
function delete($idcustomers = null) {

	global $customer;
	$customer = remove('customers', $idcustomers);

	header('location: index.php');
}

?>