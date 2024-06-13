 <?php

// Arquivo Modal

// Arquivo de configuração
/*  require_once "../config/config.php";


if($_GET['lotacao'] <> 0){





  echo   $sql01 = 'SELECT * FROM `lotacao` INNER JOIN usuarios on usuarios.id = lotacao.id_usuario  where lotacao.id = '.$_GET['lotacao'];
	  
      $stm = $conn->prepare($sql01);

      $stm->execute();

  

       while($row = $stm->fetch(PDO::FETCH_ASSOC)){
			$id = $row["id"];
			$inep = $row["CD_CENSO"];
		    $especialidade = $row["especialidade"];					
			$pressao_arterial = $row["pressao_arterial"];						
			$freq_cardiaca = $row["freq_cardiaca"];		
			$cr = $row["cr"];
			$temperatura = $row["temperatura"];		
			$observacao = $row["observacao"];
			$receita = $row["receita"];
			$data = $row["data"];
 
	   }

}else{

	    $sql1 = 'SELECT usuarios.id, usuarios.nome, usuarios.sobre_nome, usuarios.especialidade, usuarios.cr FROM usuarios INNER JOIN login on login.id_usuarios = usuarios.id WHERE login.id='. $_SESSION["id"];
      $stmt1 = $conn->prepare($sql1);
      $stmt1->execute();

       while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
       	  $id = $row["id"];
		  $nome_medico = $row["nome"];
		  $sobre_nome = $row["sobre_nome"];
		  $especialidade = $row["especialidade"];
		  $cr = $row["cr"];
       }
}

*/
?>

  
 

<!-- Modal para cadastro da evolução -->
<!-- Trigger the modal with a button -->
<style type="text/css">
<!--

label, input {
position: relative;
width: 78px;
}

label::after {
content: '' attr(unit);
position: absolute;
top: 3px;
left: 45px;
font-family: arial, helvetica, sans-serif;
font-size: 13px;
color: rgba(0, 0, 0, 0.6);
font-weight: bold;
}
.style1 {font-size: 9px}


.style2 {
	font-size: 24px;
	font-weight: bold;
}

</style>




<div align="right">
  <!-- Modal -->
</div>


<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog" style="margin-left:2%; width:100%">

    <!-- Modal content-->
    <div class="modal-content" style="width:250%">
      <div class="modal-header" style="background-color: red;">
	  	<span class="modal-title" style="color:#FFFFFF"> Lota&ccedil;&atilde;o </span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <!-- Conteúdo Modal -->

		<!-- Inclusão via java script de instrução php--> 
		  
		  
		  
        <br />
        <form action="lotacao_escola_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">
        <div align="center">
          <div class="form-group">

            <table width="100%" border="0"align="center">
            <tr>
              <td colspan="19" style="border-bottom:ridge"><strong>Estado do paciente </strong></td>
            </tr>
            
			
			<tr>			  </tr>
			<tr>
			  <td width="41%"></td>
			  <td width="39%">&nbsp;</td>
			  <td width="20%"></td>
			  </tr>
			  <tr>
			    <td><div align="left">Press&atilde;o Arterial <span class="style1">&nbsp;(mmHg)<strong>
			      <input class="form-control "  style="height:25px; width:100px;" type="text" name="pressao_arterial" id="pa" <?php if(!empty($pressao_arterial)){ echo " value=".$pressao_arterial." disabled"; }?> required="required" />
		        </strong></span></div></td>
			    <td><div >Frequ&ecirc;ncia Card&iacute;aca <span class="style1">&nbsp;(bpm)</span><strong>
                  <input class="form-control "   style="height:25px; width:100px;" max="90.00" type="text" name="freq_cardiaca" id="fc" <?php if(!empty($freq_cardiaca)){ echo " value=".$freq_cardiaca." disabled"; }?> required="required"/>
                </strong></div></td>
			    <td><div align="left">Temperatura&nbsp;<span class="style1">(&ordm;C)<strong>
                  <input class="form-control "   style="height:25px; width:100px;" max="90" type="text" name="temperatura" id="temperatura" <?php if(!empty($temperatura)){ echo " value=".$temperatura." disabled"; }?> maxlength="2" required="required"/>
                </strong></div></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><label></label></td>
			  </tr><tr>
			  <td colspan="5" style="border-bottom:ridge"><span class="style2"> Observa&ccedil;&otilde;es	sobre o Pertimente </span></td>
			  
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><label></label></td>
			  </tr><tr>
			    <td>                
			    <tr>
			  <tr>
			                    
		      <td colspan="16"> 
			  
		  
			  
