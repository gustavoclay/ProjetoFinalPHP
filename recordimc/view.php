<?php
require_once('functions.php');
view($_GET['idcustomers']);
viewimc($_GET['idcustomers']);
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuário #<?php echo $customer['idcustomers']; ?></h2>
		</div>
		<div class="col-sm-6 text-right h2">
			<a class="btn btn-primary" href="add.php?id=<?php echo $customer['idcustomers']; ?>"><i class="fa fa-plus"></i> Novo Registro de IMC</a>
			<a href="index.php" class="btn btn-default">Voltar</a>
		</div>
	</div>
</header>
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

<hr>

<h2>Controle de IMC</h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Altura</th>
			<th>Peso</th>
			<th>IMC</th>
			<th>Registrado em</th>
			<th class="text-center">Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($record) : ?>
			<?php foreach ($record as $item) : ?>
				<tr>
					<td><?php echo $item['idrecordimc']; ?></td>
					<td><?php echo $item['height']; ?></td>
					<td><?php echo $item['weight']; ?></td>
					<td><?php echo $item['imc']; ?></td>
					<td><?php echo $item['daterecord']; ?></td>
					<td class="actions text-center">
						<a href="edit.php?idrecordimc=<?php echo $item['idrecordimc']; ?>&idcustomers=<?php echo $customer['idcustomers']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal1" data-record="<?php echo $item['idrecordimc']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else : ?>
			<tr>
				<td colspan="6">Nenhum registro encontrado.</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>

<?php include('modal.php'); ?>


<?php include(FOOTER_TEMPLATE); ?>