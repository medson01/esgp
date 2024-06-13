<!-- função pegar nome de matricula -->            
  <script>
    function pegarMatricula() {
      var cpf = document.getElementById("cpf").value;
      window.location.href = "validar_matricula.php?cpf="+cpf;
    }
  </script>   


<?php


if(isset($_GET['registro'])){


	  $sql = "SELECT * FROM `escola` WHERE id=".$_GET['registro']."  ";
	  
      $stmt = $conn->prepare($sql);

      $stmt->execute();

  

       while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
 
    $nome = $registro["ESCOLA"];
    $inep = $registro["CD_CENSO"]; 
    $cnpj = $registro["NU_CNPJ"]; 
    $status = $registro["STATUS"];
    $endereco = $registro["ED_LOGRADOURO"];
    $numero = $registro["ED_NUMERO"];
    $bairro = $registro["ED_BAIRRO"];
    $municipio = $registro["ED_MUNICIPIO"];
    $estado = $registro["ED_ESTADO"];
    $cep = $registro["ED_CEP"];
    $telefone1 = $registro["NU_TELEFONE_1"];
    $telefone2 = $registro["NU_TELEFONE_2"];
    $email = $registro["ED_EMAIL"];
    $latitude = $registro["VL_LATITUDE"];
    $longitude = $registro["VL_LONGITUDE"];
    $diretor = $registro["NM_DIRETOR"];
    $localizacao = $registro["LOCALIZACAO"];
    $internet_aluno = $registro["FL_ACESSO_INTERNET_USO_ALUNOS"];
    $internet_administrativo = $registro["FL_ACESSO_INTERNET_USO_ADMINISTRATIVO"];
    $internet_ensino = $registro["FL_ACESSO_INTERNET_USO_PROCESSO_ENSINO_APRENDIZAGEM"];
    $internet_comunidade = $registro["FL_ACESSO_INTERNET_USO_COMUNIDADE"];
    $internet_status = $registro["FL_ACESSO_INTERNET_NAO_POSSUI"];
    $desktop = $registro["QT_COMPUTADORES_MESA_USO_ALUNO"];
    $notbook = $registro["QT_COMPUTADORES_PORTATEIS_USO_ALUNO"];
    $tablet = $registro["QT_COMPUTADORES_TABLET_USO_ALUNO"];
    $sala_climatizada = $registro["QT_SALAS_CLIMATIZADAS"];
    $sala_acessibilidade = $registro["QT_SALAS_ACESSIBILIDADE"];
    $impressora_multifuncional = $registro["QT_IMPRESSORA_MULTIFUNCIONAL"];
    $copiadora = $registro["QT_COPIADORA"];
    $retroprojetor = $registro["QT_RETRO_PROJETOR"];
    $impressora = $registro["QT_IMPRESSORA"];
    $aparelho_som = $registro["QT_APARELHO_SOM"];
    $projeto_multimidia = $registro["QT_PROJETOR_MULTIMIDIA"];
    $tv = $registro["QT_TV"];
    $video = $registro["QT_VIDEO"];
    $dvd = $registro["QT_DVD"];
    $antena = $registro["QT_ANTENA"];
    $sala_secretaria = $registro["FL_SALA_SECRETARIA"];
    $banheiro_chuveiro = $registro["FL_BANHEIRO_CHUVEIRO"];
    $refeitorio = $registro["FL_REFEITORIO"];
    $despensa = $registro["FL_DESPENSA"];
    $almoxarifado = $registro["FL_ALMOXARIFADO"];
    $auditorio = $registro["FL_AUDITORIO"];
    $patio_coberto = $registro["FL_PATIO_COBERTO"];
    $patio_descorberto = $registro["FL_PATIO_DESCOBERTO"];
    $alojamento_aluno = $registro["FL_ALOJAMENTO_ALUNO"];
    $alojamento_professor = $registro["FL_ALOJAMENTO_PROFESSOR"];
    $area_verde = $registro["FL_AREA_VERDE"];
    $lavanderia = $registro["FL_LAVANDERIA"];
    $sanitario_externo = $registro["FL_SANITARIO_EXTERNO"];
    $sanitario_interno = $registro["FL_SANITARIO_INTERNO"];
    $sanitario_aluno_deficiente = $registro["FL_SANITARIO_ALUNO_DEFICIENTE"];
    $diretoria = $registro["FL_DIRETORIA"];
    $sala_professor = $registro["FL_SALA_PROFESSOR"];
    $laboratorio_ciencia = $registro["FL_LABORATORIO_CIENCIA"];
    $sala_atendimento_educacional = $registro["FL_SALA_ATENDIMENTO_EDUCACIONAL"];
    $quadra_esporte = $registro["FL_QUADRA_ESPORTE"];
    $cozinha = $registro["FL_COZINHA"];
    $biblioteca = $registro["FL_BIBLIOTECA"];
    $laboratorio_informatica = $registro["FL_LABORATORIO_INFORMATICA"];
       
      }
	  
	  
	if(!isset($complexidade)){
	  list ($baixa, $media, $alta) = explode(" ", $complexidade);
	}  
	
	
	echo '<form action="atendimento_paciente_cadastro.php" method="post" class="form-group" enctype="multipart/form-data">';
	  
  }
  


  
   
	
