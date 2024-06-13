<?php 
   $sql = "SELECT * FROM funcionario 
  				INNER JOIN escola ON escola.CD_CENSO = funcionario.CENSO_ESCOLA 
				WHERE escola.CD_CENSO = ".$_GET["inep"]." 
				ORDER BY funcionario.DC_FUNCIONARIO_FUNCAO";
		
      $stmt = $conn->prepare($sql);
      $prontuario=true;

      $stmt->execute();
      
 
  // Função calcular idade
  require_once "../func/calc_idade.php";
  require_once "../func/cont_cargo.php";
 
 
?>

<!-- Javascript carrega paginas e imvluir em tags -->
<script type="text/javascript">
 function exibir(registro,cpf){
  window.location.href = "principal.php?funcionario&registro="+registro+"&cpf="+cpf;
  
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
<div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"><strong></strong></div>
 
 
  <br />
  <div  class="panel panel-default" id="incluir" align="right">
  <!-- / -->
  
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Adicionar
</button>
 
  
  <?php
          //  Arquivo Modal 
			  	
					     include("funionario_imagem_formulario.php");

   ?>

  <!-- Botão para acionar lista -->

  <a id="btn_modal" type="hidden" data-toggle="modal" data-target="#myModal"  ></a></div>
  <br />


   <div class="panel panel-default">
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"><strong>Histórico de Domentação </strong></div>
  <div class="panel-body">
    <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <td ><div align='center'>ID</div></td>
				 <td ><div align='center'>Nome</div></td>
                 <td ><div align="center">CPF</div></td>				 
                 <td ><div align="center">Função</div></td>
                 <td ><div align="center">Matrícula</div></td>
				 <td ><div align="center">Carga Horária</div></td>
				 <td ><div align="center">Data Admissão</div></td>
				  <td ><div align="center">Data Admissão</div></td>
				 <td ><div align="center"></div></td>
                   
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                   
                         echo"    <tr>       
                                    <td > 
                                      <div align='center' style='font-size: 10px;'>
                                        <a href='#' onclick='exibir(".$_GET["id"].",".$_GET["inep"].",".$registro["id"].")' > 
                                          ".$i."
                                        </a>
                                      </div>
                                    </td>
									<td ><div  align='left' style='font-size: 10px;'>".$registro["NM_FUNCIONARIO"]."</div></td>
									<td ><div  align='left' style='font-size: 10px;'>".$registro["CD_INEP_FUNCIONARIO"]."</div></td>
                                    <td ><div  align='left' style='font-size: 10px;'>".$registro["DC_FUNCIONARIO_FUNCAO"]."</div></td>
                                    <td ><div align='center' style='font-size: 10px;'>".$registro["CD_MATRICULA"]."</div></td>								
									<td ><div align='center' style='font-size: 10px;'>".$registro["pressao_arterial"]."</div></td>
									<td ><div align='center' style='font-size: 10px;'>".$registro["freq_cardiaca"]."</div></td>
                                    <td ><div align='center' style='font-size: 10px;'><font color='blue'><strong>".date("j/n/Y, H:i:s",strtotime($registro["data"]))."</strong></font></div></td>
									<td ><div align='center' >";
									if( $_SESSION["perfil"] == "administrador"){
                         			echo  " <!-- Botão exluir -->
                                            <button  class='btn btn-danger  btn-xs'  onclick='excluir(".$registro["id"].")'><span style='font-size: 10px; align: center;  color: #fff  '> 								                                        Excluir </span> </button >
                                    ";
                                    } 
									
									
									
									"</div></td>";

                        echo"            </div>
                                    </td>
                                </tr>";
                                      

                  }
                  

 
               
              ?>              
</table>

</div>
