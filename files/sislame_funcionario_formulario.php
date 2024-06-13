<!-- função pegar nome de matricula -->            
<script>
    function pegarMatricula() {
      var cpf = document.getElementById("cpf").value;
      window.location.href = "validar_matricula.php?cpf="+cpf;
    }
     
// Mostrar campo descrição deficiente -->
  function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }  
	
</script>   

<?php


if(isset($_GET['registro'])){

  $sql = "SELECT * FROM `funcionario` 
  INNER JOIN escola on escola.CD_CENSO = funcionario.CENSO_ESCOLA
  WHERE funcionario.id=".$_GET['registro']."  ";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

//  115035406180

      while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
	  
	  $matricula = $registro["CD_MATRICULA"];
      $nome = $registro["NM_FUNCIONARIO"];
      $inep_funcionario = $registro["CD_INEP_FUNCIONARIO"];
	  $censo_escola = $registro["CENSO_ESCOLA"];
	  $escola = $registro["ESCOLA"];
      $endereco = $registro["LOGRADOURO"].", ".$registro["COMPLEMENTO"].", ".$registro["NUMERO"].", ".$registro["CEP"];
      $bairro = $registro["BAIRRO"];
  	  $cidade = $registro["MUNICIPIO"];
      $estado = $registro["UF"];
      $funcao = $registro["DC_FUNCIONARIO_FUNCAO"];
      $celular = $registro["TELEFONE2"];
      $email = $registro["email"];
      $deficiente = $registro["DC_DEFICIENCIA"];
      $data_nasc = $registro["DT_NASCIMENTO"];
      $data_admissao = $registro["DT_ADMISSAO"];
      $data_entrada_escola = $registro["DT_ENTRADA_ESCOLA"];
      $sexo = $registro["SEXO"];
      $data_admissao = $registro["DT_ADMISSAO"];

      $regime = utf8_encode($registro["REGIME_JURIDICO"]);

	    switch ($regime) {
        case 'CONCURSADO/EFETIVO/ESTÁVEL':
          $regime = "EFETIVO";
          break;
        case 'CONTRATO TEMPORÁRIO':
          $regime = "PSS";
          break;
        case 'CONCURSADO/EFETIVO/ESTÁVEL - COMISSIONADO':
          $regime = "EFETIVO EM COMISS&Atilde;O";
          break;
         case 'COMISSIONADO':
          $regime = "COMISSIONADO";
          break;
        case 'TERCEIRIZADO':
          $regime = "TERCEIRIZADO";
          break;
        default:
          $regime = $registro["REGIME_JURIDICO"];

        }
      }  
  }else{
  	  $sql = "SELECT CD_CENSO, ESCOLA FROM `escola` ";
	  $stmt = $conn->prepare($sql);
	  $stmt->execute();
	  $i = 1;
		while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
		 	$censo_escola[$i] = $registro["CD_CENSO"];
		 	$escola[$i] = utf8_encode($registro["ESCOLA"]);
		$i++; 
		}	
  }

?>

<!--FunÃ§Ã£o para autopreenchimento -->
<script>
   function adicionar() {
     switch (document.getElementById("escola").selectedIndex) {
        <?php     
			 for ($x=1; $x < $i ; $x++) {
				echo' case '.$x.':
                         document.getElementById("censo_escola").value = "'.$censo_escola[$x].'"
						 document.getElementById("censo_escola").readOnly = true;
                         break; 
					';
             }
         ?>

        default:
        document.getElementById("censo_escola").value = "";
     }
  }
</script> 
					  
					  
<style type="text/css">

.style1 {
input[type=text]:enabled {
  background: #ffff00;
  }
input[type=text]:disabled {
  background: #ffff00;
  }
}

</style>

