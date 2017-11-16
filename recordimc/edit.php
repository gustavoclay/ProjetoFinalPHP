<?php
require_once('functions.php');
edit_imc();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Registro de IMC</h2>

<form action="edit.php?idrecordimc=<?php echo $record['idrecordimc']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">ID Registro/label>
      <input type="text" class="form-control" name="record['customers_idcustomers']" value="<?php echo $record['idrecordimc']; ?>  disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="name">Altura</label>
      <input type="number" step="0.01"  class="form-control" name="record['height'] value="<?php echo $record['height']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Peso</label>
      <input type="number" step="0.1" class="form-control" name="record['weight']" value="<?php echo $record['weight']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">IMC</label>
      <input type="number" step="0.1" class="form-control" name="record['imc']" value="<?php echo $record['imc']; ?>" disabled>
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="record['daterecord']" value="<?php echo $record['daterecord']; ?>" disabled>
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="view.php?idcustomers=<?php echo $record['customers_idcustomers'] ?>" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>