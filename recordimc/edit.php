<?php
require_once('functions.php');
edit_imc();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Registro de IMC</h2>

<form action="edit.php?idrecordimc=<?php echo $idrecordimc ?>&idcustomers=<?php echo $_GET['idcustomers']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">ID Usuário</label>
      <input type="text" class="form-control" name="data['customers_idcustomers']" value="<?php echo $_GET['idcustomers']; ?>" disabled>
    </div>

    <div class="form-group col-md-2">
      <label for="name">Altura</label>
      <input type="number" step="0.01"  class="form-control" name="data['height']" value="<?php echo $record['height']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Peso</label>
      <input type="number" step="0.1" class="form-control" name="data['weight']" value="<?php echo $record['weight']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">IMC</label>
      <input type="number" step="0.1" class="form-control" name="data['imc']" value="<?php echo $record['imc']; ?>" disabled>
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="data['daterecord']" value="<?php echo $record['daterecord']; ?>" disabled>
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" onclick="location.href='edit.php?idrecordimc=<?php echo $idrecordimc ?>&idcustomers=<?php echo $_GET['idcustomers']; ?>';" class="btn btn-primary">Salvar</button>
      <a href="view.php?idcustomers=<?php echo $_GET['idcustomers']; ?>" class="btn btn-default">Cancelar</a>
    </div
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>