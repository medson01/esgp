<?php
// arquivo atendimento paciente formulario
 require_once "atendimento_paciente_formulario.php";

 	  $sql = "SELECT  peso, altura, tipo_sang, fator_rh, quadro_clinico, diagnostico, complexidade FROM `prontuario` INNER JOIN usuarios on usuarios.id = prontuario.id_usuario where usuarios.id = ".$_GET['id_user']." AND  prontuario.id=".$_GET['cadastro'];
	  
      $stmt = $conn->prepare($sql);

      $stmt->execute();

  

       while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

       	  $peso = $registro["peso"];	
       	  $altura = $registro["altura"];	
       	  $tipo_sang = $registro["tipo_sang"];	
       	  $fator_rh = $registro["fator_rh"];	
       	  $quadro_clinico = $registro["quadro_clinico"];	
       	  $diagnostico = $registro["diagnostico"];	
       	  $complexidade = $registro["complexidade"];	


       }

?>
    


    <form action="prontuario_cadastro.php" method="post" class="form-group" enctype="multipart/form-data"> -
      <div align="center">
        <div class="form-group">
          <p>&nbsp;</p>
          <table width="100%" border="0"align="center">

			<tr>
			  <td colspan="3"><font><span class="style8">Dados Clínicos </span><span class="style8"> <br />
              </span></font></td>
			  <td>&nbsp;</td>
			  <td><font><br />
              </font></td>
			  <td>&nbsp;</td>
			  <td colspan="3"><font><span class="style8"><font><font><br />
              </font></font></span></font></td>
            </tr>
			            <tr>
			              <td colspan="7" style="border-top:ridge">&nbsp;</td>
            </tr>
			            <tr>
                          <td colspan="3">&nbsp;</td>
                          <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
			            <tr>
			              <td colspan="3"><div class="form-group">
                            <label for="label17">Peso(kg)</label>
			               
  							<input type="number" step="0.01" min="0" max="200" class="form-control" id="peso"  name="peso" <?php if(isset($peso)){ echo "value='".$peso."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td><div class="form-group">
                            <label for="label18">Altura(m)</label>
                            <input type="number" step="0.01" min="0" max="3" class="form-control" id="altura"  name="altura" <?php if(isset($altura)){ echo "value='".$altura."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td colspan="3">&nbsp;</td>
            </tr>
			            <tr>
			              <td colspan="3"><label for="label16">Tipo Sanguineo</label>
                            <select name="tipo_sang" id="tipo_sang" class="form-control" <?php if(isset($tipo_sang)){ echo "disabled";}?> >
                              <option value="NAO INFORMADO">Selecione</option>
                              <option value="A"<?php if(isset($tipo_sang) && $tipo_sang == 'A'){ echo "selected";}?> >A</option>
                              <option value="B" <?php if(isset($tipo_sang) && $tipo_sang == 'B'){ echo "selected";}?> >B</option>
                              <option value="AB" <?php if(isset($tipo_sang) && $tipo_sang == 'AB'){ echo "selected";}?> >AB</option>
                              <option value="O" <?php if(isset($tipo_sang) && $tipo_sang == 'O'){ echo "selected";}?> >O</option>
                            </select></td>
			              <td>&nbsp;</td>
			              <td><label for="label17">Fator RH</label>
                            <select name="fator_rh" id="fator_rh" class="form-control"  <?php if(isset($fator_rh)){ echo "disabled";}?>  >
                              <option value="não informado" <?php if(isset($fator_rh) && $fator_rh == 'não informado'){ echo "selected";}?> >Selecione</option>
                              <option value="positivo" <?php if(isset($fator_rh) && $fator_rh == 'positivo'){ echo "selected";}?> >Positivo</option>
                              <option value="negativo" <?php if(isset($fator_rh) && $fator_rh == 'negativo'){ echo "selected";}?> >Negativo</option>
                            </select></td>
			              <td>&nbsp;</td>
			              <td><label for="label16"></label></td>
            </tr>
			            <tr>
			              <td colspan="3">
						  <div><br />	
						    <label for="label16">Complexidade</label>
						  	<br />
						  </div>						  </td>
			              <td>&nbsp;</td>
			              <td>
						  <div> 
						    <div style="width:50%; float:left"> 
							<br />

								<?php 
								  
										if(isset($complexidade)){
											$baixa = strripos($complexidade ,"Baixa");
											$media = strripos($complexidade ,"Média");
											$alta = strripos($complexidade ,"Alta");

										}							
								?>

								<label class="form-check-label" for="exampleCheck1">Baixa</label>
								<br />
								<label class="form-check-label" for="exampleCheck1">Média</label>
								<br />
								<label class="form-check-label" for="exampleCheck1">Alta</label>
							</div>	
							<div style="width:50%; float:left"> 
							<br />
							<input type="checkbox" class="form-check-input" id="baixa" name="baixa" value="Baixa"  <?php if($baixa !== false && isset($baixa)) {echo "checked ";} if(isset($complexidade)){ echo "disabled";} ?> />
							<br />
							<input type="checkbox" class="form-check-input" id="media" name="media" value="Média" <?php if($media !== false && isset($media)) { echo "checked "; } if(isset($complexidade)){ echo "disabled";} ?> />
							<br />
							<input type="checkbox" class="form-check-input" id="alta" name="alta" value="Alta" 			<?php if($alta !== false && isset($alta)) { echo "checked ";} if(isset($complexidade)){ echo "disabled";} ?> />
							</div>
						  </div>						  </td>
			              <td>&nbsp;</td>
			              <td>
                      <label for="label16"></label></td>
            </tr>
			            <tr>
			              <td colspan="8"><div class="form-group"><br />
                                <label for="label15">Observações clínicas sobre o paciente  </label>
                                <textarea id="quadro_clinico" name="quadro_clinico" rows="4" cols="50" <?php if(isset($quadro_clinico)){ echo "disabled";}?>  required="required"><?php if(isset($quadro_clinico)){ echo $quadro_clinico;}?></textarea>
                          </div></td>
            </tr>
			            <tr>
			              <td colspan="8"><div class="form-group"><br />
                            <label for="label15">Observações financeiras sobre o paciente  </label>
                            <textarea id="diagnostico" name="diagnostico" rows="4" cols="50" <?php if(isset($diagnostico)){ echo "disabled";}?> required><?php if(isset($diagnostico)){ echo $diagnostico;}?></textarea>
                          </div></td>
            </tr>
			            <tr>
			              <td colspan="3"><div class="form-group">
                            <label for="label17"></label>
			              </div></td>
			              <td>&nbsp;</td>
			              <td><div class="form-group">
                            <label for="label17"></label>
			              </div></td>
			              <td>&nbsp;</td>
			              <td colspan="3">&nbsp;</td>
            </tr>
			            <tr>
			              <td colspan="3"></td>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
			              <td colspan="3" align="right"><label>
			                  <div align="right">
							  
					       <input class="form-control" id="data_cadastro"  name="data_cadastro" type="hidden" <?php echo "value='".date('Y-m-d H:i:s')."'"; ?> />
					        <input class="form-control" id="id_user"  name="id_user" type="hidden" <?php echo "value='".$id_user."'"; ?> />
                    <?php

											echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?paciente&novo"> Novo </a> </button>&nbsp;&nbsp;&nbsp;

											';
			                if($_GET['matricula']){
                          echo '<button type = "submit"   class="btn btn-primary" >Cadastrar</button>';
			                }
													
                                
                    ?>  
                        </div>
			              </label></td>
            </tr>
          </table>
          <p>&nbsp;</p>
		  
        </div>
      </div>
	  

    </form>
 
