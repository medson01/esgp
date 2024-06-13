
<!-- Modal -->
<style type="text/css">
<!--
.style1 {input[type=text]:enabled {
  background: #ffff00;
}
-->
</style>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" style="margin-left:10%; width:50%">

    <!-- Modal content-->
    <div class="modal-content" style="width:200%">
      <div class="modal-header" style="background-color: red;">
	  	<span class="modal-title" style="color:#FFFFFF"> Cadastro do Documento </span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
        <!-- Conteúdo Modal -->

		<!-- Inclusão via java script de instrução php--> 
		  
		  
		  
        <br />
        <div class="hidden-print">
          <table width="100% " border="0" align="center">
            <tr>
              <td colspan="3" bgcolor="#CCCCCC"><div align="center" class="style5"> <br />
                Imagem do Documento <br />
                <br />
                <br />
</div></td>
            </tr>
            <?php if(isset($aviso)){echo $aviso;} ?>
          </table>
          <br />
          <br />
          <form id="imagem_formulario" name="imagem_formulario" enctype="multipart/form-data" action="imagem_upload.php" method="post">
            <br />
            <div> 
			<div align="left">
              <label>
             Nome do Documento </label>
			 </div>
                <input name="nome_documento" id ="nome_documento" type="text" class="form-control input-sm"  required="required"  style="text-transform: uppercase;" >
              <br />
			<div align="left">
			<label>Observa&ccedil;&otilde;es sobre a Imagem</label>
             <textarea class="form-control input-sm" name="descricao"  style="font-size:12px; margin: 0px; height: 100px; width: 100%; text-transform: uppercase;" form="imagem_formulario" placeholder="Entre com o texto aqui..."  <?php if(isset($descricao)){ echo "value='".$descricao."'  readonly='true'  ";}?>  > 

                               

             </textarea>
			 </div>
			  

              <input name="id" type="hidden"  value="<?php echo $_GET["registro"]; ?>" />
              <input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
			  <input type="hidden" name="evento" value="cadastro" />
		
              <br />
              <br />
            </div>
            <div>
              <input name="imagem" type="file" class="form-control-file" required="required" />
            </div>
            <br />
            <div>
              <input name="submit" type="submit" class="btn btn-primary " value="Adicionar Imagem" >
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
  
  