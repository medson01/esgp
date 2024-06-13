<!-- função pegar nome de matricula -->            
  <script>
    function pegarMatricula() {
      var cpf = document.getElementById("cpf").value;
      window.location.href = "validar_matricula.php?cpf="+cpf;
    }
  </script>   


<?php


if(isset($_GET['atendimento'])){


	  $sql = "SELECT usuarios.nome, usuarios.endereco, usuarios.cpf, usuarios.data_nasc, usuarios.matricula, usuarios.bairro, usuarios.cidade, usuarios.estado, usuarios.sexo, usuarios.deficiente, usuarios.telefone, usuarios.celular, usuarios.email, usuarios.data_cadastro, responsavel.nome as resp_nome, responsavel.parentesco as resp_parentesco, responsavel.celular as resp_celular, responsavel.email as resp_email FROM `usuarios` LEFT JOIN responsavel ON responsavel.id_usuario = usuarios.id where usuarios.id=".$_GET['atendimento']."  ";
	  
      $stmt = $conn->prepare($sql);

      $stmt->execute();

  

       while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){


      //paciente
      $matricula = $registro["matricula"];
      $nome = $registro["nome"];
      $cpf = $registro["cpf"];
      $endereco = $registro["endereco"];
      $bairro = $registro["bairro"];
      $cidade = $registro["cidade"];
      $estado = $registro["estado"];
      $telefone = $registro["telefone"];
      $celular = $registro["celular"];
      $email = $registro["email"];
      $deficiente = $registro["deficiente"];
      $data_nasc = $registro["data_nasc"];
      $data_cadastro = $registro["data_cadastro"];
      $sexo = $registro["sexo"];
      //Respnsável
		  $resp_nome = $registro["resp_nome"];
		  $resp_parentesco = $registro["resp_parentesco"];
		  $resp_telefone = $registro["resp_telefone"];
		  $resp_celular = $registro["resp_celular"];
		  $resp_email = $registro["resp_email"];
       
      }
	  
	  
	if(!isset($complexidade)){
	  list ($baixa, $media, $alta) = explode(" ", $complexidade);
	}  
	
	
	echo '<form action="atendimento_paciente_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">';
	  
  }
  if($_GET['matricula']){
      //paciente
      $id_user = $_GET["id_user"];
      $matricula = $_GET["matricula"];
      $nome = $_GET["nome"];
      $cpf = $_GET["cpf"];
      $endereco = $_GET["endereco"];
      $bairro = $_GET["bairro"];
      $cidade = $_GET["cidade"];
      $estado = $_GET["estado"];
      $telefone = $_GET["telefone"];
      $celular = $_GET["celular"];
      $email = $_GET["email"];
      $deficiente = $_GET["deficiente"];
      $data_nasc = $_GET["data_nasc"];
      $data_cadastro = $_GET["data_cadastro"];
      $sexo = $_GET["sexo"];
      //Respnsável
      $resp_nome = $_GET["resp_nome"];
      $resp_parentesco = $_GET["resp_parentesco"];
      $resp_telefone = $_GET["resp_telefone"];
      $resp_celular = $_GET["resp_celular"];
      $resp_email = $_GET["resp_email"];

  }


  
   
	
