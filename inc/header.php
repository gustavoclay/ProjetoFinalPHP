<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Controle de IMC</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
	<style>
	body {
		padding-top: 50px;
		padding-bottom: 20px;
	}
</style>
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">IMC</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Usuários <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL; ?>customers">Gerenciar Usuários</a></li>
							<li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Usuário</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Controle de IMC <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASEURL; ?>recordimc">Gerenciar IMC</a></li>
							<li><a href="<?php echo BASEURL; ?>recordimc/imctable.php">Tabelas IMC</a></li>
						</ul>
					</li>
					<li><a href="<?php echo BASEURL; ?>imc/o_que_e_imc.php">O que é IMC?</a></li>
					<li><a href="<?php echo BASEURL; ?>imc/como_calcular_imc.php">Como calcular o IMC?</a></li>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>

	<main class="container">