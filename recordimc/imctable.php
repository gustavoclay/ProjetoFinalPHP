<?php
require_once('functions.php');
?>

<?php include(HEADER_TEMPLATE); ?>
<h1>Tabelas IMC</h1>
<hr>

<p align="justify"><strong>IMC adultos - tabela padrão</strong></p>
<p align="justify">Não distingue sexo da pessoa avaliada. É o método indicado pela Organização Mundial da Saúde (OMS).</p>
<table width="300" border="1" cellspacing="0" cellpadding="0">
	<tr> 
		<td>IMC</td>
		<td>Categoria</td>
	</tr>
	<tr>
		<td>abaixo de 16,00</td>
		<td>Baixo peso Grau III</td>
	</tr>
	<tr>
		<td>16,00 a 16,99</td>
		<td>Baixo peso Grau II</td>
	</tr>
	<tr> 
		<td>17,00 a 18.49</td>
		<td>Baixo peso Grau I</td>
	</tr>
	<tr> 
		<td>18,50 a 24,99</td>
		<td>Peso ideal</td>
	</tr>
	<tr> 
		<td>25,00 a 29,99</td>
		<td>Sobrepeso</td>
	</tr>
	<tr> 
		<td>30,00 a 34,99</td>
		<td>Obesidade Grau I</td>
	</tr>
	<tr> 
		<td>35,00 a 39,99</td>
		<td>Obesidade Grau II</td>
	</tr>
	<tr>
		<td>40,0 e acima</td>
		<td>Obesidade Grau III</td>
	</tr>
</table></p>
<p>&nbsp;</p>
<p align="justify"><strong>IMC adultos - com distinção de sexo</strong></p>
<p align="justify">Método desenvolvido a partir de estudos realizados nos Estados Unidos (NHANES II survey - National Health and Nutrition Examination Survey).</p>
<p>Masculino</p>
<table width="300" border="1" cellspacing="0" cellpadding="0">
	<tr> 
		<td>IMC</td>
		<td>Categoria</td>
	</tr>
	<tr> 
		<td>Abaixo de 20,7</td>
		<td>Abaixo do peso</td>
	</tr>
	<tr> 
		<td>20,7 a 26,4</td>
		<td>Peso ideal</td>
	</tr>
	<tr> 
		<td>26,5 a 27,8</td>
		<td>Pouco acima do peso</td>
	</tr>
	<tr> 
		<td>27,9 a 31,1</td>
		<td>Acima do peso</td>
	</tr>
	<tr> 
		<td>31,2 e acima</td>
		<td>Obesidade</td>
	</tr>
</table></p>
<p align="justify">Feminino</p>
<table width="300" border="1" cellspacing="0" cellpadding="0">
	<tr> 
		<td>IMC</td>
		<td>Categoria</td>
	</tr>
	<tr> 
		<td>Abaixo de 19,1</td>
		<td>Abaixo do peso</td>
	</tr>
	<tr> 
		<td>19,1 a 25,8</td>
		<td>Peso ideal</td>
	</tr>
	<tr> 
		<td>25,9 a 27,3</td>
		<td>Pouco acima do peso</td>
	</tr>
	<tr> 
		<td>27,4 a 32,3</td>
		<td>Acima do peso</td>
	</tr>
	<tr> 
		<td>32,4 e acima</td>
		<td>Obesidade</td>
	</tr>
</table></p>
<p align="justify">&nbsp;</p>

<?php include(FOOTER_TEMPLATE); ?>