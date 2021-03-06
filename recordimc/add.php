<?php
require_once('functions.php');
addimc();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Registro de IMC</h2>

<form action="add.php?id=<?php echo $_GET['id'] ?>" method="post">
  <hr />
  <div class="row">

    <div class="form-group col-md-2">
      <label for="name">ID Usuário</label>
      <input type="text" class="form-control" name="record['customers_idcustomers']" value="<?php echo $_GET['id'] ?>" disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="name">Altura em metros</label>
      <input type="number" step="0.01" placeholder="ex. 1.80" class="form-control" name="record['height']" required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Peso</label>
      <input type="number" step="0.01" placeholder="ex. 80.00" class="form-control" name="record['weight']" required>
    </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="view.php?idcustomers=<?php echo $_GET['id'] ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>