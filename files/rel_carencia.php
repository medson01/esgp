<?php


	$a = "SELECT tab_cargo.CD_CENSO, tab_funcionario.ESCOLA as escola, tab_funcionario.DC_FUNCIONARIO_FUNCAO as cargo, (tab_cargo.quantidade - tab_funcionario.quantidade) as carencia FROM
(SELECT funcionario.CENSO_ESCOLA, escola.ESCOLA, funcionario.DC_FUNCIONARIO_FUNCAO, COUNT(*) AS quantidade FROM `funcionario` 
INNER JOIN escola ON escola.CD_CENSO = funcionario.CENSO_ESCOLA
            GROUP BY CENSO_ESCOLA, DC_FUNCIONARIO_FUNCAO) AS tab_funcionario,
                      
(SELECT cargo.CD_CENSO, escola.ESCOLA, cargo.nome, quantidade FROM cargo 
INNER JOIN escola ON escola.CD_CENSO = cargo.CD_CENSO
			GROUP BY cargo.CD_CENSO, cargo.nome) as tab_cargo
";            


	
	
	if(!empty($_GET['rel_carencia'])){
		$b = "WHERE
				tab_cargo.CD_CENSO = tab_funcionario.CENSO_ESCOLA
				AND tab_funcionario.DC_FUNCIONARIO_FUNCAO = tab_cargo.nome 
				AND ( tab_cargo.CD_CENSO like '%".$_GET['rel_carencia']."%' OR tab_funcionario.ESCOLA like '%".$_GET['rel_carencia']."%' ) 
				ORDER BY escola, cargo  DESC ";
	}else{
				$b = "WHERE
				tab_cargo.CD_CENSO = tab_funcionario.CENSO_ESCOLA
				AND tab_funcionario.DC_FUNCIONARIO_FUNCAO = tab_cargo.nome 
				ORDER BY escola, cargo  DESC ";
	}
	
	$sql = $a . $b;
	
    $stmt = $conn->prepare($sql);
    $stmt->execute();

  // CONSULTA PEGA O TORAL DE REGISTROS NA TABELA 
	  
      $num_total = $stmt->rowCount();
      $num = $stmt->rowCount();


   // Arquivo de configuração
  require_once "../func/cargos_adicionados.php";
				

?>

<script>
	const inputEle = document.getElementById('enter');
inputEle.addEventListener('keyup', function(e){
  var key = e.which || e.keyCode;
  if (key == 13) { // codigo da tecla enter
    // colocas aqui a tua função a rodar
    alert('carregou enter o valor digitado foi: ' +this.value);
  }
});
</script>
<div align="center" class="visible-print">
  <p><img src="../imagem/logo_prefeitura.png" width="72" height="74" /></p>
  <p> SECRETARIA MUNICIPAL DE EDUCA&Ccedil;&Atilde;O<br />
    COORDENADORIA GERAL DE GEST&Atilde;O DE PESSOAS
  </p>
</div>
<br />

<h3> Relat&oacute;rio Geral de Car&ecirc;ncia </h3>
<br />
 
 
   <div class="visible-print">
   Nome de usu&aacute;rio: <?php echo $login; ?> <br>
   </div>
   Data de emiss&atilde;o: <?php echo date("d/m/Y, H:m:s"); ?> <br />
   <br />
   <br class="visible-print" /> <br />
   <div style="position:relative" class="hidden-print">
     <div align="right">
	 <form name='rel_carencia' method='get' action='<?php echo "?rel_carencia=".$_SERVER['PHP_SELF']?>' >
       <input type='search' class='form-control ds-input' id='search-input' placeholder='Pesquisar por escola e censo' autocomplete='off' spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='rel_carencia'>
	  
	 </form>
     </div>
</div>
   <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <!-- <td width="27"><div align="center">Status</div></td> -->
                 <td ><div align='center'>Censo</div></td>
                 <td ><div align="center">Escola</div></td>
                 <td ><div align="center">Cargo</div></td>
                 <td ><div align="center">Car&ecirc;ncia</div></td>
				  <td ><div align="center">Exedente</div></td>
				  <td ><div align="center">Inclu&iacute;do</div></td>
               </tr>
                          
              <?php


                 $exedente = array();
				 $i = 0; 
				 $y = 0;
				 $censo = array();
                 while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                         
                      

                         echo " <tr>";
						 		if(!empty($censo[$i])){	
						 			if($censo[$i] <> $registro["CD_CENSO"]) {	
									
											foreach(cargos_adicionados($censo[$i-1]) as $valor) {
													echo $valor;
											$y++;
			
									}
						 		}}
						 echo "
						 			<td ><div align='center' class='legenda_tab'>".$registro["CD_CENSO"]."</div></td>";
									$censo[$i] = $registro["CD_CENSO"];
								
						 echo "
                                    <td ><div align='left' class='legenda_tab'>".utf8_encode($registro["escola"])."</div></td>
                                    <td ><div align='left' class='legenda_tab'>".utf8_encode($registro["cargo"])."</div></td>";
						 		
								if($registro["carencia"]<0){
									$exedente[$i] = -$registro["carencia"];	
								
								}else{
									$carencia[$i] = $registro["carencia"];	
								}
								

								
								if(!empty($carencia[$i])){
								 	echo"<td ><div align='center' class='legenda_tab' style= 'color: red;'>".$carencia[$i]."</div></td>";
								}else{
									echo"<td ><div align='center' class='legenda_tab'>  </div></td>";
								}
								
								if(!empty($exedente[$i])){
								 echo"<td ><div align='center' class='legenda_tab' style= 'color: blue;'>".$exedente[$i]."</div></td>";
								}else{
									echo"<td ><div align='center' class='legenda_tab'> </div></td>";
								}
						echo"
									<td ><div align='center' class='legenda_tab'> </div></td>
                        </tr>";
                          			
						  
									++$i;
									$censo[$i] = $registro["CD_CENSO"];
									
                  }
				  
				 if(isset($censo[$i])){
				  	foreach(cargos_adicionados($censo[$i]) as $valor) {
						echo $valor;
						$y++;
				  	}
				  }
				


			

        ?>        
</table>
             <span style="background-color: red"></span>



<!-- NAVEGAÇÃO DAS PAGINAS GERADAS PELA CONSULTA MILIT -->

  <!-- CONTADOR DE REGISTROS -->        
        <?php 

$num_total = $num_total + $y;

 echo '<span id="ticket"> <i> Total de '.$num_total.' registros.</i> </span></br></br></br>'; 
     
  
		$URL = $URL."?rel_carencia";

        ?>


     