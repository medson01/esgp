<?php 
	    $sql = "SELECT fisioterapia.id, usuarios.nome, fisioterapia.estado_paciente, fisioterapia.pressao_arterial, fisioterapia.auscuta_pulmonar, fisioterapia.saturacao_periferica,fisioterapia.freq_cardiaca, fisioterapia.freq_respiratoria, fisioterapia.glicemia, fisioterapia.temperatura, fisioterapia.data FROM `fisioterapia` INNER JOIN usuarios on usuarios.id = fisioterapia.id_usuario";
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
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

 <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Terapia Ocupacional </strong> </div>
 
 
  <br />
  <div  class="panel panel-default" id="incluir" align="right">
  <?php
			  	//	if(!empty($_GET['prontuario'])){
					     include("evol_terapia_ocupacional_formulario.php");

        ?>

  <!-- Botão para acionar lista -->
  <?php 

  if($_SESSION["perfil"] == "fisioterapia"){

   echo " <button  href='#' class='btn btn-info' onclick='exibir(".$_GET["id"].",".$registro["id"].")' > Incluir Evol. </button>"; 

  }
   ?>
  <a id="btn_modal" type="hidden" data-toggle="modal" data-target="#myModal"></a><br />
  </div><br />


   <div class="panel panel-default">
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Histórico de Evoluções </strong> </div>
  <div class="panel-body">
    <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <td ><div align='center'>ID</div></td>
				 <td ><div align='center'>Profissional de saúde</div></td>
                 <td ><div align="center">Estado Paciente</div></td>
                 <td ><div align="center">PA</div></td>
                 <td ><div align="center">AP</div></td>
				 <td ><div align="center">SPo2</div></td>
				 <td ><div align="center">FC</div></td>
				 <td ><div align="center">FR</div></td>
				 <td ><div align="center">GLIC</div></td>
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
									<td ><div id='paciente' align='center'>".$registro["nome"]."</div></td>
                                    <td ><div id='paciente' align='center'>".$registro["estado_paciente"]."</div></td>
                                    <td ><div align='center' >".$registro["pressao_arterial"]."</div></td>
                                    <td ><div align='center' >".$registro["auscuta_pulmonar"]."</div></td>
									<td ><div align='center' >".$registro["saturacao_periferica"]."</div></td>
									<td ><div align='center' >".$registro["freq_cardiaca"]."</div></td>
									<td ><div align='center' >".$registro["freq_respiratoria"]."</div></td>
									<td ><div align='center' >".$registro["glicemia"]."</div></td>
									<td ><div align='center' >".$registro["temperatura"]."</div></td>
                                    <td ><div align='center'><font color='blue'><strong>".date("j/n/Y, H:i:s",strtotime($registro["data_nasc"]))."</strong></font></div></td>";

                        echo"            </div>
                                    </td>
                                </tr>";
                                      

                  }
                  

 
               
              ?>              
</table>
 
</div>
