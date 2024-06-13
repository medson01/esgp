<!-- Trigger the modal with a button -->
<style type="text/css">
<!--
.style1 {font-size: 9px}

label, input {
position: relative;
width: 78px;
}

label::after {
content: '' attr(unit);
position: absolute;
top: 3px;
left: 45px;
font-family: arial, helvetica, sans-serif;
font-size: 13px;
color: rgba(0, 0, 0, 0.6);
font-weight: bold;
}
</style>

<div align="right"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Incluir Evol.</button></div>


<div align="right">
  <!-- Modal -->
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-left:2%; width:100%">

    <!-- Modal content-->
    <div class="modal-content" style="width:250%">
      <div class="modal-header" style="background-color: red;">
	  	<span class="modal-title" style="color:#FFFFFF"> Evolu&ccedil;&atilde;o Fisioterapia</span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <!-- Conte�do Modal -->

        <br />
        <form action="cadastro_fisioterapia.php" method="post" class="form-group" enctype="multipart/form-data">
        <div align="center">
          <div class="form-group">
            <table width="100%" border="0"align="center">
            <tr>
              <td colspan="18" style="border-bottom:ridge"><strong>Estado do paciente </strong></td>
            </tr>
            
			
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="estado_paciente" type="radio" value="beg" /></td>
			  <td>BEG <span class="style1">(Bom Estado Geral)</span></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="estado_paciente" type="radio" value="meg" /></td>
			  <td>REG <span class="style1">(Regular Estado Geral) </span></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="estado_paciente" type="radio" value="reg" /></td>
			  <td>MEG <span class="style1">(Mau Estado Geral) </span></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td width="121">&nbsp;</td>
			  <td width="391">&nbsp;</td>
			  <td width="36">&nbsp;</td>
			  <td width="318">&nbsp;</td>
			  <td width="684">&nbsp;</td>
			  <td width="200">&nbsp;</td>
			  <td width="36">&nbsp;</td>
			  <td width="193">&nbsp;</td>
              <td colspan="8">&nbsp;</td>
            </tr>
			<tr>
			  <td colspan="4" >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td >&nbsp;</td>
			  <td colspan="8" >&nbsp;</td>
			  </tr>
			<tr>
			  <td colspan="4" style="border-bottom:ridge"><strong>			  	Posicionamento </strong>			  </td>
			  <td style="border-bottom:ridge"><label></label></td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td colspan="8" style="border-bottom:ridge">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="posicionamento" type="radio" value="dd" /></td>
			  <td>Dec&uacute;bito Dosal</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="posicionamento" type="radio" value="dv" /></td>
			  <td>Dec&uacute;bito Ventral </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input name="posicionamento" type="radio" value="dl" /></td>
			  <td>Dec&uacute;bito Lateral </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			  <tr>
			  <td>
				<input class="form-check-input" type="checkbox" name="sedestacao" value="1" />
				<br />			  </td>
			  <td>Sedesta&ccedil;&atilde;o<span class="style1">&nbsp;(sentado)</span></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td><input class="form-check-input" type="checkbox" name="bipedestacao" value="1" />
			    <br /></td>
			  <td>Bipedesta&ccedil;&atilde;o<span class="style1"> &nbsp;(em p&eacute;)</span></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td width="121"><p>&nbsp;</p>			    </td>
			  <td width="391"> <p>&nbsp;</p>			    </td>
			  <td><br />			  </td>
			  <td>&nbsp;</td>
			  <td width="684">&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td width="193"><label></label>
                <br /></td>
              <td colspan="8">&nbsp;</td>
            </tr>
			<tr>
			  <td colspan="4" style="border-bottom:ridge"><strong>			    Sinais Vitais </strong></td>
			  <td style="border-bottom:ridge"><label></label></td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td colspan="8" style="border-bottom:ridge">&nbsp;</td>
			  </tr>
			<tr>
			  <td colspan="3">&nbsp;</td>
			  <td width="318"><label></label></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td width="193"><br /></td>
              <td colspan="8">&nbsp;</td>
              </tr>
			  <tr>
			    <td colspan="3">Press&atilde;o Arterial <span class="style1">&nbsp;(mmHg)</span></td>
			    <td><strong>
			      <input class="form-control "  style="height:25px; width:100px;" type="text" name="pressao_arteria" id="pa"/>
			      </strong>
			     </td>              
			    <td><div align="left">Frequ&ecirc;ncia Card&iacute;aca <span class="style1">&nbsp;(bpm)</span></div>
			    <td><strong>
			      <input class="form-control "   style="height:25px; width:100px;" max="90.00" type="text" name="freq_cardiaca" id="fc"/>
			    </strong>				</td>              
			    <td>&nbsp;</td>
			    <td>Glicemia <span class="style1">&nbsp;(mg/dl)</span></td>
			    <td width="223">
					<strong>		
			      		<input class="form-control "   style="height:25px; width:100px;" type="text" name="glicemia" id="glicemia"/>
			    	</strong></td>
			    <td width="362"></td>
			    <td width="640">&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>              
			    <td>              
			    <td>              
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">Auscuta Pulmonar <span class="style1">&nbsp;(irpm)</span></td>
			    <td>
					<strong>
			      <input class="form-control "   style="height:25px; width:100px; " type="text" name="auscuta_pulmonar" id="ap"/>
					</strong>   
			    <td>
					<div align="left">Frequ&ecirc;ncia Respirat&oacute;ria <span class="style1">&nbsp;(irpm)</span></div>
			    <td><strong>
			      <input class="form-control "   style="height:25px; width:100px; " max="90.00" type="text" name="freq_respiratoria" id="fr"/>
			    </strong>				</td>
			    <td>&nbsp;</td>
			    <td><label></label>Temperatura<span class="style1">&nbsp;(&ordm;C)</span></td>
			    <td><strong>
					<input class="form-control "   style="height:25px; width:100px;" max="90" type="text" name="temperatura" id="temperatura"/>
			    </strong></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>              
			    <td>              
			    <td>              
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">Satura&ccedil;&atilde;o Perif&eacute;rica <span class="style1">&nbsp;(%)</span></td>
			    <td> 
					<strong>
					<input name="saturacao_periferica" type='text' class="form-control " id="sp"   style="height:25px; width:100px;  " value='0.01' step='0.01' min="0.01" max="70.00" placeholder='0.00' />            
					</strong>
			    <td>              
			    <td>              
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>&nbsp;</td>
			    <td></td>
			    <td></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>&nbsp;</td>
			    <td></td>
			    <td></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    </tr>
				<tr>
              <td colspan="18" style="border-bottom:ridge"><strong>Conduta</strong></td>
            </tr>
            
			
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			  <tr>
			  <td>
			  	<input  class="form-check-input" type="radio" name="ex_ativo_passivo" value="1" />			  <br /></td>
			  <td>Exerc&iacute;cios Ativos </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><div align="center">
			    <input class="form-check-input" type="checkbox" name="aspiracao" value="1" />
			    <br />
			    </div></td>
			  <td><div align="left">Aspira&ccedil;&atilde;o </div></td>
			  <td>&nbsp;</td>
			  <td>
			  <input name="cambulacao" type="radio" value="1" /> </td>
			  <td colspan="8"> Ocambula&ccedil;&atilde;o</td>
			  </tr>
			  <tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			  <tr>
			  <td><input  class="form-check-input" type="radio" name="ex_ativo_passivo" value="0" />
			    <br /></td>
			  <td>Exerc&iacute;cios Passivos </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><div align="center">
			    <input class="form-check-input" type="checkbox" name="descarga_peso" value="checkbox" />
			    <br />
			    </div></td>
			  <td><div align="left">Descarga de Peso </div></td>
			  <td>&nbsp;</td>
			  <td><input name="cambulacao" type="radio" value="1" /></td>
			  <td colspan="8">Decambula&ccedil;&atilde;o</td>
			  </tr>
			  <tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td><input class="form-check-input" type="checkbox" name="ex_motabolico" value="1" />
			    <br />
			    <br /></td>
			  <td>Exerc&iacute;cios Metab&oacute;licos </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><div align="center">
			    <input class="form-check-input" type="checkbox" name="alongamento" value="1" />
			    <br />
			    </div></td>
			  <td><div align="left">Alongamento</div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			  <tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td><input class="form-check-input" type="checkbox" name="ex_respiratorio" value="1" />
			    <br />
			    <br /></td>
			  <td>Exerc&iacute;cios Respirat&oacute;rios </td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td colspan="4" style="border-bottom:ridge"><strong> Observa&ccedil;&otilde;es	Pertimente		    </strong></td>
			  <td style="border-bottom:ridge"><label></label></td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td colspan="8" style="border-bottom:ridge">&nbsp;</td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td><label></label></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr><tr>
			  <td>&nbsp;</td>
			  <td colspan="15"> 
			  	<textarea class="form-control" name="observacao" id="observacao" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 150px;"></textarea></td>
			  </tr>
          </table>
          <p>&nbsp;</p>
		    
        </div>
        </div>
	     <!-- /Conte�do Modal -->
		 
		 <input type="hidden" name="id_paciente" value="<?php echo $_GET['id']; ?>" />
        
      </div><div class="modal-footer" style="background-color: red;">
        <button type="submit" class="btn btn-default" style="color:#FFFFFF;  background-color: black; border-color: #f4f7fb;"> Incluir </button>
		
		  </form>
      </div>
    </div>

  </div>
</div>