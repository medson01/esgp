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
  
  
// SCRIPT DE PAGINAÇÃO DE REGISTROS
	  
// define o número de itens por página
$itens_por_pagina = 25;
 
// pega a página atual
 if(isset($_GET['pagina'])){
  $pagina = intval($_GET['pagina']);
 }elseif(isset($_GET['ultima_pagina'])){
  $pagina = intval($_GET['ultima_pagina']);
 }else{
  $pagina = 0;
 }  

  //Pesquisa e consulta básica
    require_once("pesquisar.php");
	  
  // numero de linhas com o critério LIMIT
  $num = $stmt1->rowCount();

  
  //quantidade todal de objetos no banco 

  $stmt2 = $conn->prepare($a);
  
  $stmt2->execute();

  $num_total = $stmt2->rowCount();

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
				        <td ><div align="center">Status</div></td>
                 <td></td>  
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  $i = 0;
                 
                  while($registro = $stmt1->fetch(PDO::FETCH_ASSOC)){
                         
                      

                         echo " <tr>   
                                  <!--  <td><div align='center'>";

                                    if ($registro["dat_saida"] != 0){

                                    echo "<span class='glyphicon glyphicon-ok'> </span> ";

                                    }

                         echo"              </div></td> -->
                                    <td >
                                    	<div align='center' id='ticket'> 
                                        	<strong> 
                                    			<a href = 'principal.php?atendimento=".$registro['id']."'>".$registro['id']."</a>
											</strong>
										</div>
									</td>
                                    <td ><div align='left'>".$registro["nome"]."</div></td>
                                    <td ><div align='center'>".$registro["matricula"]."</div></td>
                                    <td ><div align='center'>".$registro["cpf"]."</div></td>
                                    <td ><div align='center'>".calc_idade($registro["data_nasc"])."</div></td>
                                    <td ><div align='center'><font color='blue'><strong>".date("j/n/Y",strtotime($registro["data_nasc"]))."</strong></font></div>
                                     </td>
                                    <td ><div align='center' >";
                                      if( $registro["deficiente"] == 1 ){ 
                                        echo '<span class="glyphicon glyphicon-flag" style="color: slategrey; font-size: 15px;"></span>';
                                      }
                        echo"            </div></td>
                                    <td ><div align='center' >";
                                      if( $registro["status"] == 1 ){ 
                                        echo '<span class="glyphicon glyphicon-ok" style="color: slategrey; font-size: 15px;"></span>';
                                      }else{
                                         echo '<span class="glyphicon glyphicon-remove" style="color: slategrey; font-size: 15px;"></span>';
                                      }
                        echo"            </div>";
					
						if($_SESSION["perfil"] == "administrador"){
						echo " <td><div align='center'><a style='color:white' class='btn btn-primary delete  btn-xs' onclick='deletar(".$registro["id"].")'>Excluir</a></div></td>
                                    </td>";
						}			
                        echo"         </tr>";
                                      

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
          echo '<span id="ticket"> <i> De '.$registro1.' para '.$registro2.' de '.$num_total.'</i> </span>'; 
        ?>

<!-- BARRA DE NAVEGAÇÃO DE REGISTROS -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-backward" href="principal.php?atendimento=1&pagina=0" aria-label="Previous">

                </a>
              </li>
    <!-- NAVEGA ENTRE AS PÁGINAS NUMERADAS -->
              <?php 
                $pagina = 0;
                for ($i=1; $i < $num_paginas+1; $i++) {

                 echo '<li class="page-item"><a class="page-link" href="principal.php?atendimento=1&pagina='.$pagina.'"><b>'. $i .'</b></a></li>';
                $pagina = $registro2;
                }
              ?>
    <!-- REMETE PARA O ULTIMO REGISTRO -->            
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-forward"  href="principal.php?atendimento=1&ultima_pagina=<?php echo $ultima_pagina; ?>" aria-label="Next">          
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
