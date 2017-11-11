<?php
	require_once('functions.php');
	view($_GET['idcustomers']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuário #<?php echo $customer['idcustomers']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>Email:</dt>
	<dd><?php echo $customer['email']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $customer['created']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="edit.php?idcustomers=<?php echo $customer['idcustomers']; ?>" class="btn btn-primary">Editar</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>