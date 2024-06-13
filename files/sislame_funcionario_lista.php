<!-- Perguntar antes de excluir -->
<script language="Javascript">
function deletar(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "user_system_deletar.php?id="+id+"&registro";


     }
}
</script>


<?php 

  // Função calcular idade
  require_once "../func/calc_idade.php";
  
  
/// define o número de itens por página
$itens_por_pagina = 25;
 
// pega a página atual
 if(isset($_GET['pagina']) && $_GET['pagina'] > 0){
  $pagina = $_GET['pagina'];
 }else{
  $pagina = 0;
 }


  //Pesquisa e consulta básica
    require_once("pesquisar.php");
	  
  // numero de linhas com o critério LIMIT
   // $num_total = $num;

  // definir o numero de paginas
  $num_paginas = ceil($num_total/$itens_por_pagina);
   
  $ultima_pagina  = $num_total - ($itens_por_pagina*$num_paginas - $num_total); 
 

?>


<!-- Mensagem ao passar o mouse -->
<script type="text/javascript" src="../js/wz_tooltip.js"></script>

<!-- Botão Modal Sair -->
<?php
if(isset($guia)){
  echo"  <script type='text/javascript' src='../js/modal_sair.js'></script>";
}
?>
<!-- Botão Excluir -->
<script type="text/javascript" src="../js/bnt_excluir.js"></script>

<!-- Botão internação -->
<script type="text/javascript" src="../js/bnt_internacao.js"></script>

<?php

//	require_once("pesquisar.php");

?>

<!-- pegar mes de consulta  -->
<script language="Javascript">
    function mudarmes(){
      var y = document.getElementById("ano").value;
      var x = document.getElementById("mes").value;
      if((x && y)){
      window.location.href = x+y;
      }
    }
</script>
<style type="text/css">
<!--
.style1 {font-size: 9px}
-->
</style>

                    
   <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  class="table-secondary" style="text-align: center; text-decoration-style: solid;" >
                 <!-- <td width="27"><div align="center">Status</div></td> -->
                 <td ><div align='center'>ID</div></td>
                 <td ><div align="center">Nome</div></td>
                 <td ><div align="center">Matr&iacute;cula</div></td>
                 <td ><div align="center">Cpf</div></td>
                 <td ><div align="center">Fun&ccedil;&atilde;o</div></td>
                 <td ><div align="center">Idade</div></td>
                 <td ><div align="center">Data de nascimento</div></td>
                 <td ><div align="center">Deficiente</div></td>
				        <td ><div align="center">Admiss&atilde;o</div></td>
                <td ><div align="center">V&iacute;nculo</div></td>
                 <td></td>  
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  $result = $stmt1->fetchAll(PDO::FETCH_BOTH);
                  

                  foreach ($result as $i => $registro ) {
                         
                      

                         echo " <tr>   
                                  <!--  <td><div align='center'>";

                                    if ($registro["dat_saida"] != 0){

                                    echo "<span class='glyphicon glyphicon-ok'> </span> ";

                                    }

                         echo"              </div></td> -->
                                    <td >
                                    	<div align='center' id='ticket' class='style1'> 
                                        	<strong> 
                                    			<a href = 'principal.php?funcionario&registro=".$registro['id']."&cpf=".$registro["CD_INEP_FUCIONARIO"]."'>".$registro['id']."</a>
											</strong>
										</div>
									</td>
                                    <td ><div align='left' class='style1'>".utf8_encode($registro["NM_FUNCIONARIO"])."</div></td>
                                    <td ><div align='center' class='style1'>".$registro["CD_MATRICULA"]."</div></td>
                                    <td ><div align='center' class='style1'>".$registro["CD_INEP_FUCIONARIO"]."</div></td>
                                    <td ><div align='left' class='style1'>".utf8_encode($registro["DC_FUNCIONARIO_FUNCAO"])."</div></td>
                                    <td ><div align='center' class='style1'>".calc_idade($registro["data_nasc"])."</div></td>
                                    <td ><div align='center'class='style1'><font color='blue'><strong>".date("j/n/Y",strtotime($registro["data_nasc"]))."</strong></font></div>
                                     </td>
                                    <td ><div align='center'>";
                                    if (!empty($registro["DC_DEFICIENCIA"])) {             
                                        echo "<font ><strong><a ".$cor." href=\"javascript:func()\" onmouseover=\"Tip(' ".utf8_encode($registro["DC_DEFICIENCIA"])." ')\" onmouseout=\"UnTip()\"> ";
                                        echo '<span class="glyphicon glyphicon-ok" style="color: slategrey; font-size: 15px;"></span>';
                                        echo "</a></strong></font>";                                 
                                        
                                    }
                                     echo "</div>
                                   <td ><div align='center' class='style1'><font color='blue'><strong>".date("j/n/Y",strtotime($registro["DT_ADMISSAO"]))."</strong></font></div>
                                     </td>
                                    <td ><div align='left'> <span style='font-size: 9px'>";
                                   
                                        switch ($registro["REGIME_JURIDICO"]) {
                                          case 'CONCURSADO/EFETIVO/ESTÁVEL':
                                            echo "EFETIVO";
                                            break;
                                          case 'CONTRATO TEMPORÁRIO':
                                            echo "CONTRATO TEMPOR&Aacute;RIO";
                                            break;
                                          case 'CONCURSADO/EFETIVO/ESTÁVEL - COMISSIONADO':
                                            echo "EFETIVO EM COMISS&Atilde;O";
                                            break;
                                          case 'COMISSIONADO':
                                            echo "COMISSIONADO";
                                            break;
                                          case 'TERCEIRIZADO':
                                            echo "COMISSIONADO";
                                            break;
                                          default:
                                            echo $registro["REGIME_JURIDICO"];

                                        }

                                    echo"</span></div></td>
                                    <td><div align='center'></td>



                        </tr>";
					// Botão excluir
          /*            
						if($_SESSION["perfil"] == "administrador"){
						echo " <td><div align='center'><a style='color:white' class='btn btn-primary delete  btn-xs' onclick='deletar(".$registro["id"].")'>Excluir</a></div></td>
                                    </td>";
						}			
        
                        echo"         ";
               */                             

                  }
                  

                   
              ?>              
