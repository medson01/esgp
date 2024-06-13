 <?php


if($_GET['prontuario'] <> 0){
	   // Arquivo de configuração
  require_once "../config/config.php";


      $sql01 = 'SELECT * FROM `terapia_ocupacional`';
	  
      $stm = $conn->prepare($sql01);

      $stm->execute();

  

       while($row = $stm->fetch(PDO::FETCH_ASSOC)){

		    $estado_paciente = $row["estado_paciente"];
			$posicionamento = $row["posicionamento"];
			$sedestacao = $row["sedestacao"];
			$bipedestacao = $row["bipedestacao"];
			$pressao_arterial = $row["pressao_arterial"];
			$auscuta_pulmonar = $row["auscuta_pulmonar"];
			$saturacao_periferica = $row["saturacao_periferica"];
			$freq_cardiaca = $row["freq_cardiaca"];
			$freq_respiratoria = $row["freq_respiratoria"];
			$glicemia = $row["glicemia"];
			$temperatura = $row["temperatura"];
			$ex_ativo_passivo = $row["ex_ativo_passivo"];
			$ex_motabolico = $row["ex_motabolico"];
			$ex_respiratorio = $row["ex_respiratorio"];
			$aspiracao = $row["aspiracao"];
			$descarga_peso = $row["descarga_peso"];
			$alongamento = $row["alongamento"];
			$cambulacao = $row["cambulacao"];
			$observacao = $row["observacao"];
			$data = $row["data"];
 
	   }
}
?>
<!-- Modal para cadastro da evolução -->
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




<div align="right">
  <!-- Modal -->
</div>


