<!-- Adicionar compos ao formulário -->
<script>
function removerTR(id){
        id.remove();
}

function adicionarTR(){
        // // Quantidade de linha da tabela
        var qtdRows = document.getElementById("campos").rows.length;

        var table = document.getElementById("campos");
        var newRow = table.insertRow(qtdRows);
        var cargo = "cx_" + qtdRows
		var qtd = "qx_" + qtdRows
        newRow.id = cargo;
		newRow.id = qtd;

        // add cells to the row
        var cel1 = newRow.insertCell(0);
        var cel2 = newRow.insertCell(1);
        var cel3 = newRow.insertCell(2);



        // add values to the cells
        cel1.innerHTML = "<input name='" + cargo + "' type='text' class='form-control input-sm'  placeholder='Nome do cargo' value=''>";
        cel2.innerHTML = "<input name='" + qtd + "'   type='text' class='form-control input-sm'  placeholder='Quantidade' value=''>";
        cel3.innerHTML = "<a href='#' onClick='removerTR(" + "qx_" + qtdRows + ");'>Excluir</a>";
}
</script>
<!--Função select consulta cargos -->
<script>
   function adicionar() {
     switch (document.getElementById("escola").selectedIndex) {
        <?php     
			 for ($x=1; $x < $i ; $x++) {
				echo' case '.$x.':
                         document.getElementById("censo_escola").value = "'.$censo_escola[$x].'"
						 document.getElementById("censo_escola").readOnly = true;
                         break; 
					';
             }
         ?>

        default:
        document.getElementById("censo_escola").value = "";
     }
  }
</script>
<!-- Modal -->
<style type="text/css">
<!--
.style2 {
	font-size: 36px;
	color: #000000;
}
.style3 {color: #0000FF}
-->
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="margin-left:10%; width:50%">

    <!-- Modal content-->
    <div class="modal-content" style="width:200%">
      <div class="modal-header" style="background-color: red;">
	  	<span class="modal-title" style="color:#FFFFFF"> Cadastro de Cargos </span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <!-- Conteúdo Modal -->

		<!-- Inclusão via java script de instrução php--> 
		  
		  
		  
        <br />
        <div class="hidden-print">
          <table width="100% " border="0" align="center">
            <tr>
              <td colspan="3" bgcolor="#CCCCCC"><div align="center" class="style5"> <br />
                  <span class="style2">DEFINIR CARGOS E FUN&Ccedil;&Otilde;ES</span> <br />
                <br />
                <br />
</div></td>
            </tr>
			<tr>
				<td colspan="10"></td>
			</tr>
			<tr>
              <td colspan="3" bgcolor="#FF0033"><div align="center" class="style5"> 
                <p><br />
                  Caso tenha altera&ccedil;&atilde;o de cargos, &eacute;  necess&aacute;rio tamb&eacute;m fazer alterar no <a href="https://sislameal.caedufjf.net/sislameal/login.faces" target="_blank" class="style3">Sistema Sislame</a> para mant&ecirc;-los sincronizados.     <br />
                  <br />
                  </p>
              </div></td>
            </tr>
		  <tr border="1" >
		  	<td width="67%" style="color:#000000; left:auto"><h3>
		  	  <div align="left">CARGO/ FUN&Ccedil;&Atilde;O CADASTRADOS NO SISLAME </div></td>
			<td width="23%" style="color:#000000"><div align="left">QUANTIDADE</div></td>
			<td width="10%" colspan="10" style="color:#000000"><div align="left">EXCLUIR</div></td>
		  </tr>   
		  
	 </table>    
          <br />
          <br />
	<form id="cargos_cadastro" name="cargos_cadastro" enctype="multipart/form-data" action="cargos_cadastro.php" method="post">
	 
      <table width="100% " border="0" align="center">
		  <?php
    

    $sql = "SELECT DC_FUNCIONARIO_FUNCAO, COUNT(*) AS QTD FROM `funcionario` 
            WHERE CENSO_ESCOLA = ".$_GET["inep"]." 
            GROUP BY DC_FUNCIONARIO_FUNCAO 
            ORDER BY `DC_FUNCIONARIO_FUNCAO` ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

				$i= 0;
				$qtd_funcao = 0;
                 while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
				 	//$cargo[$qtd_cargos] = utf8_encode($registro["DC_FUNCIONARIO_FUNCAO"]);
				 
					echo '<tr>
							
					  		<td align="left">
								<span style="color:#000000">'.utf8_encode($registro['DC_FUNCIONARIO_FUNCAO']).' </span>
							</td>
																	
						  	<td>
								<input name="cargo_'.$i.'" id="cargo" type="hidden" class="form-control input-sm" value="'.utf8_encode($registro['DC_FUNCIONARIO_FUNCAO']).'">
								<input name="qtd_'.$i.'" id="qtd" type="text" class="form-control input-sm" required="required" value="'.$registro["QTD"].'"> </td>							<td colspan="4" >

								<center>
									<input style="width: 20px; height: 20px; margin-top: -10px;" type="checkbox" class="form-check-input" id="excluir" name="excluir_'.$i.'"  > 
								</center>
							</td>
							<td></td>/
							<td></td>
							<td></td>
						  </tr>"';  
					
					
						  
					$qtd_funcao = $registro["QTD"] + $qtd_funcao;
					$i = ++$i;
                 }       
				 
				 	echo '<input name="total_cargos" id="total_cargos" type="hidden" class="form-control input-sm" value="'.$i.'">';	
					echo '<input name="inep" id="inep" type="hidden" class="form-control input-sm" value="'.$inep.'">';	
	?>
		<tr>
			<td colspan="3"  align="center" style="color:#000000; "><h2>NOVOS CARGOS</td> 
		</tr>
		<tr>	 
            <td class="text-center">Quantidade</td>
            <td class="text-center">Tipo</td>
            <td ><center>Ação</center></td>
        </tr>     		  
		<tr >
				<td></td>
				<td></td>
				<td colspan="3" >
					<type="button" class="btn btn-danger btn-lg" onclick="adicionarTR();">
						Adicionar 
			      </button>
				</td>
    			
			</tr>
             <tbody id="campos" >
               <tr>
              </tr>

             </tbody>
               <tr>
			   	<td colspan="10"></td>
              </tr>
			   <tr>
			   	<td colspan="10"><h2></td>
              </tr>
          </table>
		  
            <br />
            <br />
            <div>
              <div align="right" >
			  	 <button type="button" class="btn btn-primary btn-lg"data-dismiss="modal">Fechar</button>
			   
                 <button type="submit" class="btn btn-primary btn-lg" > Alterar</button>  
				 
		  </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
