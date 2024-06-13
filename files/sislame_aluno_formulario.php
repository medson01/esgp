<!-- função pegar nome de matricula -->            
  <script>
    function pegarMatricula() {
      var cpf = document.getElementById("cpf").value;
      window.location.href = "validar_matricula.php?cpf="+cpf;
    }
  </script>   


<?php


if(isset($_GET['registro'])){

  $sql = "SELECT * FROM `aluno` WHERE id=".$_GET['registro']."  ";
  $stmt = $conn->prepare($sql);
  $stmt->execute();



      while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
	  
	  $matricula = $registro["ID_ALUNO"];
      $nome = $registro["NOME_ALUNO"];
      $cpf = $registro["CD_INEP"];
      $endereco = $registro["LOGRADOURO"].", ".$registro["COMPLEMENTO"].", ".$registro["NUMERO"].", ".$registro["CEP"];
      $bairro = $registro["BAIRRO"];
  	  $cidade = $registro["MUNICIPIO"];
      $estado = $registro["UF"];
      $raca = $registro["DC_COR_RACA"];
      $celular = $registro["TELEFONE2"];
      $email = $registro["email"];
      $deficiente = $registro["DC_DEFICIENCIA"];
      $data_nasc = $registro["DT_NASCIMENTO"];
      $data_cadastro = $registro["data_cadastro"];
      $sexo = $registro["SEXO"];
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
	
	
	echo '<form action="sislame_aluno_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">';
	  
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
              <td colspan="12">Dados Aluno  </td>
            </tr>
            <tr>
              <td colspan="12" style="border-top:ridge">&nbsp;</td>
            </tr>
		<?php	
		
		if( !isset($_GET['registro'])) {
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
              <td colspan="3"><div class="form-group">
                  <label for="label10">Matr&iacute;cula</label>
                  <input class="form-control" id="matricula"  name="matricula" <?php if(isset($matricula)){ echo "value='".$matricula."'"; echo $bloqueio = "readonly='true'"; }?>  required>
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="10">
    <div class="form-group">
      <label for="email">Nome</label>
      <input class="form-control" id="nome"  name="nome" <?php if(isset($nome)){ echo "value='".utf8_encode($nome)."'"; } echo $bloqueio;?>  required>
    </div>    </td>
            </tr>
            

            <tr>
              <td colspan="8"><div class="form-group">
                <label for="label2">Endere&ccedil;o</label>
                <input class="form-control" id="endereco"  name="endereco" <?php if(isset($endereco)){ echo "value='".utf8_encode($endereco)."'";} echo $bloqueio; ?> required/>
              </div></td>
            </tr>

            <tr>
              <td colspan="3"><div class="form-group">
				  <label for="label10">CPF</label>
					   <input class="form-control" id="cpf"  name="cpf" <?php if(isset($cpf)){ echo "value='".$cpf."'";} echo $bloqueio;?> required/>
				  </div>			</td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label15">Data de nascimento </label>
                <input type="data" class="form-control" id="data_nasc"  name="data_nasc" <?php if(isset($data_nasc)){ echo "value='".$data_nasc."'";} echo $bloqueio; ?> required="required"/>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label">Cor de Ra&ccedil;a </label>
                <input class="form-control" id="label"  name="raca" <?php if(isset($raca)){ echo "value='".$raca."'";} echo $bloqueio; ?>  required="required"/>
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label4">Bairro</label>
                <input class="form-control" id="label4"  name="bairro" <?php if(isset($bairro)){ echo "value='".utf8_encode($bairro)."'";} echo $bloqueio; ?>  required/>
              </div></td>
              <td width="33">&nbsp;</td>
              <td width="290"><div class="form-group">
                <label for="label">Cidade</label>
                <input class="form-control" id="label2"  name="cidade" <?php if(isset($cidade)){ echo "value='".utf8_encode($cidade)."'";} echo $bloqueio; ?> required/>
              </div></td>
              <td width="32">&nbsp;</td>
              <td width="311"><div class="form-group">
                <label for="label6">Estado</label>
                <input  name="estado" class="form-control" id="label6"  <?php if(isset($estado)){ echo "value='".utf8_encode($estado)."'";} echo $bloqueio; ?>  required="required"/>
              </div></td>
            </tr>

            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label16">Sexo</label>
                <select name="sexo" id="sexo" class="form-control"  <?php if(isset($sexo)){ echo "disabled";}?> >
                  <option value=""></option>
                  <option value="F" <?php if(isset($sexo) && $sexo == 'F'){ echo "selected";}?> >Feminino</option>
                  <option value="M" <?php if(isset($sexo) && $sexo == 'M'){ echo "selected";}?> >Masculino</option>

                </select>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label16">Deficiente</label>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div align="center">
    <input type="checkbox" class="form-check-input" id="deficiente" name="deficiente" checked disabled <?php if(isset($deficiente)){ if(!empty($deficiente)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> />
  </div>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label3"></label>
                 <input  name="estado" class="form-control" id="label6"  readonly='true' <?php if(isset($deficiente)){ echo "value='".$deficiente."'";} echo $bloqueio; ?>  required="required"/>
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label7">Telefone Fixo </label>
                <input class="form-control"  name="telefone" id="telefone" readonly='true' <?php if(isset($telefone)){ echo "value='".$telefone."'";} echo $bloqueio;?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label8">Celular</label>
                <input class="form-control" id="celular"  name="celular" readonly='true' <?php if(isset($celular)){ echo "value='".$celular."'"; echo $bloqueio; }?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label9">E-mail</label>
                <input type="email" class="form-control" id="email"  name="email" readonly='true' <?php if(isset($email)){ echo "value='".$email."'";} ?> />
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
			  <td colspan="3"><font>Dados Respons&aacute;vel <span class="style8"> <br />
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
                <select name="select5" class="form-control" id="select5" readonly='true' disabled<?php if(isset($resp_parentesco)){ echo "disabled";}?> >
                  <option value=""></option>
				  <option value="mae">M&atilde;e</option>
				  <option value="pai">Pai</option>
				  <option value="padrastro">Padrasto</option>
				  <option value="madrasta">Madrasta</option>
                  <option value="tio" >Tio(a)</option>
                  <option value="imao">Im&atilde;o (&atilde;)</option>
                </select>
              </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="7"><div class="form-group">
                <label for="label3">Nome</label>
                <input class="form-control" id="nome_responsavel"  name="nome_responsavel" readonly='true'<?php if(isset($nome_responsavel)){ echo "value='".utf8_encode($nome_responsavel)."'"; } echo $bloqueio; ?>  required="required" />
              </div>			    
			    </td>
		    </tr>
			<tr>
			  <td colspan="3"><div class="form-group">
                <label for="label10">CPF</label>
                <input class="form-control" id="cpf_responsavel"  name="cpf_responsavel" readonly='true'<?php if(isset($cpf_responsavel)){ echo "value='".$cpf_responsavel."'".$bloqueio;}?> required="required"/>
              </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			
			<tr>
              <td colspan="3"><div class="form-group">
                <label for="label14">Profiss&atilde;o </label>
                <input class="form-control" id="profissao"  name="profissao" readonly='true' <?php if(isset($profissao)){ echo "value='".utf8_encode($profissao)."'" ;} echo $bloqueio; ?>  required="required"/>
              </div></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
			</tr>
            
			       
			            <td width="259"></tr>
			            <tr>
			              <td colspan="3">&nbsp;</td>
			              <td>&nbsp;</td>
			              <td>&nbsp;</td>
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
                    // Botões de Novo e Cadastrar
                    /*  
								      if( !isset($_GET['id']) && !isset($_GET['paciente'])) {
                        if (isset($bloqueio)) {
                          echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?atendimento&novo"> Novo </a> </button>&nbsp;&nbsp;&nbsp;
                                <button type = "submit" class="btn btn-primary" disabled >Cadastrar</button>';
			                   }else{
                          echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?atendimento&novo"> Novo </a> </button>&nbsp;&nbsp;&nbsp;
                                <button type = "submit" class="btn btn-primary"  >Cadastrar</button>';

                         }
                      }
                      */
                    ?>  
					<p><p><p>
                      </div>
					  
<?php if(!empty($_GET['registro'])){ echo '</form>'; } ?>