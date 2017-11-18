<?php

require_once('../config.php');
require_once(DBAPI);
//variaveis globais para foreach
$customers = null;
$customer = null;
$records = null;
$record = null;
$data = null;

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
 *  Visualização de um registro de imc
 */
function viewimcid($idrecordimc = null) {
	global $record;
	$record = find_imc_id('recordimc', $idrecordimc);
	print_r($record);
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

		// Calcula IMC
		foreach ($record as $key => $value) {
			if ($key == "'height'") {
				$he = $value;
			} elseif ($key == "'weight'") {
				$we = $value;
			}
		}
		$record['imc'] = $we / ($he * $he);

		$record['daterecord'] = $today->format("Y-m-d H:i:s");

		//print para debug
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

/**
 *	Atualizacao/Edicao de Registro de IMC
 */
function edit_imc() {

	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

	if (isset($_GET['idrecordimc'])) {

		$idrecordimc = $_GET['idrecordimc'];

		if (isset($_POST['data'])) {

			$data = $_POST['data'];
			$data['daterecord'] = $now->format("Y-m-d H:i:s");
			// Calcula IMC
			foreach ($data as $key => $value) {
				if ($key == "height") {
					$he = $value;
				} elseif ($key == "weight") {
					$we = $value;
				}
			}
			$data['imc'] = $we / ($he * $he);

			update_imc('recordimc', $idrecordimc, $data);
			//debug
			//print_r($data);
			//print_r($idrecordimc);
			header('location: index.php');
		} else {
			print "Alteração do registro ". $_GET['idrecordimc'];
		}
	} else {
		header('location: index.php');
	}
}



?>