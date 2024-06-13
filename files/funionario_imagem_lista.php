<?php 
  $sql = "SELECT imagem.id,imagem.nome_documento, imagem.nome_arquivo,imagem.descricao, imagem.data, imagem.imagem FROM `imagem` INNER JOIN funcionario ON funcionario.id = imagem.id_funcionario WHERE funcionario.id = ".$_GET["registro"];

		
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      
 
  // Função calcular idade
  require_once "../func/calc_idade.php";
  require_once "../func/cont_cargo.php";

 
?>

<!-- Javascript carrega paginas e imvluir em tags -->
<script type="text/javascript">
 function exibir(registro){
  window.location.href = "principal.php?funcionario&registro="+registro;
  
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
				 <td ><div align='center'>Nome do Documento </div></td>
				 <td ><div align='center'>Nome do Arquivo </div></td>
                 <td ><div align="center">Observações</div></td>				 
				 <td ><div align="center">Imagem</div></td>
				  <td ><div align="center">Data de inserção </div></td>
				 <td ><div align="center"></div></td>
                   
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                   
                         echo"    <tr>       
                                    <td > 
                                      <div align='center' style='font-size: 10px;'>                              
                                          ".$registro["id"]."
                                      </div>
                                    </td>
									<td ><div  align='left' style='font-size: 10px;'>".strtoupper(utf8_encode($registro["nome_documento"]))."</div></td>
									<td ><div  align='left' style='font-size: 10px;'>".strtoupper(utf8_encode($registro["nome_arquivo"]))."</div></td>
									<td ><div  align='left' style='font-size: 10px;'>".utf8_encode($registro["descricao"])."</div></td>
									<td ><div align='center' style='font-size: 10px;'>
									
							<a class='hidden-print' href='imagem_exibir.php?id=".$registro["id"]."' target='_blank'>Arquivo ".$registro["id"]."</a>
									
									</div></td>
                                    <td ><div align='center' style='font-size: 10px;'><font color='blue'><strong>".date("j/n/Y, H:i:s",strtotime($registro["data"]))."</strong></font></div></td>
									<td ><div align='center' >";
									if( $_SESSION["perfil"] == "administrador"){
                         			echo  " <!-- Botão exluir -->
                                            <button  class='btn btn-danger  btn-xs'  onclick='excluir(".$registro["id"].")'><span style='font-size: 10px; align: center;  color: #fff  '> 								                                        Remover </span> </button >
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
