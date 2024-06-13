<?php 
	$sql = "SELECT evolucao.id, usuarios.nome, usuarios.cr, evolucao.pressao_arterial, evolucao.freq_cardiaca,  evolucao.temperatura, evolucao.data, usuarios.especialidade FROM `evolucao` INNER JOIN prontuario on prontuario.id = evolucao.id_prontuario INNER JOIN usuarios on usuarios.id = evolucao.id_usuario WHERE evolucao.id_prontuario =".$_GET["id"] ;
		
      $stmt = $conn->prepare($sql);
      $prontuario=true;

      $stmt->execute();
      
 
  // Função calcular idade
  require_once "../func/calc_idade.php";
?>

<!-- Javascript carrega paginas e imvluir em tags -->
<script type="text/javascript">
 function exibir(id,prontuario){
  window.location.href = "principal.php?id="+id+"&prontuario="+prontuario;
  
}


</script>



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
<div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"><strong>Evoluções</strong></div>
 
 
  <br />
  <div  class="panel panel-default" id="incluir" align="right">
  
  
  <?php
			  	//	if(!empty($_GET['prontuario'])){
					     include("evol_clinico_geral_formulario.php");

        ?>

  <!-- Botão para acionar lista -->
  <?php 

 // if($_SESSION["perfil"] == "fisioterapia"){

   echo " <button  href='#' class='btn btn-info' onclick='exibir(".$_GET["id"].",".$registro["id"].")' > Incluir Evol. </button>"; 
   
   

//  }
   ?>
  <a id="btn_modal" type="hidden" data-toggle="modal" data-target="#myModal"  ></a><br />
  </div><br />


   <div class="panel panel-default">
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Histórico</strong></div>
  <div class="panel-body">
    <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <td ><div align='center'>ID</div></td>
				 <td ><div align='center'>Especialidade</div></td>
                 <td ><div align="center">Profissional de saúde</div></td>
                 <td ><div align="center">CR</div></td>
				 <td ><div align="center">Pressão Arterial</div></td>
				 <td ><div align="center">Frequência Cardíaca</div></td>
				 <td ><div align="center">&ordm;C</div></td>
				  <td ><div align="center">Data</div></td>
				 
                   
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  $i = 0;
                 
                  while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                         
                     
                         echo"    <tr>       
                                    <td > 
                                      <div id='paciente' align='center'>
                                        <a href='#' onclick='exibir(".$_GET["id"].",".$registro["id"].")' > 
                                          ".$registro["id"]."
                                        </a>
                                      </div>
                                    </td>
									<td ><div id='paciente' align='center'>".$registro["especialidade"]."</div></td>
                                    <td ><div id='paciente' align='center'>".$registro["nome"]."</div></td>
                                    <td ><div align='center' >".$registro["cr"]."</div></td>								
									<td ><div align='center' >".$registro["pressao_arterial"]."</div></td>
									<td ><div align='center' >".$registro["freq_cardiaca"]."</div></td>
									<td ><div align='center' >".$registro["temperatura"]."</div></td>
                                    <td ><div align='center'><font color='blue'><strong>".date("j/n/Y, H:i:s",strtotime($registro["data"]))."</strong></font></div></td>";

                        echo"            </div>
                                    </td>
                                </tr>";
                                      

                  }
                  

 
               
              ?>              
</table>

</div>
