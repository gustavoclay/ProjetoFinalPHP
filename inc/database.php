<?php

/*Este arquivo possui as funções para fabricar conexões com o banco de dados*/

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
		echo $r->getMessage();
		return null;
	}
}

function close_database() {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessag();
	}
}

?>