?>
   
        <div class="form-group">
          <p>&nbsp;</p>
          <table width="100%" border="0"align="center">
            <tr>
              <td colspan="9">Dados Escola </td>
            </tr>
            <tr>
              <td colspan="9" style="border-top:ridge">&nbsp;</td>
            </tr>

					<tr>
					  <td width="256"><div class="form-group">
									<label for="label10">CNPJ</label>
									<input class="form-control" id="cnpj"  name="cnpj" readonly='true'<?php if(isset($cnpj)){ echo "value='".$cnpj."'"; }?>  required>
					  </div></td>
					  <td colspan="-1">&nbsp;</td>
					  <td colspan="-1">&nbsp;</td>
					  <td colspan="-1">&nbsp;</td>
					  <td>&nbsp;</td>
					</tr>
	
            <tr>
              <td colspan="7">
    <div class="form-group">
      <label for="email">Nome</label>
      <input class="form-control" id="nome"  name="nome" readonly='true'<?php if(isset($nome)){ echo "value='".utf8_encode($nome)."'"; echo $bloqueio = "readonly='true'"; }?>  required>
    </div>    </td>
            </tr>
            

            <tr>
              <td colspan="5"><div class="form-group">
                <label for="label2">Endere&ccedil;o</label>
                <input class="form-control" id="label2"  name="endereco" readonly='true'<?php if(isset($endereco)){ echo "value='".utf8_encode($endereco).",".$numero.",".$cep."'".$bloqueio;}?> required/>
              </div></td>
            </tr>

            <tr>
              <td width="256"><div class="form-group">
                            <label for="label10"></label>
                              <label for="label10">INEP</label>
                              <input type="text" class="form-control" id="inep"  name="inep" readonly='true'<?php if(isset($inep)){ echo "value='".$inep."'".$bloqueio;;}?> required="required" minlength="18" maxlength="18"/>
                            
              </div></td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">
			  <div class="form-group">
                <label for="label15">Data de Criação </label>
                <input type="data" class="form-control" id="data_nasc"  name="data_nasc" readonly='true'<?php if(isset($data_nasc)){ echo "value='".$data_nasc."'".$bloqueio;}?> required="required"/>
              </div></td>
              <td colspan="-1">&nbsp;</td>
              <td>			  </td>
            </tr>
            <tr>
              <td><div class="form-group">
                <label for="label4">Bairro</label>
                <input class="form-control" id="label4"  name="bairro" readonly='true'<?php if(isset($bairro)){ echo "value='".utf8_encode($bairro)."'".$bloqueio;}?>  required/>
              </div></td>
              <td width="1" colspan="-1">&nbsp;</td>
              <td width="313" colspan="-1"><div class="form-group">
                <label for="label">Cidade</label>
                <input  name="cidade" class="form-control" id="label" value="Macei&oacute;" readonly='true'<?php if(isset($cidade)){ echo "value='".$cidade."'".$bloqueio;}?>  required/>
              </div></td>
              <td width="1" colspan="-1">&nbsp;</td>
              <td width="264"><div class="form-group">
                <label for="label6">Estado</label>
                <input  name="estado" class="form-control" id="label6" value="AL" readonly='true'<?php if(isset($estado)){ echo "value='".$estado."'".$bloqueio;}?>  required/>
              </div></td>
            </tr>

            <tr>
              <td><div class="form-group">
                <label for="label7">Telefone Fixo </label>
                <input class="form-control"  name="telefone1" id="telefone1" readonly='true'<?php if(isset($telefone1)){ echo "value='".$telefone1."'".$bloqueio;}?> />
              </div></td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1"><div class="form-group">
                <label for="label8">Celular</label>
                <input class="form-control" id="telefone2"  name="telefone2" readonly='true'<?php if(isset($telefone2)){ echo "value='".$telefone2."'".$bloqueio;}?> />
              </div></td>
              <td colspan="-1">&nbsp;</td>
              <td><div class="form-group">
                <label for="label9">E-mail</label>
                <input type="email" class="form-control" id="email"  name="email" readonly='true'<?php if(isset($email)){ echo "value='".$email."'".$bloqueio;}?> />
              </div></td>
            </tr>
            <tr>
              <td><div class="form-group">
                <label for="label3">Diretor</label>
                <input class="form-control" id="diretor"  name="diretor" readonly='true'<?php if(isset($diretor)){ echo "value='".utf8_encode($diretor)."'"; echo $bloqueio = "readonly='true'"; }?>  required="required" />
              </div></td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr >
              <td >&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td ><font><font><font>Infraestrutura </font></font></font></td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td colspan="-1">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td colspan="5" style="border-top:ridge">&nbsp;</td>
            </tr>

			<tr>
			 <td colspan="5">
		    <tr>
			  <td colspan="5">&nbsp;</td>
		    </tr>
			<tr>
		    </tr>
          </table>
			 <div class="panel panel-primary">
			   <div class="panel-heading" >
			     <div align="left">Internet</div>
			   </div>
				  <div class="panel-body "  >   
				  <div> </div>
					<div class="form-check form-check-inline" style="width:20%;    ; ">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"  <?php if(isset($internet_aluno)){ if(!empty($internet_aluno)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> > 
					  <label class="form-check-label" for="inlineCheckbox1">&nbsp;Aluno</label>
					</div>
					<div class="form-check form-check-inline" style="width:20%">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" <?php if(isset($internet_administrativo)){ if(!empty($internet_administrativo)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> >
					  <label class="form-check-label" for="inlineCheckbox2">&nbsp;Administração</label>
					</div>
					<div class="form-check form-check-inline" style="width:20%">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" <?php if(isset($internet_comunidade)){ if(!empty($internet_comunidade)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> >
					  <label class="form-check-label" for="inlineCheckbox3">&nbsp;Comunidade</label>
					</div>
					<div class="form-check form-check-inline" style="width:20%">
					  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" <?php if(isset($internet_ensino)){ if(!empty($internet_ensino)){ echo "checked disabled"; }else{ echo 'disabled';  } }  ?> >
					  <label class="form-check-label" for="inlineCheckbox3">&nbsp;Aprendizagem</label>
					</div>
               </div>
			        <div></div>
	      </div>
			   			
			 <div class="panel panel-primary">
			   <div class="panel-heading" >
			     <div align="left">Computadores</div>
			   </div>
				  <div class="panel-body "  >   
					<div class="form-check form-check-inline" style="width:20%"; >
					  <label class="form-check-label" for="inlineCheckbox1">Desktop (de mesa) : </label> 
					  <strong style="color:#CC0033; font-size:18px">&nbsp;<?php echo $desktop; ?></strong>				    </div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox2">Notbooks : </label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;<?php echo $notbook; ?></strong>					</div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox3">Tablet : </label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;<?php echo $tablet; ?></strong>			        </div>
               </div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox3">&nbsp;</label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;</strong>			        </div>
          </div>
					
