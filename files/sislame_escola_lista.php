<!-- Perguntar antes de excluir -->
<script language="Javascript">
function deletar(id) {
     var resposta = confirm("Deseja remover esse registro?");
     
     if (resposta == true) {
          window.location.href = "prontuario_delete.php?id="+id;


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

//  require_once("pesquisar.php");

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
                 <td ><div align="center">Escola</div></td>
                 <td ><div align="center">inep</div></td>
                 <td ><div align="center">Cnpj</div></td>
                 <td ><div align="center">Localiza&ccedil;&atilde;o</div></td>
                 <td ><div align="center">Bairro</div></td>
                 <td ><div align="center">Diretora</div></td>
                 <td ><div align="center">Contato</div></td>
         <td ><div align="center">Status</div></td>
         <td ><div align="center"></div></td>
         
                   
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
                                      <div id='ticket' align='center' class='legenda_tab'> 
                                        <strong> 
                                          <a href = '";
                                         if (isset($_GET['ativo']) || isset($_GET['fechado']) ) {
                                            echo "principal.php?id=".$registro["id"]."&inep=".$registro["CD_CENSO"]."&lotacao";
                                         }else{
                                            echo "principal.php?escola&registro=".$registro['id']."'";
                                         }
                                          
                         echo"            
                                          '>  ".$registro["id"]."</a></strong></div></td>
                                    <td >
										<div id='paciente' class='legenda_tab'>
										<strong>
											<a href = '";
                                         if (isset($_GET['ativo']) || isset($_GET['fechado']) ) {
                                            echo "principal.php?id=".$registro["id"]."&inep=".$registro["CD_CENSO"]."&lotacao";
                                         }else{
                                            echo "principal.php?escola&registro=".$registro['id']."'";
                                         }
                                          
                         echo"            
                                          '>  ".utf8_encode($registro["ESCOLA"])."</strong></a></div></td>
                                    <td ><div align='center' class='legenda_tab'>".$registro["CD_CENSO"]."</div></td>
                                     <td ><div align='center' class='legenda_tab'>".$registro["NU_CNPJ"]."</div></td>
                                    <td ><div align='center' class='legenda_tab'>".$registro["LOCALIZACAO"]."</div></td>
                                    <td ><div align='left' class='legenda_tab'>".utf8_encode($registro["ED_BAIRRO"])."</div></td>
                                    <td ><div align='left' class='legenda_tab'>".utf8_encode($registro["NM_DIRETOR"])."</div></td>
                                    <td ><div align='center' class='legenda_tab'>".$registro["NU_TELEFONE_1"]."<br>".$registro["NU_TELEFONE_2"]."</div></td>
                                    <td ><div align='center' class='legenda_tab'>";
                                      if( $registro["STATUS"] == "ATIVA" ){ 
                                        echo '<span class="glyphicon glyphicon-ok" style="color: slategrey; font-size: 15px;"></span>';
                                      }else{
                                         echo '<span class="glyphicon glyphicon-remove" style="color: slategrey; font-size: 15px;"></span>';
                                      }
                        echo"            </div>";       
                        echo "<td><div align='center'></td>



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
          
  