<style type="text/css">

/* For other boilerplate styles, see: /docs/general-configuration-guide/boilerplate-content-css/ */
/*
* For rendering images inserted using the image plugin.
* Includes image captions using the HTML5 figure element.
*/

figure.image {
  display: inline-block;
  border: 1px solid gray;
  margin: 0 2px 0 1px;
  background: #f5f2f0;
}

figure.align-left {
  float: left;
}

figure.align-right {
  float: right;
}

figure.image img {
  margin: 8px 8px 0 8px;
}

figure.image figcaption {
  margin: 6px 8px 6px 8px;
  text-align: center;
}


/*
 Alignment using classes rather than inline styles
 check out the "formats" option
*/

img.align-left {
  float: left;
}

img.align-right {
  float: right;
}

/* Basic styles for Table of Contents plugin (toc) */
.mce-toc {
  border: 1px solid gray;
}

.mce-toc h2 {
  margin: 4px;
}

.mce-toc li {
  list-style-type: none;
}
</style>	  
	          <tr>
	            <td colspan="16">


				<textarea id="observacao" name="observacao"><?php if(!empty($observacao)){ echo "$observacao"; } ?></textarea>
				  
<!-- SCRIOT PARA O EDITOR WEB TINYMCE -->				  
<script src="https://cdn.tiny.cloud/1/g6yfrv8h3mboxcs64w2fsjcq5zepdftkos7l8j14s4u9d339/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>				  
  <script>
    tinymce.init({
      selector: '#observacao',
      height : "300",
      <?php if(!empty($observacao)){ echo "readonly: true,"; } ?>
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
  </script>  			</td>
              </tr>
	          <tr>
	            <td colspan="16">&nbsp;</td>
              </tr>
	          <tr>
	            <td colspan="16">&nbsp;</td>
              </tr>
	          <tr>
	            <td colspan="16">&nbsp;</td>
              </tr>
	          <tr>
	            <td colspan="16"><strong class="style2">Receitu&aacute;rio</strong></td>
              </tr>
	          <tr>
		<td colspan="16">
		
<!-- CABAÇARIO RECEITUÁRIO -->		
		<textarea id='receita' name='receita'> <?php if(!empty($receita)){ echo "$receita"; }else{ require_once"receita.php"; } ?> 

<!-- // -->



		</textarea>
 <script>
    tinymce.init({
      selector: '#receita',
      height : "800",
      <?php if(!empty($receita) || !empty($observacao) ){ echo "readonly: true,"; } ?>
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
 </script> </td>
 	</tr>
</table>
          <p>&nbsp;</p>
		    
        </div>
        </div>
	     <!-- /Conteúdo Modal -->
		 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
		 <input type="hidden" name="inep" value="<?php echo $_GET['inep']; ?>" />
		 <input type="hidden" name="id_usuario" value="<?php echo $id; ?>" />
        
      </div>

   
      <div class="modal-footer" style="background-color: red;">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="color:#FFFFFF;  background-color: black; border-color: #f4f7fb;" >
		 Cancelar </button>
		<button type="submit" class="btn btn-default" style="color:#FFFFFF;  background-color: black; border-color: #f4f7fb;" 
		<?php
					  	 if($_GET['lotacao'] <> 0){
					  	 		echo" disabled ";
					  	 }
					   
				 ?>  /> Incluir </button>
		
	  </form>
    </div>
  </div>

</div>

</div>