?>
      <div align="center">
        <div class="form-group">
          <p>&nbsp;</p>
          <table width="98%" border="0"align="center">
            <tr>
              <td colspan="12">Dados  Possoais </td>
            </tr>
            <tr>
              <td colspan="12" style="border-top:ridge">&nbsp;</td>
            </tr>
		<?php	
		
		if( !isset($_GET['atendimento'])) {
				echo'
					<tr>
					  <td width="3" colspan="3"><div class="form-group">
									<label for="label10">CPF</label>
									<input type="text" class="form-control" id="cpf"  name="cpf" onchange="pegarMatricula()"  ';
                  if(isset($cpf)){ echo "value='".$cpf."' readonly='true' ";}
        echo'     required="required"/>
					  </div></td>
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					  <td>&nbsp;</td>
					  <td colspan="3">&nbsp;</td>
					</tr>
				';
		}
		?>	
            <tr>
              <td colspan="10">
    <div class="form-group">
      <label for="email">Nome</label>
      <input class="form-control" id="nome"  name="nome" <?php if(isset($nome)){ echo "value='".$nome."'"; echo $bloqueio = "readonly='true'"; }?>  required>
    </div>    </td>
            </tr>
            

            <tr>
              <td colspan="8"><div class="form-group">
                <label for="label2">Endere&ccedil;o</label>
                <input class="form-control" id="label2"  name="endereco" <?php if(isset($endereco)){ echo "value='".$endereco."'".$bloqueio;}?> required/>
              </div></td>
            </tr>

            <tr>
              <td colspan="3"><?php
			if( !isset($_GET['paciente'])) {	  
			echo'	  <div class="form-group">
				  <label for="label10">CPF</label>
					  <input type="text" class="form-control" id="cpf"  name="cpf" ';
					  if(isset($cpf)){ echo "value='".$cpf."' readonly='true' ";}
			echo'	 required="required"/>
				  </div>
			';
		}	  
		?></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label15">Data de nascimento </label>
                <input type="data" class="form-control" id="data_nasc"  name="data_nasc" <?php if(isset($data_nasc)){ echo "value='".$data_nasc."'".$bloqueio;}?> required="required"/>
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label4">Bairro</label>
                <input class="form-control" id="label4"  name="bairro" <?php if(isset($bairro)){ echo "value='".$bairro."'".$bloqueio;}?>  required/>
              </div></td>
              <td width="33">&nbsp;</td>
              <td width="290"><div class="form-group">
                <label for="label">Cidade</label>
                <input  name="cidade" class="form-control" id="label" value="Macei&oacute;" <?php if(isset($cidade)){ echo "value='".$cidade."'".$bloqueio;}?>  required="required"/>
              </div></td>
              <td width="32">&nbsp;</td>
              <td width="311"><div class="form-group">
                <label for="label6">Estado</label>
                <input  name="estado" class="form-control" id="label6" value="AL" <?php if(isset($estado)){ echo "value='".$estado."'".$bloqueio;}?>  required="required"/>
              </div></td>
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
    <input type="checkbox" class="form-check-input" id="deficiente" name="deficiente" value="deficiente"  <?php if(isset($deficiente)){ if(!empty($deficiente)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> />
  </div>
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label7">Telefone Fixo </label>
                <input class="form-control"  name="telefone" id="telefone" <?php if(isset($telefone)){ echo "value='".$telefone."'".$bloqueio;}?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label8">Celular</label>
                <input class="form-control" id="celular"  name="celular" <?php if(isset($celular)){ echo "value='".$celular."'".$bloqueio;}?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label9">E-mail</label>
                <input type="email" class="form-control" id="email"  name="email" <?php if(isset($email)){ echo "value='".$email."'".$bloqueio;}?> />
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><font><font><font>
                <?php
			  	if(isset($data_cadastro)){ 
					echo ' <div class="form-group">
                   			<label for="label20">Data cadastro</label>
                   			<input class="form-control" value="'.date("d/m/Y, H:m:s", strtotime($data_cadastro)).'" readonly="true" />
						 
                 </div>  ';
				 }
		       ?>
              </font></font></font></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

			<tr>
			  <td colspan="3">&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="3"><font>Dados Funcionais <span class="style8"> <br />
              </span></font></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td><font><br />
              </font></td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="8" style="border-top:ridge">&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="3"><div class="form-group">
                <label for="label14">V&iacute;nculo</label>
                <select name="select5" class="form-control" id="select5" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                  <option value=""></option>
                  <option value="conjuge">Esposo(a)</option>
                  <option value="filho">Filho(a)</option>
                  <option value="tio" >Tio(a)</option>
                  <option value="outros" >Outros</option>
                </select>
              </div></td>
			  <td>&nbsp;</td>
			  <td><div class="form-group">
                <label for="label14">Intitui&ccedil;&atilde;o / Empresa</label>
                <select name="select6" class="form-control" id="select6" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                  <option value=""></option>
                  <option value="conjuge">Esposo(a)</option>
                  <option value="filho">Filho(a)</option>
                  <option value="tio" >Tio(a)</option>
                  <option value="outros" >Outros</option>
                </select>
              </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="3"><div class="form-group">
                  <label for="label5">Cargo</label>
                  <input class="form-control" id="label5"  name="resp_nome" <?php if(isset($resp_nome)){ echo "value='".$resp_nome."'".$bloqueio;}?> />
              </div></td>
			  <td>&nbsp;</td>
			  <td><div class="form-group">
                  <label for="label14">Fun&ccedil;&atilde;o</label>
                  <select name="select2" class="form-control" id="select2" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                    <option value=""></option>
                    <option value="conjuge">Esposo(a)</option>
                    <option value="filho">Filho(a)</option>
                    <option value="tio" >Tio(a)</option>
                    <option value="outros" >Outros</option>
                  </select>
              </div></td>
			  <td>&nbsp;</td>
			  <td><div class="form-group">
                  <label for="label14">Diciplina</label>
                  <select name="select4" class="form-control" id="select4" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                    <option value=""></option>
                    <option value="conjuge">Esposo(a)</option>
                    <option value="filho">Filho(a)</option>
                    <option value="tio" >Tio(a)</option>
                    <option value="outros" >Outros</option>
                  </select>
              </div></td>
		    </tr>
			<tr>
			  <td colspan="3"><div class="form-group">
                <label for="label10"></label>
                <label for="label10">Matr&iacute;cula</label>
                <input type="text" class="form-control" id="matricula"  name="matricula" <?php if(isset($matricula)){ echo "value='".$matricula."'".$bloqueio;;}?> required="required" minlength="18" maxlength="18"/>
              </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="7"><div class="form-group">
                <label for="label14">Lota&ccedil;&atilde;o</label>
                <select name="resp_parentesco" class="form-control" id="resp_parentesco" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                  <option value=""></option>
                  <option value="conjuge">Esposo(a)</option>
                  <option value="filho">Filho(a)</option>
                  <option value="tio" >Tio(a)</option>
                  <option value="outros" >Outros</option>
                </select>
              </div></td>
		    </tr>
			<tr>
              <td colspan="3">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            
			       
			            <td width="259"></tr>
			            <tr>
			              <td colspan="3"><div class="form-group">
                              <label for="label14">Carga Hor&aacute;ria </label>
                              <select name="select" class="form-control" id="select" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                                <option value=""></option>
                                <option value="conjuge">Esposo(a)</option>
                                <option value="filho">Filho(a)</option>
                                <option value="tio" >Tio(a)</option>
                                <option value="outros" >Outros</option>
                              </select>
                          </div></td>
			              <td>&nbsp;</td>
			              <td><div class="form-group">
                              <label for="label7">Hora Extra </label>
                              <select name="select3" class="form-control" id="select3" <?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                                <option value=""></option>
                                <option value="conjuge">Esposo(a)</option>
                                <option value="filho">Filho(a)</option>
                                <option value="tio" >Tio(a)</option>
                                <option value="outros" >Outros</option>
                              </select>
                          </div></td>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
		                </tr>
			            <tr>
			              <td colspan="8">&nbsp;</td>
			            </tr>
          </table>
		  
        </div>
      </div>
	                <div align="right">
					<input class="form-control" id="data_cadastro"  name="data_cadastro" type="hidden" <?php echo "value='".date('Y-m-d H:i:s')."'"; ?> />
                 
					
	                  <?php

								      if( !isset($_GET['id']) && !isset($_GET['paciente'])) {
                        if (isset($bloqueio)) {
                          echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?atendimento&novo"> Novo </a> </button>&nbsp;&nbsp;&nbsp;
                                <button type = "submit" class="btn btn-primary" disabled >Cadastrar</button>';
			                   }else{
                          echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?atendimento&novo"> Novo </a> </button>&nbsp;&nbsp;&nbsp;
                                <button type = "submit" class="btn btn-primary"  >Cadastrar</button>';

                         }
                      }
                    ?>  
					<p><p><p>
                      </div>
					  
<?php if(!empty($_GET['atendimento'])){ echo '</form>'; } ?>