</div>
<div class="panel panel-primary">
			   <div class="panel-heading" >
			     <div align="left">Tipo de Sala </div>
			   </div>
				  <div class="panel-body "  >   
				  <div> </div>
					<div class="form-check form-check-inline" style="width:20%"; >
					  <label class="form-check-label" for="inlineCheckbox1">Climatizada : </label> 
					  <strong style="color:#CC0033; font-size:18px">&nbsp;<?php echo $sala_climatizada; ?></strong>				    </div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox2">Acessibilidade : </label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;<?php echo $sala_acessibilidade; ?></strong>					</div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox3">&nbsp;</label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;</strong>			        </div>
   </div>
					<div class="form-check form-check-inline" style="width:20%">
					  <label class="form-check-label" for="inlineCheckbox3">&nbsp; </label>
					  <strong style="color:#CC0033; font-size:18px">&nbsp;</strong>			        </div>
</div>			   

<div class="panel panel-primary">
  <div class="panel-heading" >
    <div align="left">Equipamento</div>
  </div>
  <div class="panel-body " align="left" >
    <div> </div>
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Impressora Multifuncional </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $impressora_multifuncional; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Impressora:</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $impressora; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Copiadora: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $copiadora; ?></strong>
	</div>	  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Aparelho de som: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $aparelho_som; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Retroprojetor: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $retroprojetor; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Projetor Multimídia: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $projeto_multimidia; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Televisão: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $tv; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Vídeio: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $video; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Dvd: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $dvd; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Antena: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $antena; ?></strong>
	</div>  
	  	  	  	  	  	  	  
  </div>
  <div></div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading" >
    <div align="left">Salas</div>
  </div>
  <div class="panel-body " align="left" >
    <div> </div>
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Secretaria </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sala_secretaria; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Professor :</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sala_professor; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Diretoria :</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $diretoria; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Auditório :</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $auditorio; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Antedimento Educacional : </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sala_atendimento_educacional; ?></strong>
	</div>	  
  </div>
  <div></div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading" >
    <div align="left">Laboratório</div>
  </div>
  <div class="panel-body " align="left" >
    <div> </div>
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Informática </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $laboratorio_informatica; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Ciências:</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $laboratorio_ciencia; ?></strong>
	</div>
  </div>
  <div></div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading" >
    <div align="left">Banheiros</div>
  </div>
  <div class="panel-body " align="left" >
    <div> </div>
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Banheiro chuveiro </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $banheiro_chuveiro; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Sanitário Externo :</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sanitario_externo; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Sanitário Interno : </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sanitario_interno; ?></strong>
	</div>	  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Sanitário Aluno Deficiente : </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $sanitario_aluno_deficiente; ?></strong>
	</div>  
  </div>
  <div></div>
