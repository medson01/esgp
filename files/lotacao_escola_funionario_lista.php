<?php 
   $sql = "SELECT funcionario.id, funcionario.NM_FUNCIONARIO, funcionario.CD_INEP_FUNCIONARIO, funcionario.DC_FUNCIONARIO_FUNCAO, funcionario.CD_MATRICULA FROM funcionario 
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
 function exibir(id,inep,lotacao){
  window.location.href = "principal.php?id="+id+"&inep="+inep+"&lotacao="+lotacao;
  
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
<!-- <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"><strong>Lotação</strong></div> -->
 
 
  <br />
   <div  class="panel panel-default" id="incluir" align="right"> 
  
  
  <?php
          //  Arquivo Modal 
			  	
					//     include("lotacao_escola_funionario_formulario.php");

        ?>

  <!-- Botão para acionar lista -->
  <?php 

 // if($_SESSION["perfil"] == "fisioterapia"){

   //echo " <button  href='#' class='btn btn-info' onclick='exibir(".$_GET["id"].",".$_GET["inep"].",".$registro["id"].")' > Incluir Evol. </button>"; 
   
   

//  }
   ?>
  <!-- <a id="btn_modal" type="hidden" data-toggle="modal" data-target="#myModal"  ></a> 
  <br />
  </div> 
  <br />-->


  <!-- <div class="panel panel-default">  -->
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Funcionários </strong></div>
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
				 <td ><div align="center"></div></td>
                   
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                   
                         echo"    <tr>       
                                    <td > 
                                      <div align='center' style='font-size: 10px;'>
                                        <a href = 'principal.php?funcionario&registro=".$registro['id']."&cpf=".$registro["CD_INEP_FUCIONARIO"]."'> 
                                          ".++$i."
                                        </a>
                                      </div>
                                    </td>
									<td ><div  align='left' style='font-size: 10px;'>".utf8_encode($registro["NM_FUNCIONARIO"])."</div></td>
									<td ><div  align='left' style='font-size: 10px;'>".$registro["CD_INEP_FUNCIONARIO"]."</div></td>
                  <td ><div  align='left' style='font-size: 10px;'>".utf8_encode($registro["DC_FUNCIONARIO_FUNCAO"])."</div></td>
                  <td ><div align='center' style='font-size: 10px;'>".$registro["CD_MATRICULA"]."</div></td>
                  <td ><div align='center' style='font-size: 10px;'></div></td>

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