<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog" style="margin-left:2%; width:100%">

    <!-- Modal content-->
    <div class="modal-content" style="width:250%">
      <div class="modal-header" style="background-color: red;">
	  	<span class="modal-title" style="color:#FFFFFF"> Evolu&ccedil;&atilde;o Terapia Ocupacional </span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <!-- Conteúdo Modal -->

		<!-- Inclusão via java script de instrução php--> 
		  
		  
		  
        <br />
      <form action="evol_fisioterapia_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">
        <div align="center">
          <div class="form-group">

            <table width="100%" border="0"align="center">
            <tr>
              <td colspan="18" style="border-bottom:ridge"><strong>PADR&Atilde;O POSTURAL </strong></td>
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
			  	<td><input class="form-check-input" type="checkbox" name="sedestacao" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>  
				 />    			  	Normal<span class="style1"></span></td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao45" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Pin&ccedil;a Fina </td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao42" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Contraturas</td>
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
			  <td><input class="form-check-input" type="checkbox" name="sedestacao2" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>
			    Locomotora</td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao52" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Equil&iacute;brio</td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao43" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Flexos</td>
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
			  <td><input class="form-check-input" type="checkbox" name="sedestacao3" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>
			    Manipulativa<span class="style1"></span></td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao6" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Amplitude de Movimento</td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao44" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Externos</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="8">&nbsp;</td>
			  </tr>
			<tr>
			  <td width="184">&nbsp;</td>
			  <td width="300">&nbsp;</td>
			  <td width="311">&nbsp;</td>
			  <td width="196">&nbsp;</td>
			  <td width="152">&nbsp;</td>
			  <td width="221">&nbsp;</td>
			  <td width="84">&nbsp;</td>
			  <td width="612">&nbsp;</td>
              <td colspan="8">&nbsp;</td>
            </tr>
			<tr>
			  <td width="184"><input class="form-check-input" type="checkbox" name="sedestacao32" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Coordena&ccedil;&atilde;o</td>
			  <td width="300">&nbsp;</td>
			  <td width="311"><input class="form-check-input" type="checkbox" name="sedestacao7" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Propriocup&ccedil;&atilde;o</td>
			  <td width="196">&nbsp;</td>
			  <td width="152">&nbsp;</td>
			  <td width="221">&nbsp;</td>
			  <td width="84">&nbsp;</td>
			  <td width="612">&nbsp;</td>
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
			  <td colspan="4" style="border-bottom:ridge"><strong>PADR&Atilde;O COGNITIVO </strong></td>
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
			  <td><input class="form-check-input" type="checkbox" name="sedestacao" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>                  Mem&oacute;ria</td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao4" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Orienta&ccedil;&atilde;o </td>
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
			  <td><input class="form-check-input" type="checkbox" name="sedestacao2" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Aten&ccedil;&atilde;o</td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="sedestacao5" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Capacidade Resolutiva </td>
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
			  <td><input class="form-check-input" type="checkbox" name="sedestacao3" 			  		
				<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($sedestacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Concentra&ccedil;&atilde;o<span class="style1"></span></td>
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
			  <td width="184">&nbsp;</td>
			  <td width="300">&nbsp;</td>
			  <td><br />			  </td>
			  <td>&nbsp;</td>
			  <td width="152">&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td width="612"><label></label>
                <br /></td>
              <td colspan="8">&nbsp;</td>
            </tr>
			<tr>
			  <td colspan="4" style="border-bottom:ridge"><strong>ATIVIDADE DE RENDA DI&Aacute;RIA </strong></td>
			  <td style="border-bottom:ridge"><label></label></td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td style="border-bottom:ridge">&nbsp;</td>
			  <td colspan="8" style="border-bottom:ridge">&nbsp;</td>
			  </tr>
			<tr>
			  <td colspan="3">&nbsp;</td>
			  <td width="196"><label></label></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td width="612"><br /></td>
              <td colspan="8">&nbsp;</td>
              </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td><div align="center">Dependente</div></td>              
			    <td><div align="center">Semi
			      </div>
			    <td><div align="center">Independente</div></td>              
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td width="213">&nbsp;</td>
			    <td width="334"></td>
			    <td width="597">&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">Alimenta&ccedil;&atilde;o</td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />              
			      </div>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>
			      <div align="center"></div>
			    <td>
			      <div align="center"></div>
			    <td><div align="center"></div></td>
			    <td>&nbsp;</td>
			    <td><label></label></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">Pentear-se</td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />              
			      </div>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />              
			      </div>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td>
			      <div align="center"></div>
			    <td>              
			      <div align="center"></div>
			    <td>              
			      <div align="center"></div>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">Vestir-se</td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
		        </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
		        </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
		        </div></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  			  <tr>
			    <td colspan="3">Uso do banheiro </td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  			  <tr>
			    <td colspan="3">&nbsp;</td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td><div align="center"></div></td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
			    <td>&nbsp;</td>
		      </tr>
			  			  <tr>
			    <td colspan="3">Auto cuidados </td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
			    <td><div align="center">
			      <input  class="form-check-input" type="radio" name="ex_ativo_passivo" 				  	
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_ativo_passivo == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> />
			      </div></td>
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
              <td colspan="18" style="border-bottom:ridge"><strong>PADR&Atilde;O COMPORTAMENTAL </strong></td>
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
			  <td><input class="form-check-input" type="checkbox" name="ex_motabolico2"  
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_motabolico == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Pueril
			    <br /></td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="aspiracao" 
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($aspiracao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> 
				 />
			    Agressivo</td>
			  <td><input class="form-check-input" type="checkbox" name="aspiracao2" 
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($aspiracao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>
			    Afetivo</td>
			  <td><div align="center"><br />
			    </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>
			  <input name="cambulacao" type="radio" 
			  		<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($cambulacao == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=1";
					  	 }
				  	 ?> /> </td>
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
			  <td><input class="form-check-input" type="checkbox" name="ex_motabolico3"  
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_motabolico == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Receptivo
			    <br /></td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="descarga_peso"  
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($descarga_peso == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>  
				 />
			    Confuso</td>
			  <td><input class="form-check-input" type="checkbox" name="descarga_peso2"  
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($descarga_peso == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>
			    Bem Humorado </td>
			  <td><div align="center"><br />
			    </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><input name="cambulacao" type="radio" <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($cambulacao == "0"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{
					  	 		echo "value=0";
					  	 }
				  	 ?> /></td>
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
			  <td><input class="form-check-input" type="checkbox" name="ex_motabolico"  
			  	<?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($ex_motabolico == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?> />
			    Hostil<br />
			    <br /></td>
			  <td>&nbsp;</td>
			  <td><input class="form-check-input" type="checkbox" name="alongamento"  
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($alongamento == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>  />
			    Inst&aacute;vel</td>
			  <td><input class="form-check-input" type="checkbox" name="descarga_peso3"  
			    <?php
					  	 if($_GET['prontuario'] <> 0){

					  	 	if($descarga_peso == "1"){ 
					  	 		echo "checked disabled";
					  	 	}else{ 
					  	 		echo" disabled ";
					  	 	}
					  	 }else{

					  	 	echo "value=1";
					  	 }
				 ?>>
			    PArticipativo</td>
			  <td><div align="center"><br />
			    </div></td>
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
			  </tr><tr>
			  <td><br />
			    <br /></td>
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
			  	<textarea class="form-control" name="observacao"  <?php if(!empty($observacao)){ echo "disabled"; }?> id="observacao" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 150px;">
			  		
			  	<?php
					  	 if(!empty($observacao)){

					  	 	echo $observacao;
					  	 }
				 ?>


			  	</textarea></td>
			  </tr>
          </table>
          <p>&nbsp;</p>
		    
        </div>
        </div>
	     <!-- /Conteúdo Modal -->
		 
		 <input type="hidden" name="id_paciente" value="<?php echo $_GET['id']; ?>" />
	    <div class="modal-footer" style="background-color: red;">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#FFFFFF;  background-color: black; border-color: #f4f7fb;" >
		 Cancelar </button>
		<button type="submit" class="btn btn-default" style="color:#FFFFFF;  background-color: black; border-color: #f4f7fb;" 
		<?php
					  	 if($_GET['prontuario'] <> 0){
					  	 		echo" disabled ";
					  	 }
				 ?>  /> Incluir
</form>
    </div>
    </div>

  </div>

