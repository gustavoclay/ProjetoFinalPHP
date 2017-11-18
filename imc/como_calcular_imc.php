<?php
require_once('functions.php');
?>

<?php include(HEADER_TEMPLATE); ?>
<h2>Como calcular o IMC?</h2>
<hr>
<p>O <strong>c&aacute;lculo do IMC</strong> &eacute; feito dividindo o <em>peso</em> (em quilogramas) pela <em>altura</em> (em metros) ao quadrado.</p>  
<p>&Eacute; simples <strong>calcular</strong> o seu <strong>IMC</strong>.</p> 
<p>Por exemplo, se o seu <em>peso</em> &eacute; 80kg e a sua <em>altura</em> &eacute; 1,80m, a <em>f&oacute;rmula</em> para <strong>calcular</strong> o <strong>IMC</strong> ficar&aacute;:</p> 
<div class="exemplo"> 
	<p><strong>IMC</strong> = 80 &divide; 1,80<sup>2</sup></p> 
	<p><strong>IMC</strong> = 80 &divide; 3,24</p> 
	<p><strong>IMC</strong> = 24,69</p>
	<p>De acordo com a <a href="<?php echo BASEURL; ?>imc/imctable.php" title="C&aacute;lculo IMC">tabela de IMC</a>, voc&ecirc; est&aacute; no seu <strong>peso ideal</strong>.</p>
</div> 

<p>Outro exemplo, se voc&ecirc; <em>pesa</em> 70kg e <em>mede</em> 1,50m, o <em>c&aacute;lculo</em> do <strong>IMC</strong> ser&aacute;:</p> 
<div class="exemplo"> 
	<p><strong>IMC</strong> = 70 &divide; 1,50<sup>2</sup></p> 
	<p><strong>IMC</strong> = 70 &divide; 2,25</p> 
	<p><strong>IMC</strong> = 31,11</p>
	<p>De acordo com a <a href="<?php echo BASEURL; ?>imc/imctable.php"  title="C&aacute;lculo IMC">tabela de IMC</a>, voc&ecirc; est&aacute; com <strong>obesidade de n&iacute;vel 1</strong>.</p>
</div>

<?php include(FOOTER_TEMPLATE); ?>