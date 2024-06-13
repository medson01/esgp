<table style="height: 186px; background-color:#83B3E2" border="0"  width="1000">
<tbody>
<tr style="width: 100%;">
<td><span style="font-size: 10pt;"><img src="../imagem/logo_ipaseal.png" width="67" height="99"  /></span></td>
<td colspan="3"><span style="font-size: 10pt;">INSTITUTO DE ASSIST&Ecirc;NCIA A SA&Uacute;DE DOS SERVIDORES DO ESTADO DE ALAGOAS<br />Rua Cincinato Pinto, 226, Centro - Macei&oacute; - AL - CEP 57020-050<br />Fone: (82) 3315-3267 - CNPJ.:05.115.840/0001-13</span></td>
</tr>
<tr>
	<td colspan="3"><center><span style="font-size: 10pt;"><input style="border: 0; font-weight: bold;  background-color:#83B3E2" value='RECEITU&Aacute;RIO' readonly></span></center></td>
</tr>	
<tr>
	<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='M&eacute;dico:' readonly></span></td>
	<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='<?php echo $nome_medico." ".$sobre_nome; ?>' readonly></span></td>
	<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='CR:  <?php echo " ".$cr; ?>' readonly></span></td>
</tr>
<tr>
<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='Especialidade:' readonly></span></td>
<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='<?php echo $especialidade; ?>' readonly></span></td>
<td>&nbsp;</td>
</tr>
<tr>
<td><span style="font-size: 10pt;"><input style="border: 0;  background-color:#83B3E2" value='Data:' readonly></span></td>
	<td><span style="font-size: 10pt;">
		<input style="border: 0; width: 300px;  background-color:#83B3E2" value='<?php
		// Data e hora 
		setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
		date_default_timezone_set('America/Sao_Paulo');
		echo utf8_encode(strftime('%A,  %d de %B de %Y', strtotime('today')));
		?>	' readonly>	
	</span></td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>

<p><br /><br /></p>