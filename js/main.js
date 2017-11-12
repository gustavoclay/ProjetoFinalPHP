/**
 * Passa os dados do Usuários para o Modal, e atualiza o link para exclusão
 */
 $('#delete-modal').on('show.bs.modal', function (event) {

 	var button = $(event.relatedTarget);
 	var id = button.data('customer');

 	var modal = $(this);
 	modal.find('.modal-title').text('Excluir usuário #' + id);
 	modal.find('#confirm').attr('href', 'delete.php?idcustomers=' + id);
 })

/**
 * Passa os dados do Usuários para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal1').on('show.bs.modal', function (event) {

 	var button = $(event.relatedTarget);
 	var id = button.data('record');

 	var modal = $(this);
 	modal.find('.modal-title').text('Excluir uregistro #' + id);
 	modal.find('#confirm').attr('href', 'delete.php?id=' + id);
 })