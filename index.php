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
						<p>Usuário</p>
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
	</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>