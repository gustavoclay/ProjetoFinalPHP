<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuários</h2>
		</div>
		<div class="col-sm-6 text-right h2">
			<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Usuários</a>
			<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
		</div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th width="25%">Nome</th>
			<th width="25%">Email</th>
			<th>Atualizado em</th>
			<th>Opções</th>
		</tr>
	</thead>
	<tbody>
		<?php if ($customers) : ?>
			<?php foreach ($customers as $customer) : ?>
				<tr>
					<td><?php echo $customer['idcustomers']; ?></td>
					<td><?php echo $customer['name']; ?></td>
					<td><?php echo $customer['email']; ?></td>
					<td><?php echo $customer['modified']; ?></td>
					<td class="actions text-center">
						<a href="view.php?idcustomers=<?php echo $customer['idcustomers']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
						<a href="edit.php?idcustomers=<?php echo $customer['idcustomers']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['idcustomers']; ?>">
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