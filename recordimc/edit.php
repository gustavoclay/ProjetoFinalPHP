<?php
require_once('functions.php');
edit_imc();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Registro de IMC</h2>

<form action="edit.php?idrecordimc=<?php echo $_GET['idrecordimc'] ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="name">Altura em metros</label>
      <input type="number" step="0.01"  class="form-control" placeholder="ex. 1.80" name="data[height]" value="<?php echo $record['height']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Peso</label>
      <input type="number" step="0.01" class="form-control" placeholder="ex. 80.50" name="data[weight]" value="<?php echo $record['weight']; ?>">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="view.php?idcustomers=<?php echo $_GET['idcustomers']; ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>