</div>


<div class="panel panel-primary">
  <div class="panel-heading" >
    <div align="left">Outros</div>
  </div>
  <div class="panel-body " align="left" >
    <div> </div>
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Refeitório  </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $refeitorio; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Dispensa:</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $despensa; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Cozinha: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $cozinha; ?></strong>
	</div>	  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Almoxarifado : </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $almoxarifado; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"><span class="form-check form-check-inline" >Quadra Esporte : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $quadra_esporte; ?></strong></span></label>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Pátio Coberto: </label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $patio_coberto; ?></strong>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"><span class="form-check form-check-inline" >Pátio Descoberto : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $patio_descorberto; ?></strong></span></label>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"><span class="form-check form-check-inline" >Alojamento Professor : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $alojamento_professor; ?></strong></span></label>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"><span class="form-check form-check-inline">Alojamento aluno : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $alojamento_aluno; ?></strong></span> </label>
	</div>  
	<div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"><span class="form-check form-check-inline" >Lavanderia: <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $video; ?></strong></span></label>
	</div>  
    <div class="form-check form-check-inline" style="width:20%;">
      <label class="form-check-label" for="checkbox2">Área Verde </label>
    : <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $area_verde; ?></strong></div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3">Biblioteca:</label>
      <strong style="color:#CC0033; font-size:18px">&nbsp;&nbsp;<?php echo $biblioteca; ?></strong>
	</div>
    <div class="form-check form-check-inline" style="width:20%">
      <label class="form-check-label" for="checkbox3"></label>
    </div>	  
	</div>
  <div></div>
</div>



<p>&nbsp;</p>
			  			        <p>&nbsp;</p>
			  			        <p>&nbsp;</p>
			  			        <tr>
			  

		  


	          <div align="right">
					<input class="form-control" id="data_cadastro"  name="data_cadastro" type="hidden" <?php echo "value='".date('Y-m-d H:i:s')."'"; ?> />
                 
					
	              
 
					<p><p><p>
</div>
					  
</form>