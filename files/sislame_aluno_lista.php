<!-- Perguntar antes de excluir -->
<script language="Javascript">
function deletar(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "user_system_deletar.php?id="+id+"&atendimento";


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
                    
   <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <!-- <td width="27"><div align="center">Status</div></td> -->
                 <td ><div align='center'>ID</div></td>
                 <td ><div align="center">Nome</div></td>
                 <td ><div align="center">Matricula</div></td>
                 <td ><div align="center">Cpf</div></td>
                 <td ><div align="center">Idade</div></td>
                 <td ><div align="center">Data de nascimento</div></td>
                 <td ><div align="center">Deficiente</div></td>
				        <td ><div align="center">Bairro</div></td>
                 <td></td>  
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

               
                  $result = $stmt1->fetchAll(PDO::FETCH_BOTH);
                  

                  foreach ($result as $i => $registro ) {    

                     
                        
                      
                         
                         echo " <tr>   
                                  <!--  <td><div align='center' >";

                                    if ($registro["dat_saida"] != 0){

                                    echo "<span class='glyphicon glyphicon-ok'> </span> ";

                                    }

                         echo"              </div></td> -->
                                    <td >
                                    	<div align='center' class='legenda_tab' id='ticket'> 
                                        	<strong> 
                                    			<a href = 'principal.php?aluno&registro=".$registro['id']."'>".$registro['id']."</a>
											</strong>
										</div>
									</td>
                                    <td ><div align='left'class='legenda_tab'>".utf8_encode($registro["NOME_ALUNO"])."</div></td>
                                    <td ><div align='center'class='legenda_tab'>".$registro["ID_ALUNO"]."</div></td>
                                    <td ><div align='center'class='legenda_tab'>".$registro["CD_INEP"]."</div></td>
                                    <td ><div align='center'class='legenda_tab'>".calc_idade($registro["DT_NASCIMENTO"])."</div></td>
                                    <td ><div align='center'class='legenda_tab'><font color='blue'><strong>".date("j/n/Y",strtotime($registro["DT_NASCIMENTO"]))."</strong></font></div>
                                     </td>
                                    <td ><div align='center' class='legenda_tab'>";
                                    if (!empty($registro["DC_DEFICIENCIA"])) {             
                                        echo "<font ><strong><a ".$cor." href=\"javascript:func()\" onmouseover=\"Tip(' ".utf8_encode($registro["DC_DEFICIENCIA"])." ')\" onmouseout=\"UnTip()\"> ";
                                        echo '<span class="glyphicon glyphicon-ok" style="color: slategrey; font-size: 15px;"></span>';
                                        echo "</a></strong></font>";                                 
                                        
                                    }
                                    echo "</div>
                                    </td>
                                    <td ><div align='left' class='legenda_tab'>";
                                     
                                     echo utf8_encode($registro["BAIRRO"]);

                                     // Campo STATUS não existe no Sislame
                                    /*
                                      if( $registro["status"] == 1 ){ 
                                        echo '<span class="glyphicon glyphicon-ok" style="color: slategrey; font-size: 15px;"></span>';
                                      }else{
                                         echo '<span class="glyphicon glyphicon-remove" style="color: slategrey; font-size: 15px;"></span>';
                                      }
                                    */

                        echo"            </div>
                                    <td><div align='center'></td>



                        </tr>";
                          
                
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
                <a class="glyphicon glyphicon-fast-backward" href="<?php echo $URL; ?>&pagina=0" aria-label="Previous">               
                </a>
              </li>
    <!-- REMETE PARA O REGISTRO ANTERIOR -->            
              <li >
                <a class="glyphicon glyphicon-chevron-left"  href="javascript:history.back()">              
                </a>
              </li> 
    <!-- REMETE PARA O REGISTRO POSTERIOR-->            
              <li class="page-item">
                <a class="glyphicon glyphicon-chevron-right"  href="<?php echo $URL; ?>&pagina=<?php echo $registro2; ?>" aria-label="Next">
                            
                </a>
              </li> 
    <!-- REMETE PARA O ULTIMO REGISTRO -->            
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-forward"  href="<?php echo $URL; ?>&pagina=<?php echo $ultima_pagina; ?>" aria-label="Next">
                           
                </a>
              </li> 

            </ul>
      </nav>

  <!-- // -->

  
  
  <?php

  //  Acesso Modal saida
   if(isset($_GET['guia'])){
      include("modal_saida.php");
  }
  ?>
