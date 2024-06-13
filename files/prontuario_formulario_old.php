<?php
 require_once "atendimento_paciente_formulario.php";

if(isset($_GET['id'])){

	 echo $sql = "SELECT prontuario.matricula,prontuario.nome,prontuario.endereco,prontuario.bairro,prontuario.cidade,prontuario.estado,prontuario.telefone,prontuario.celular,prontuario.email,prontuario.data_nasc,prontuario.data_cadastro,prontuario.sexo,prontuario.peso,prontuario.altura,prontuario.raca,prontuario.tipo_sang,prontuario.fator_rh,prontuario.quadro_clinico,prontuario.diagnostico,prontuario.status , prontuario.deficiente, prontuario.complexidade,responsavel.nome as resp_nome, responsavel.parentesco as resp_parentesco, responsavel.telefone as resp_telefone, responsavel.celular as resp_celular, responsavel.email as resp_email FROM `prontuario` LEFT JOIN responsavel on responsavel.id_usuario = prontuario.id INNER JOIN usuarios on usuario.id = prontuario.id_usuario where prontuario.id=".$_GET['id']."";
	  
      $stmt = $conn->prepare($sql);

      $stmt->execute();

  

       while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){


      //paciente
      $matricula = $registro["matricula"];
      $nome = $registro["nome"];
      $endereco = $registro["endereco"];
      $bairro = $registro["bairro"];
      $cidade = $registro["cidade"];
      $estado = $registro["estado"];
      $telefone = $registro["telefone"];
      $celular = $registro["celular"];
      $email = $registro["email"];
      //Respnsável
      if(isset($registro["resp_nome"])){
		  $resp_nome = $registro["resp_nome"];
		  $resp_tipo = $registro["resp_tipo"];
		  $resp_just = utf8_decode($registro["resp_just"]);
		  $resp_telefone = $registro["resp_telefone"];
		  $resp_celular = $registro["resp_celular"];
		  $resp_email = $registro["resp_email"];
	  }
      //Dados clinicos
      $data_nasc = $registro["data_nasc"];
      $data_cadastro = $registro["data_cadastro"];
      $sexo = $registro["sexo"];
      $peso = $registro["peso"];
      $altura = $registro["altura"];
      $tipo_sang = $registro["tipo_sang"];
      $fator_rh = $registro["fator_rh"];
	  $deficiente = $registro["deficiente"];
      $raca = $registro["raca"];
      $quadro_clinico = $registro["quadro_clinico"];
      $diagnostico = $registro["diagnostico"];
	  $complexidade = $registro["complexidade"];
       
      }
}

