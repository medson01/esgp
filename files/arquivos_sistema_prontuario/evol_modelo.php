<?php 

if( isset($_GET['ativo']) ){   
      $stmt = $conn->prepare("SELECT * FROM `paciente` where status = 1" );
      $prontuario=true;
}elseif(  isset($_GET['fechado']) ){   
      $stmt = $conn->prepare("SELECT * FROM `paciente` where status = 0" );
       $prontuario=true;
}else{
     $stmt = $conn->prepare("SELECT * FROM `paciente`" );
}
      $stmt->execute();

 
  // Função calcular idade
  require_once "../func/calc_idade.php";
?>


<!-- Meensagem ao passar o mouse -->
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
   <div class="panel panel-default">
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Informações </strong> </div>
  <div class="panel-body">
<table width="100%" border="0"align="center">
			            <tr>
              <td colspan="7"><div class="form-group">
                <label for="label10" >Profissional Saúde </label>
                <input class="form-control form-control-sm"  id="nome"  name="nome" <?php if(isset($nome)){ echo "value='".$nome."' readonly='true' ";}?>  required>
              </div></td>
            </tr>
			<tr>
              <td width="333"><div class="form-group">
                <label for="label10" > CRM </label>
                <input class="form-control form-control-sm"  id="nome2"  name="nome2" <?php if(isset($nome)){ echo "value='".$nome."' readonly='true' ";}?>  required="required" />
              </div></td>
              <td width="1">&nbsp;</td>
              <td width="305"><div class="form-group">
                <label for="label10" > Especializadade </label>
                <input class="form-control form-control-sm"  id="nome22"  name="nome22" <?php if(isset($nome)){ echo "value='".$nome."' readonly='true' ";}?>  required="required" />
              </div></td>
              <td width="1">&nbsp;</td>
              <td width="447" colspan="2">&nbsp;</td>
            </tr>
</table>
  
  </div>
</div>

   <div class="panel panel-default">
  <div class="panel-heading" style="background-color: lightslategray; color: #f3eded; text-align:center"> <strong> Histórico de Evoluções </strong> </div>
  <div class="panel-body">
    <table width="435" align="center" class="table table-striped" style="font-size: 12px" >

               <tr  style='font-weight:bold;'>
                 <!-- <td width="27"><div align="center">Status</div></td> -->
                 <td ><div align='center'>ID</div></td>
                 <td ><div align="center">Paciente</div></td>
                 <td ><div align="center">Matricula</div></td>
                 <td ><div align="center">Idade</div></td>
                 <td ><div align="center">Data de nascimento</div></td>
                 <td ><div align="center">Deficiente</div></td>
                <td ><div align="center">Status</div></td>
                   
               </tr>
                          
              <?php

                error_reporting(E_ALL ^ E_NOTICE);

                  $i = 0;
                 
                  while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                         
                      

                         echo " <tr>   
                                  <!--  <td><div align='center'>";

                                    if ($registro["dat_saida"] != 0){

                                    echo "<span class='glyphicon glyphicon-ok'> </span> ";

                                    }

                         echo"              </div></td> -->
                                    <td >
                                      <div id='ticket'> 
                                        <strong> 
                                          <a href = 'principal.php?id=";
                                         if (isset($prontuario)) {
                                            echo $registro["id"]."&prontuario";
                                         }else{
                                            echo $registro["id"];
                                         }
                                          
                         echo"            
                                          '>  ".$registro["id"]."</a></strong></div></td>
                                    <td ><div id='paciente'>".$registro["nome"]."</div></td>
                                    <td ><div align='center' >".$registro["matricula"]."</div></td>
                                    <td ><div align='center' >".calc_idade($registro["data_nasc"])."</div></td>
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
                        echo"            </div>
                                    </td>
                                </tr>";
                                      

                  }
                  

                   
              ?>              
</table>
            
  </div>
</div>
  



  <?php

  //  Acesso Modal saida
   if(isset($_GET['guia'])){
      include("modal_saida.php");
  }
  ?>
          
  