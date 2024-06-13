<!-- Trigger the modal with a button -->
<div align="right"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Incluir Evol.</button></div>


<div align="right">
  <!-- Modal -->
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-left:2%; width:100%">

    <!-- Modal content-->
    <div class="modal-content" style="width:255%">
      <div class="modal-header"><span class="modal-title">Incluir Evolu&ccedil;&atilde;o</span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">&nbsp;</h4>
      </div>
      <div class="modal-body">
	  
	  <!-- Conteúdo Modal -->
	  
       <?php


if(isset($_GET['id'])){

	  $sql = "SELECT paciente.matricula,paciente.nome,paciente.endereco,paciente.bairro,paciente.cidade,paciente.estado,paciente.telefone,paciente.celular,paciente.email,paciente.data_nasc,paciente.data_cadastro,paciente.sexo,paciente.peso,paciente.altura,paciente.raca,paciente.tipo_sang,paciente.fator_rh,paciente.quadro_clinico,paciente.diagnostico,paciente.status , paciente.deficiente,responsavel.nome as resp_nome, responsavel.tipo as resp_tipo, responsavel.telefone as resp_telefone, responsavel.celular as resp_celular, responsavel.justificativa as resp_just, responsavel.email as resp_email FROM `paciente` LEFT JOIN responsavel on responsavel.id_paciente = paciente.id where paciente.id=".$_GET['id']."";
	  
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
       
      }
}


?>
    


    <form action="paciente_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">
      <div align="center">
        <div class="form-group">
          <p>&nbsp;</p>
          <table width="100%" border="0"align="center">
            <tr>
              <td colspan="11"><strong>Evolu&ccedil;&atilde;o Fisioterapia </strong></td>
            </tr>
            <tr>
              <td colspan="11" style="border-top:ridge">&nbsp;</td>
            </tr>
			            <tr>
              <td width="256"><div class="form-group">
                <label for="label10">Matr&iacute;cula</label>
                <input type="text" class="form-control" id="matricula"  name="matricula" <?php if(isset($matricula)){ echo "value='".$matricula."' readonly='true' ";}?> required/>
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
                <label for="label4">Bairro</label>
                <input class="form-control" id="label4"  name="bairro" <?php if(isset($bairro)){ echo "value='".$bairro."' readonly='true' ";}?>  required/>
              </div></td>
              <td width="1">&nbsp;</td>
              <td width="313"><div class="form-group">
                <label for="label">Cidade</label>
                <input  name="cidade" class="form-control" id="label" value="Macei&oacute;" <?php if(isset($cidade)){ echo "value='".$cidade."' readonly='true' ";}?>  required/>
              </div></td>
              <td width="1">&nbsp;</td>
              <td width="264" colspan="3"><div class="form-group">
                <label for="label6">Estado</label>
                <input  name="estado" class="form-control" id="label6" value="AL" <?php if(isset($estado)){ echo "value='".$estado."' readonly='true' ";}?>  required/>
              </div></td>
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
                <input class="form-control" id="label5"  name="resp_nome" <?php if(isset($resp_nome)){ echo "value='".$resp_nome."' readonly='true' ";}?> />
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
              <td colspan="3"><div class="form-group">
                <label for="label15">Data de nascimento </label>
                <input type="data" class="form-control" id="data_nasc"  name="data_nasc" <?php if(isset($data_nasc)){ echo "value='".$data_nasc."' readonly='true' ";}?> required/>
              </div></td>
              <td>&nbsp;</td>
              <td>
                 <div class="form-group">
                      <label for="label16">Sexo</label>
                      <select name="sexo" id="sexo" class="form-control"  <?php if(isset($sexo)){ echo "disabled";}?> >
                 <option value=""></option>
                            <option value="f" <?php if(isset($sexo) && $sexo == 'f'){ echo "selected";}?> >Feminino</option>
                            <option value="m" <?php if(isset($sexo) && $sexo == 'm'){ echo "selected";}?> >Masculino</option>
                            <option value="o" <?php if(isset($sexo) && $sexo == 'o'){ echo "selected";}?> >Outro</option>
                            <option value="t" <?php if(isset($sexo) && $sexo == 't'){ echo "selected";}?> >Trang&ecirc;nero</option>
                      </select>
                </div>
              </td>
              <td>&nbsp;</td>
              <td colspan="3">
			  <?php
			  	if(isset($data_cadastro)){ 
					echo ' <div class="form-group">
                   			<label for="label20">Data cadastro</label>
                   			<input class="form-control" value="'.date("d/m/Y, H:m:s", strtotime($data_cadastro)).'" readonly="true" />
						 
                 </div>  ';
				 }
		       ?>
                </td>
            </tr>
			            <tr>
			              <td colspan="3"><div class="form-group">
                            <label for="label17">Peso(kg)</label>
			               
  							<input type="number" step="0.01" min="0" max="500" class="form-control" id="peso"  name="peso" <?php if(isset($peso)){ echo "value='".$peso."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td><div class="form-group">
                            <label for="label18">Altura(m)</label>
                            <input type="number" step="0.01" min="0" max="3" class="form-control" id="altura"  name="altura" <?php if(isset($altura)){ echo "value='".$altura."' readonly='true' ";}?> />
                          </div></td>
			              <td>&nbsp;</td>
			              <td colspan="3"><div class="form-group">
                            <label for="label16">Ra&ccedil;a</label>
                            <select name="raca" id="raca" class="form-control"  <?php if(isset($raca)){ echo "disabled";}?> >
                              <option value=""></option>
                              <option value="branca" <?php if(isset($raca) && $raca == 'branca'){ echo "selected";}?> >Branca</option>
                              <option value="preta" <?php if(isset($raca) && $raca == 'preta'){ echo "selected";}?> >Preta</option>
                              <option value="parda" <?php if(isset($raca) && $raca == 'parda'){ echo "selected";}?> >Parda</option>
                              <option value="amarela" <?php if(isset($raca) && $raca == 'amarela'){ echo "selected";}?> >Amarela</option>
							  <option value="indigina" <?php if(isset($raca) && $raca == 'indigina'){ echo "selected";}?> >Ind&iacute;gina</option>
                            </select>
                          </div></td>
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
			              <td>
                      <label for="label16">Deficiente</label>
                      <select name="deficiente" id="deficiente" class="form-control"  <?php if(isset($deficiente)){ echo "disabled";}?> >
                            <option value="não informado" <?php if(isset($deficiente) && $deficiente == 'não informado'){ echo "selected";}?> >Selecione</option>
                            <option value="1" <?php if(isset($deficiente) && $deficiente == '1'){ echo "selected";}?> >Sim</option>
                            <option value="0" <?php if(isset($deficiente) && $deficiente == '0'){ echo "selected";}?> >Não</option>
                      </select>
                    </td>
            </tr>
			            <tr>
			              <td colspan="8"><div class="form-group"><br />
                                <label for="label15">Quadro cl&iacute;nico inicial </label>
                                <textarea id="quadro_clinico" name="quadro_clinico" rows="4" cols="50" <?php if(isset($quadro_clinico)){ echo "disabled";}?>  required="required"><?php if(isset($quadro_clinico)){ echo $quadro_clinico;}?></textarea>
                          </div></td>
            </tr>
			            <tr>
			              <td colspan="8"><div class="form-group"><br />
                            <label for="label15">Diagn&oacute;stico </label>
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
 

	   <!-- /Conteúdo Modal -->
	   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>