if(!empty($complexidade)){
  list ($baixa, $media, $alta) = explode(" ", $complexidade);
}
?>
    


    <form action="prontuario_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">
      <div align="center">
        <div class="form-group">
          <p>&nbsp;</p>
          <table width="100%" border="0"align="center">
            <tr>
              <td colspan="11">Dados do Paciente  </td>
            </tr>
            <tr>
              <td colspan="11" style="border-top:ridge">&nbsp;</td>
            </tr>
			            <tr>
                          <td width="256"><div class="form-group">
                            <label for="label10">CPF</label>
                            <input type="text" class="form-control" id="cpf"  name="matricula" <?php if(isset($cpf)){ echo "value='".$cpf."' readonly='true' ";}?> required="required"/>
                          </div></td>
                          <td width="3">&nbsp;</td>
              <td colspan="7">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="9">
    <div class="form-group">
      <label for="email">Nome</label>
      <input class="form-control" id="nome"  name="nome" <?php if(isset($nome)){ echo "value='".$nome."' readonly='true' ";}?>  required>
    </div>    </td>
            </tr>
            

            <tr>
              <td colspan="7"><div class="form-group">
                <label for="label2">Endere&ccedil;o</label>
                <input class="form-control" id="label2"  name="endereco" <?php if(isset($endereco)){ echo "value='".$endereco."' readonly='true' ";}?> required/>
              </div></td>
            </tr>

            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label10">Matr&iacute;cula</label>
                <input type="text" class="form-control" id="matricula3"  name="matricula3" <?php if(isset($matricula)){ echo "value='".$matricula."' readonly='true' ";}?> required="required"/>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label10"></label>
                <div class="form-group">
                  <label for="label15">Data de nascimento </label>
                  <input type="data" class="form-control" id="data_nasc"  name="data_nasc" <?php if(isset($data_nasc)){ echo "value='".$data_nasc."' readonly='true' ";}?> required="required"/>
                </div>
              </div></td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                  <label for="label16">Sexo</label>
                  <select name="sexo" id="sexo" class="form-control"  <?php if(isset($sexo)){ echo "disabled";}?> >
                    <option value=""></option>
                    <option value="f" <?php if(isset($sexo) && $sexo == 'f'){ echo "selected";}?> >Feminino</option>
                    <option value="m" <?php if(isset($sexo) && $sexo == 'm'){ echo "selected";}?> >Masculino</option>
                    <option value="o" <?php if(isset($sexo) && $sexo == 'o'){ echo "selected";}?> >Outro</option>
                    <option value="t" <?php if(isset($sexo) && $sexo == 't'){ echo "selected";}?> >Trang&ecirc;nero</option>
                  </select>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                  <label for="label16">Deficiente</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div align="center">
                  <input type="checkbox" class="form-check-input" id="deficiente" name="deficiente" value="deficiente"  <?php if(!empty($deficiente)){ if($deficiente == "deficiente"){echo "checked disabled";} }?> />
                </div>
              </div></td>
              <td>&nbsp;</td>
              <td colspan="3">&nbsp;</td>
            </tr>

            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label7">Telefone Fixo </label>
                <input class="form-control"  name="telefone" id="telefone" <?php if(isset($telefone)){ echo "value='".$telefone."' readonly='true' ";}?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label8">Celular</label>
                <input class="form-control" id="celular"  name="celular" <?php if(isset($celular)){ echo "value='".$celular."' readonly='true' ";}?> />
              </div></td>
              <td>&nbsp;</td>
              <td colspan="3"><div class="form-group">
                <label for="label9">E-mail</label>
                <input type="email" class="form-control" id="email"  name="email" <?php if(isset($email)){ echo "value='".$email."' readonly='true' ";}?> />
              </div></td>
            </tr>

			<tr>
			  <td colspan="3"><font><span class="style8"><font><font>
			    <?php
			  	if(isset($data_cadastro)){ 
					echo ' <div class="form-group">
                   			<label for="label20">Data cadastro</label>
                   			<input class="form-control" value="'.date("d/m/Y, H:m:s", strtotime($data_cadastro)).'" readonly="true" />
						 
                 </div>  ';
				 }
		       ?>
			  </font></font></span></font></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td colspan="3">&nbsp;</td>
		    </tr>
			<tr>
              <td colspan="3"><font><span class="style8">Respons&aacute;vel</span><span class="style8"> <br />
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
              <td colspan="7" ><div class="form-group">
                <label for="label5">Nome</label>
                <input class="form-control" id="label5"  name="resp_nome" <?php if(empty($resp_nome)){ echo "value='".$resp_nome."' readonly='true' ";}?> />
              </div></td>
            </tr>
			       
			            </tr>

			            <tr>
			              <td colspan="3"><div class="form-group">
                            <label for="label14">Tipo</label>
                            <select name="resp_tipo" class="form-control" id="resp_tipo" <?php if(isset($resp_tipo)){ echo "disabled";}?> >
                              <option value="Esposo(a)">Esposo(a)</option>
                              <option value="Filho(a)">Filho(a)</option>
                              <option value="Tio(a)" >Tio(a)</option>
							  <option value="outros" >Outros</option>
                                                        </select>
                          </div></td>
			              <td>&nbsp;</td>
			              <td colspan="4" ><div class="form-group">
                            <label for="label14">Justificativa</label>
                            <input class="form-control" id="resp_just"  name="resp_just" <?php if(isset($resp_just)){ echo "value='".$resp_just."' readonly='true' ";}?> />
			              </div></td>
            </tr>
			            <tr>
			              <td colspan="3"><div class="form-group">
                            <label for="label12">Telefone Fixo </label>
                            <input  name="resp_telefone" class="form-control" id="resp_telefone" <?php if(isset($resp_telefone)){ echo "value='".$resp_telefone."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td><div class="form-group">
                            <label for="label11">Celular</label>
                            <input class="form-control" id="resp_celular"  name="resp_celular" <?php if(isset($resp_celular)){ echo "value='".$resp_celular."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td colspan="3"><div class="form-group">
                            <label for="label13">E-mail</label>
                            <input type="email" class="form-control" id="resp_email"  name="resp_email" <?php if(isset($resp_email)){ echo "value='".$resp_email."' readonly='true' ";}?>  />
                          </div></td>
            </tr>

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
								<label class="form-check-label" for="exampleCheck1">Baixa</label>
								<br />
								<label class="form-check-label" for="exampleCheck1">Média</label>
								<br />
								<label class="form-check-label" for="exampleCheck1">Alta</label>
							</div>	
							<div style="width:50%; float:left"> 
							<br />
							<input type="checkbox" class="form-check-input" id="baixa" name="baixa" value="Baixa"  <?php if(!empty($baixa)){ if($baixa == "Baixa"){echo "checked disabled";} }?> />
							<br />
							<input type="checkbox" class="form-check-input" id="media" name="media" value="Média" <?php if(!empty($media)){ if($media == "Média"){echo "checked disabled";} }?> />
							<br />
							<input type="checkbox" class="form-check-input" id="alta" name="alta" value="Alta" <?php if(!empty($alta)){ if($alta == "Alta"){echo "checked disabled";} }?> />
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
                    <?php

			                if( !isset($_GET['id']) ) {
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
 
