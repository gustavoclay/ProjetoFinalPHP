<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="customers" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-12 text-center">
						<br />
						<p>Usuários</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="recordimc" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-heartbeat fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-12 text-center">
						<br />
						<p>Controle de IMC</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="<?php echo BASEURL; ?>imc/o_que_e_imc.php" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-stethoscope fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-12 text-center">
						<br />
						<p>O que é IMC?</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="<?php echo BASEURL; ?>imc/como_calcular_imc.php" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-calculator fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-12 text-center">
						<br />
						<p>Como calcular o IMC?</p>
					</div>
				</div>
			</a>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-2">
			<a href="<?php echo BASEURL; ?>imc/imctable.php" class="btn btn-default">
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-table fa-5x" aria-hidden="true"></i>
					</div>
					<div class="col-xs-12 text-center">
						<br />
						<p>Tabelas IMC</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<hr>
		<h2>IMC - Sistema para Registro de Controle de IMC</h1>
		<p>O sistema foi projetado para cadastrar usuários e realizar o registro do seu peso e altura, e automaticamente calcular o índice de Massa Corporal. Os registros de IMC são guardados no banco de dados, assim como as informações do usuário para realizar o controle.</p>
		<p>No Dashboard acima, há as seguintes opções: </p>
		<ul>
			<li>botão "Usuário": há as opções para realizar o registro e controle dos usuários.</li>
			<li>botão "Controle de IMC": há as opções para realizar o registro e controle do IMC dos usuários cadastrados.</li>
			<li>botão "O que é IMC?": há uma página explicando o que é o Índice de Massa Corporal e como este índice é utilizado.</li>
			<li>botão "Como calcular o IMC?": há uma página explicando como calcular o Índice de Massa Corporal.</li>
			<li>botão "Tabelas IMC": há uma página com as tabelas para verificar a categoria relacionada ao índice adquirido</li>
		</ul>


	</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>