<?php

require_once('../config.php');
require_once(DBAPI);
//variaveis globais para foreach
$customers = null;
$customer = null;
$records = null;
$record = null;

/**
 *  Visualização de um Cliente
 */
function view($idcustomers = null) {
	global $customer;
	$customer = find('customers', $idcustomers);
}

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('customers');
}

/**
 *  Visualização de um registro de imc
 */
function viewimc($idcustomers = null) {
	global $record;
	$record = find_imc('recordimc', $idcustomers);
}

/**
 *  Listagem de todos registros imc
 */
function indeximc() {
	global $records;
	$records = find_all_imc('recordimc');
}

/**
 *  Cadastro de IMC
 */
function addimc() {

	if (!empty($_POST['record'])) {

		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$record = $_POST['record'];
		$record['customers_idcustomers'] = $_GET['id'];
		$record['imc'] = 26;
		$record['daterecord'] = $today->format("Y-m-d H:i:s");

		//print_r($record);

		save('recordimc', $record);
		header("location: view.php?idcustomers=".$record['customers_idcustomers']);
	}
}

/**
 *  Exclusão de um IMC
 */
function deleteimc($id = null) {

	global $record;
	$record = removeimc('recordimc', $id);

	header("location: index.php");
}

?>