<form action="funcionario_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">
      <div align="center">
        <div class="form-group">
      
          <table class="table-info"  width="98%" border="0"align="center" style="font-size: 12px;">
            <tr>
			<th colspan="12" bgcolor="#CCCCCC" style="font-weight:bold; " scope="col">
						    <div align="center" class="form-control" style="background-color:#CCCCCC">Dados Pesoais </div>			</th>
            </tr>
			<tr>
				<td>&nbsp;</td>
			</tr>

            <tr>
              <td colspan="5"><div class="form-group">
                 <label for="label" style="width: 150px;">Nome Completo</label>
                  <input class="form-control" id="nome"  name="nome" <?php if(isset($nome)){ echo "value='".utf8_encode($nome)."'"; echo $bloqueio = "readonly='true'"; }?>  required />
              </div>                </td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label">Matr&iacute;cula</label>
                <input class="form-control" id="matricula"  name="matricula" <?php echo $bloqueio; if(isset($matricula)){ echo "value='".$matricula."'"; }?>  readonly />
              </div></td>
            </tr>
            
            

            <tr>
              <td colspan="8"><div class="form-group">
                <label for="label2">Endere&ccedil;o</label>
                <input class="form-control" id="endereco"  name="endereco" <?php echo $bloqueio; if(isset($endereco)){ echo "value='".utf8_encode($endereco)."'";}?> required/>
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
				  <label for="label10">CPF</label>
					   <input class="form-control" id="cpf"  name="cpf" <?php echo $bloqueio; if(isset($cpf)){ echo "value='".$cpf."'";}?> required/>
				  </div>			</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label15">Data de nascimento </label>
                <input type="data" class="form-control" id="data_nasc"  name="data_nasc" <?php echo $bloqueio; if(isset($data_nasc)){ echo "value='".$data_nasc."'";}?> required="required"/>
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label4">Bairro</label>
                <input class="form-control" id="label4"  name="bairro" <?php echo $bloqueio; if(isset($bairro)){ echo "value='".utf8_encode($bairro)."'";}?>  required/>
              </div></td>
              <td width="33">&nbsp;</td>
              <td width="290"><div class="form-group">
                <label for="label">Cidade</label>
                <input class="form-control" id="label2"  name="cidade" <?php echo $bloqueio; if(isset($cidade)){ echo "value='".utf8_encode($cidade)."'";}else{  echo "value='Maceió'"; }?> />
              </div></td>
              <td width="32">&nbsp;</td>
              <td width="311"><div class="form-group">
                <label for="label6">Estado</label>
                <select name="estado" id="estado" class="form-control" <?php if(isset($bloqueio)){ echo "disabled";}?>  >
					<option selected>Escolher...</option>
					<option value="AC" <?php if(isset($estado) && $estado == 'AC'){ echo "selected";}?> >Acre</option>
					<option value="AL" <?php if(isset($estado) && $estado == 'AL'){ echo "selected";}else{ echo "selected"; }?> >Alagoas</option>
					<option value="AP" <?php if(isset($estado) && $estado == 'AP'){ echo "selected";}?> >Amapá</option>
					<option value="AM" <?php if(isset($estado) && $estado == 'AM'){ echo "selected";}?> >Amazonas</option>
					<option value="BA" <?php if(isset($estado) && $estado == 'BA'){ echo "selected";}?> >Bahia</option>
					<option value="DF" <?php if(isset($estado) && $estado == 'DF'){ echo "selected";}?> >Distrito Federal</option>
					<option value="ES" <?php if(isset($estado) && $estado == 'ES'){ echo "selected";}?> >Espírito Santo</option>
					<option value="GO" <?php if(isset($estado) && $estado == 'GO'){ echo "selected";}?> >Goías</option>
					<option value="MA" <?php if(isset($estado) && $estado == 'MA'){ echo "selected";}?> >Maranhão</option>
					<option value="MT" <?php if(isset($estado) && $estado == 'MT'){ echo "selected";}?> >Mato Grosso</option>
					<option value="MS" <?php if(isset($estado) && $estado == 'MS'){ echo "selected";}?> >Mato Grosso do Sul</option>
					<option value="MG" <?php if(isset($estado) && $estado == 'MG'){ echo "selected";}?> >Minas Gerais</option>
					<option value="PA" <?php if(isset($estado) && $estado == 'PA'){ echo "selected";}?> >Pará</option>
					<option value="PB" <?php if(isset($estado) && $estado == 'PB'){ echo "selected";}?> >Paraíba</option>
					<option value="PR" <?php if(isset($estado) && $estado == 'PR'){ echo "selected";}?> >Paraná</option>
					<option value="PE" <?php if(isset($estado) && $estado == 'PE'){ echo "selected";}?> >Pernambuco</option>
					<option value="PI" <?php if(isset($estado) && $estado == 'PI'){ echo "selected";}?> >Piauí</option>
					<option value="RJ" <?php if(isset($estado) && $estado == 'RJ'){ echo "selected";}?> >Rio de Janeiro</option>
					<option value="RN" <?php if(isset($estado) && $estado == 'RN'){ echo "selected";}?> >Rio Grande do Norte</option>
					<option value="RS" <?php if(isset($estado) && $estado == 'RS'){ echo "selected";}?> >Rio Grande do Sul</option>
					<option value="RO" <?php if(isset($estado) && $estado == 'RO'){ echo "selected";}?> >Rondônia</option>
					<option value="SC" <?php if(isset($estado) && $estado == 'SC'){ echo "selected";}?> >Santa Catarina</option>
					<option value="SP" <?php if(isset($estado) && $estado == 'SP'){ echo "selected";}?> >São Paulo</option>
					<option value="SE" <?php if(isset($estado) && $estado == 'SE'){ echo "selected";}?> >Sergipe</option>
					<option value="TO" <?php if(isset($estado) && $estado == 'TO'){ echo "selected";}?> >Tocantins</option>

				</select>
				
              </div></td>
            </tr>

            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label16">Sexo</label>
                <select name="sexo" id="sexo" class="form-control"  <?php if(isset($bloqueio)){ echo "disabled";}?> >
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
    <input type="checkbox" class="form-check-input" id="deficiente" name="deficiente"  value="1" onclick="Mudarestado('desc_deficiencia')" <?php if(isset($bloqueio)){ echo 'disabled';  }  if(!empty($deficiente)){ echo "checked "; }  ?> />
  </div>
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group"  id="desc_deficiencia"  style="display:none">
                <label for="label" style="width: 150px;">Descrição da Deficiência </label>
                <input class="form-control" name="desc_deficiencia" <?php if(isset($nome)){ echo "value='".utf8_encode($desc_deficiencia)."'"; echo $bloqueio = "readonly='true'"; }?>  required="required" />
              </div></td>
            </tr>
            <tr>
              <td colspan="3"><div class="form-group">
                <label for="label7">Telefone Fixo </label>
                <input class="form-control"  name="telefone" id="telefone"  <?php echo $bloqueio; if(isset($telefone)){ echo "value='".$telefone."'";}?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label8">Celular</label>
                <input class="form-control" id="celular"  name="celular"  <?php echo $bloqueio; if(isset($celular)){ echo "value='".$celular."'";}?> />
              </div></td>
              <td>&nbsp;</td>
              <td><div class="form-group">
                <label for="label9">E-mail</label>
                <input type="email" class="form-control" id="email"  name="email"  <?php echo $bloqueio; if(isset($email)){ echo "value='".$email."'";}?> />
              </div></td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="7"><div align="center" class="form-control" style="background-color:#CCCCCC"><strong>Dados Funcionais</strong></div></td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5"><div class="form-group">
                <label for="label">Cargo/Fun&ccedil;&atilde;o</label>
                <input class="form-control" id="funcao"  name="funcao" <?php echo $bloqueio; if(isset($funcao)){ echo "value='".utf8_encode($funcao)."'";}?>  required="required"/>
              </div></td>
              <td>&nbsp;</td>
              <td><font><font><font>
                <div class="form-group">
                  <label for="label20">Data admiss&atilde;o</label>
                  <font><font><font>
                  <input  class="form-control" id="data_admissao"  name="data_admissao"  <?php echo $bloqueio; if(isset($data_admissao)){ echo "value='".date("d/m/Y, H:m:s", strtotime($data_admisao))."'";}?> readonly/>
                </font></font></font></div>
              </font></font></font></td>
            </tr>

			<tr>
			  <td colspan="3"><div class="form-group">
                <label for="label">Regime Jur&iacute;dico </label>
			    ;
			    <select name="regime_juridico" id="regime_juridico" class="form-control"  <?php if(isset($bloqueio)){ echo "disabled";}?> >
                  <option value=""></option>
                  <option value="CONCURSADO/EFETIVO/ESTÁVEL" <?php if(isset($regime) && $regime == 'EFETIVO'){ echo "selected";}?> >EFETIVO</option>
                  <option value="COMISSIONADO" <?php if(isset($regime) && $regime == 'COMISSIONADO'){ echo "selected";}?> >COMISSIONADO</option>
                  <option value="CONTRATO TEMPORÁRIO" <?php if(isset($regime) && $regime == 'PSS'){ echo "selected";}?> >PSS</option>
                  <option value="CONTRATO TERCEIRIZADO" <?php if(isset($regime) && $regime == 'TERCEIRIZADO'){ echo "selected";}?> >TERCEIRIZADO</option>
                </select>
              </div></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="5"><font><font><font>
			    <div class="form-group">
                  <label for="label20">Lota&ccedil;&atilde;o</label>
                  <?php 
				  if(isset($_GET['registro'])){
					  echo' <input  class="form-control" id="escola"  name="escola"'. $bloqueio; 
							if(isset($escola)){ 
								echo "value='".utf8_encode($escola)."'>";
					  		}
				  }else{
				  	  echo '<select name="escola" id="escola" class="form-control" required  onchange= "adicionar()">';	
					  	  echo '<option value=" "> </option>';		  
					  for ($x=1; $x < $i ; $x++) { 
                          echo '<option value="'.$censo_escola[$x].'">'.$escola[$x].'</option>';
                      }                                          
					  echo '</select>';
				  }
				  ?>
                </div>
			  </font></font></font></td>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
		    </tr>
			<tr>
			  <td colspan="3"><font><font><font>
			    <div class="form-group">
                  <label for="label20">Censo Escola </label>
                  <font><font><font>
                  <input class="form-control" id="censo_escola"  name="censo_escola"  <?php echo $bloqueio; if( isset($censo_escola) && (!is_array($censo_escola))  ){ echo "value='".$censo_escola."' ";} ?> />
                </font></font></font></div>
			  </font></font></font></td>
			  <td>&nbsp;</td>
			  <td><font><font><font>
			    <div class="form-group">
                  <label for="label20">Data Entrada Escola </label>
                  <input  class="form-control" id="data_entrada_escola"  name="data_entrada_escola"  <?php echo $bloqueio; if(isset($data_entrada_escola)){ echo "value='".date("d/m/Y, H:m:s", strtotime($data_entrada_escola))."'";}?> />
                </div>
			  </font></font></font></td>
			  <td>&nbsp;</td>
			  <td><font><font><font>
			    <div class="form-group">
                  <label for="label20">INEP Funcionário </label>
                  <font><font><font>
                  <input class="form-control" id="inep_funcionario"  name="inep_funcionario"  <?php echo $bloqueio; if(isset($inep_funcionario)){ echo "value='".$inep_funcionario."'";}?> />
                </font></font></font></div>
			  </font></font></font></td>
		    </tr>
			<tr>
			  <td colspan="5"><div class="form-group">
                <label for="label">Empresa </label>
                <input class="form-control" id="empresa"  name="empresa" <?php echo $bloqueio; if(isset($empresa)){ echo "value='".utf8_encode($empresa)."'"; }?>  required="required" />
              </div></td>
			  <td>&nbsp;</td>
			  <td><div class="form-group">
                <label for="label">N&ordm; Contrato </label>
                <input class="form-control" id="contrato"  name="contrato" <?php echo $bloqueio; if(isset($contrato)){ echo "value='".utf8_encode($contrato)."'";  }?>  required="required" />
              </div></td>
		    </tr>
			<tr>
			  <td colspan="5">&nbsp;</td>
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
            
			       
			            <td width="259"></tr>
			            <tr>
			              <td colspan="3"></td>
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

                      if( isset($_GET['registro']) && !isset($_GET['novo']) ) {
                       
                          echo '<button style="width:80px"  class="btn btn-primary" > <a  style="color:#FFFFFF;" href="principal.php?funcionario&novo"> Novo </a> </button>';
                         }else{
                          echo '</button>&nbsp;&nbsp;&nbsp;
                                <button type = "submit" class="btn btn-primary"  >Cadastrar</button>';

                         }
                      
          ?>
  
					<p><p><p>
</div>
					  </form>'