</table>
			       <span style="background-color: red"></span>

<!-- NAVEGAÇÃO DAS PAGINAS GERADAS PELA CONSULTA MILIT -->

  <!-- CONTADOR DE REGISTROS -->        
        <?php 



          $registro1 = $pagina + 1;

          $registro2 = $itens_por_pagina+ $pagina;
          if($registro2 > $num_total){
            $registro2 = $num_total;
          }else{
            $registro2 = $itens_por_pagina+ $pagina;

          }


 echo '<span id="ticket"> <i> De '.$registro1.' para '.$registro2.' de '.$num_total.' registros.</i> </span>'; 
          
          
            $URL =$URL."?".$consulta["tabela"]."=".$num_total."&buscar=".$_GET['buscar'];


        ?>

<!-- BARRA DE NAVEGAÇÃO DE REGISTROS -->
        <nav aria-label="Page navigation example">
            
              
              <ul class="pagination">
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-backward" href="<?php echo $URL; ?>&pagina=0" aria-label="Previous">                </a>              </li>
    <!-- REMETE PARA O REGISTRO ANTERIOR -->            
              <li >
                <a class="glyphicon glyphicon-chevron-left"  href="javascript:history.back()">                </a>              </li> 
    <!-- REMETE PARA O REGISTRO POSTERIOR-->            
              <li class="page-item">
                <a class="glyphicon glyphicon-chevron-right"  href="<?php echo $URL; ?>&pagina=<?php echo $registro2; ?>" aria-label="Next">                </a>              </li> 
    <!-- REMETE PARA O ULTIMO REGISTRO -->            
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-forward"  href="<?php echo $URL; ?>&pagina=<?php echo $ultima_pagina; ?>" aria-label="Next">                </a>              </li> 
            </ul>
      </nav>

  <!-- // -->

  
  
   <?php

  //  Acesso Modal saida
   if(isset($_GET['guia'])){
      include("modal_saida.php");
  }
  ?>