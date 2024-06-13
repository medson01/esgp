	    
<?php 


// Arquivo de configuração
  require_once "../config/config.php";
     
     $sql2 = "SELECT id, nome FROM credenciado";
     $stmt2 = $conn->prepare($sql2);
     $stmt2->execute(); 

     //$sql = mysqli_query($conn,"SELECT id, nome FROM credenciado") or die("erro ao carregar os usuários");
      
    $sql = "SELECT (usuarios.id) as id, (usuarios.nome) as nome, (login.login) as login, (login.perfil) as perfil,usuarios.lotacao as lotacao, (credenciado.nome) as credenciado, (login.ultimo_logon) as ultimo_logon FROM login INNER JOIN usuarios ON usuarios.id = login.id_usuarios JOIN credenciado ON credenciado.id = usuarios.id_credenciado ORDER BY credenciado, perfil, lotacao, nome";
    
      $stmt = $conn->prepare($sql);
      $stmt->execute();           
 ?>

       <!-- Formulario -->
       <style type="text/css">
<!--
.style1 {font-size: 10px}
-->
       </style>
       
      
    <form action ="user_system_cadastrar.php"method="post"class="form-group">
           
        <div align="center">             
          <div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                          <p>&nbsp;</p>
                          <table border="0"align="center">
                            <tr>
                              <td width="125"><font>Nome&nbsp;</font></td>
                              <td width="10">&nbsp;</td>
                              <td width="385">
                                <div align="left">
                                  <input name="nome" type="text" class="form-control"  id="nome" style="background:#faffbd;" size="60" required="required" />
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="125"><font>Sobre nome Nome&nbsp;</font></td>
                              <td width="10">&nbsp;</td>
                              <td width="385">
                                <div align="left">
                                  <input name="sobre_nome" type="text" class="form-control"  id="sobre_nome" style="background:#faffbd;" size="60" required="required" />
                              </div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Cpf</td>
                              <td>&nbsp;</td>
                              <td><input class="form-control"  style="background:#faffbd;" type="text" name="login" id="cpf_cnpj"  required="required" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Lotação</td>
                              <td>&nbsp;</td>
                              <td><select class="form-control"  style="background:#faffbd;" id="lotacao" name="lotacao" required="required">
                                <option  value="externa">Externa</option>
                                <option  value="interna">Interna</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Perfil</td>
                              <td>&nbsp;</td>
                              <td><select class="form-control"  style="background:#faffbd;" id="perfil" name="perfil" required="required">
                                  <option  value="administrador">Administrador</option>
                                  <option  value="medico_ambul">Médico(ambulatório)</option>
								  <option  value="medico_padi">Médico(PADI)</option>
                                  <option  value="atendente">Atendente</option>
                                  <option  value="supervisor">Supervisor</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Fechar Prontuário </td>
                              <td>&nbsp;</td>
                              <td><label>
                                <input class="form-check-input" type="checkbox" name="fechar" value="checkbox" />
                              </label></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>CR</td>
                              <td>&nbsp;</td>
                              <td><input class="form-control"   onkeypress="bloqueio()" style="background:#faffbd;" type="text" name="cr" id="cr" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Especialidade</td>
                              <td>&nbsp;</td>
                              <td><select style="background:#faffbd;" id="especialidade" name="especialidade" class="form-control">
							    <option value=""> ... </option>
                                <option value="ALERGIA E IMUNOLOGIA"> ALERGIA E IMUNOLOGIA </option>
                                <option value="ALERGIA"> ALERGIA </option>
                                <option value="ALERGOLOGIA"> ALERGOLOGIA </option>
                                <option value="ANESTESIA"> ANESTESIA </option>
                                <option value="ANESTESIOLOGIA"> ANESTESIOLOGIA </option>
                                <option value="ANESTESIOLOGIA/COLPOSCOPIA"> ANESTESIOLOGIA/COLPOSCOPIA </option>
                                <option value="ANGIOLOGIA E CIRURGIA VASCULAR"> ANGIOLOGIA E CIRURGIA VASCULAR </option>
                                <option value="ANGIOLOGIA"> ANGIOLOGIA </option>
                                <option value="BUCO MAXILO"> BUCO MAXILO </option>
                                <option value="BUCO-MAXILO"> BUCO-MAXILO </option>
                                <option value="CABECA/PESCOCO"> CABECA/PESCOCO </option>
                                <option value="CANCEROLOGIA"> CANCEROLOGIA </option>
                                <option value="CARCEROLOGIA E ONCOLOGIA CLINICA"> CARCEROLOGIA E ONCOLOGIA CLINICA </option>
                                <option value="CARDIOLOGIA / ECOCARDIOGRAFIA"> CARDIOLOGIA / ECOCARDIOGRAFIA </option>
                                <option value="CARDIOLOGIA PEDIATRICA"> CARDIOLOGIA PEDIATRICA </option>
                                <option value="CARDIOLOGIA"> CARDIOLOGIA </option>
                                <option value="CARDIOLOGIA/ ERGOMETRIA"> CARDIOLOGIA/ ERGOMETRIA </option>
                                <option value="CIRURGIA ABDOMINAL"> CIRURGIA ABDOMINAL </option>
                                <option value="CIRURGIA BUCO-MAXILO-FACIAL"> CIRURGIA BUCO-MAXILO-FACIAL </option>
                                <option value="CIRURGIA CABECA E PESCOCO"> CIRURGIA CABECA E PESCOCO </option>
                                <option value="CIRURGIA CARDIOVASCULAR"> CIRURGIA CARDIOVASCULAR </option>
                                <option value="CIRURGIA DA MAO"> CIRURGIA DA MAO </option>
                                <option value="CIRURGIA DE CABECA E PESCOCO"> CIRURGIA DE CABECA E PESCOCO </option>
                                <option value="CIRURGIA DERMATOLOGICA"> CIRURGIA DERMATOLOGICA </option>
                                <option value="CIRURGIA DO APARELHO DIGESTIVO"> CIRURGIA DO APARELHO DIGESTIVO </option>
                                <option value="CIRURGIA ESTETICA/REPARADORA"> CIRURGIA ESTETICA/REPARADORA </option>
                                <option value="CIRURGIA GERAL"> CIRURGIA GERAL </option>
                                <option value="CIRURGIA GINECOLOGIA"> CIRURGIA GINECOLOGIA </option>
                                <option value="CIRURGIA OBSTETRICA"> CIRURGIA OBSTETRICA </option>
                                <option value="CIRURGIA OFTALMOLOGICA"> CIRURGIA OFTALMOLOGICA </option>
                                <option value="CIRURGIA ONCOLOGICA"> CIRURGIA ONCOLOGICA </option>
                                <option value="CIRURGIA ORAL"> CIRURGIA ORAL </option>
                                <option value="CIRURGIA OTORRINO"> CIRURGIA OTORRINO </option>
                                <option value="CIRURGIA PEDIATRICA"> CIRURGIA PEDIATRICA </option>
                                <option value="CIRURGIA PLASTICA"> CIRURGIA PLASTICA </option>
                                <option value="CIRURGIA TORACICA"> CIRURGIA TORACICA </option>
                                <option value="CIRURGIA TORAXICA"> CIRURGIA TORAXICA </option>
                                <option value="CIRURGIA UROLOGICA"> CIRURGIA UROLOGICA </option>
                                <option value="CIRURGIA VASCULAR E PERIFERICA"> CIRURGIA VASCULAR E PERIFERICA </option>
                                <option value="CIRURGIA VASCULAR"> CIRURGIA VASCULAR </option>
                                <option value="CIRURGIA"> CIRURGIA </option>
                                <option value="CITOLOGIA"> CITOLOGIA </option>
                                <option value="CITOPATOLOGIA"> CITOPATOLOGIA </option>
                                <option value="CLINICA CIRURGICA"> CLINICA CIRURGICA </option>
                                <option value="CLINICA DE DOR"> CLINICA DE DOR </option>
                                <option value="CLINICA GERAL E ENDODONTIA"> CLINICA GERAL E ENDODONTIA </option>
                                <option value="CLINICA GERAL"> CLINICA GERAL </option>
                                <option value="CLINICA MEDICA E INFECTOLOGIA"> CLINICA MEDICA E INFECTOLOGIA </option>
                                <option value="CLINICA MEDICA ODONTOLOGICA"> CLINICA MEDICA ODONTOLOGICA </option>
                                <option value="CLINICA MEDICA"> CLINICA MEDICA </option>
                                <option value="CLINICA ORTOPEDICA E FISIOTERAPICA"> CLINICA ORTOPEDICA E FISIOTERAPICA </option>
                                <option value="CLINICA VASCULAR PERIFERICA"> CLINICA VASCULAR PERIFERICA </option>
                                <option value="CLINICAS"> CLINICAS </option>
                                <option value="COLONOSCOPIA"> COLONOSCOPIA </option>
                                <option value="COLOPROCTOLOGIA"> COLOPROCTOLOGIA </option>
                                <option value="COLPOSCOPIA"> COLPOSCOPIA </option>
                                <option value="COMPOCUPISTA"> COMPOCUPISTA </option>
                                <option value="DENSIOMETRIA"> DENSIOMETRIA </option>
                                <option value="DERMATOLOGIA"> DERMATOLOGIA </option>
                                <option value="DERMATOLOGIA"> DERMATOLOGIA </option>
                                <option value="DERMATOLOGIA"> DERMATOLOGIA </option>
                                <option value="DIABETES"> DIABETES </option>
                                <option value="DIABETOLOGIA - DIABETES"> DIABETOLOGIA - DIABETES </option>
                                <option value="DOPPLERFLUXOMETRIA"> DOPPLERFLUXOMETRIA </option>
                                <option value="ECG"> ECG </option>
                                <option value="ENDOCRINOLOGIA PEDIATRICA"> ENDOCRINOLOGIA PEDIATRICA </option>
                                <option value="ENDOCRINOLOGIA"> ENDOCRINOLOGIA </option>
                                <option value="ENDODONTIA"> ENDODONTIA </option>
                                <option value="ENDOSCOPIA"> ENDOSCOPIA </option>
                                <option value="ERGOMETRIA"> ERGOMETRIA </option>
                                <option value="ESPIROMETRIA"> ESPIROMETRIA </option>
                                <option value="FISIATRIA"> FISIATRIA </option>
                                <option value="FISIOTERAPIA"> FISIOTERAPIA </option>
                                <option value="FONOAUDIOLOGIA CLINICA"> FONOAUDIOLOGIA CLINICA </option>
                                <option value="FONOAUDIOLOGIA"> FONOAUDIOLOGIA </option>
                                <option value="FONOTERAPIA"> FONOTERAPIA </option>
                                <option value="GASTRO/PEDIATRIA"> GASTRO/PEDIATRIA </option>
                                <option value="GASTROENTEROLOGIA"> GASTROENTEROLOGIA </option>
                                <option value="GENETICA"> GENETICA </option>
                                <option value="GERIATRIA"> GERIATRIA </option>
                                <option value="GINECOLOGIA E COLPOSCOPIA"> GINECOLOGIA E COLPOSCOPIA </option>
                                <option value="GINECOLOGIA E OBSTETRICIA"> GINECOLOGIA E OBSTETRICIA </option>
                                <option value="GINECOLOGIA INFANTO PULBERAL"> GINECOLOGIA INFANTO PULBERAL </option>
                                <option value="GINECOLOGIA OBSTETRICIA"> GINECOLOGIA OBSTETRICIA </option>
                                <option value="GINECOLOGIA"> GINECOLOGIA </option>
                                <option value="GINECOLOGIA/COLPOSCOPIA"> GINECOLOGIA/COLPOSCOPIA </option>
                                <option value="HEMATOLOGIA E HEMOTERAPIA"> HEMATOLOGIA E HEMOTERAPIA </option>
                                <option value="HEMATOLOGIA PEDIATRICA"> HEMATOLOGIA PEDIATRICA </option>
                                <option value="HEMATOLOGIA"> HEMATOLOGIA </option>
                                <option value="HEMODIALISE"> HEMODIALISE </option>
                                <option value="HEMODINAMICA"> HEMODINAMICA </option>
                                <option value="HEMOTERAPIA"> HEMOTERAPIA </option>
                                <option value="HEPATOLOGIA"> HEPATOLOGIA </option>
                                <option value="HISTEROSCOPIA"> HISTEROSCOPIA </option>
                                <option value="HOMEOPATIA"> HOMEOPATIA </option>
                                <option value="IMPEDANCIOMETRIA"> IMPEDANCIOMETRIA </option>
                                <option value="INFECTOLOGIA"> INFECTOLOGIA </option>
                                <option value="MAPA DE 24H"> MAPA DE 24H </option>
                                <option value="MASTOLOGIA"> MASTOLOGIA </option>
                                <option value="NEFROLOGIA PEDIATRICA"> NEFROLOGIA PEDIATRICA </option>
                                <option value="NEFROLOGIA"> NEFROLOGIA </option>
                                <option value="NEONATOLOGIA"> NEONATOLOGIA </option>
                                <option value="NEUROCIRURGIA"> NEUROCIRURGIA </option>
                                <option value="NEUROFISIOLOGIA CLINICA"> NEUROFISIOLOGIA CLINICA </option>
                                <option value="NEUROFISIOLOGIA"> NEUROFISIOLOGIA </option>
                                <option value="NEUROLOGIA"> NEUROLOGIA </option>
                                <option value="NEUROLOGIA/ELETROENCEFALOGRAFIA"> "	NEUROLOGIA/ELETROENCEFALOGRAIA" </option>
                                <option value="NEUROLOGIA/NEUROCIRURGIA"> NEUROLOGIA/NEUROCIRURGIA </option>
                                <option value="NEUROPEDIATRIA"> NEUROPEDIATRIA </option>
                                <option value="NEURORADIOLOGIA DIAGNOSTICA E TERAPEUTA"> NEURORADIOLOGIA DIAGNOSTICA E TERAPEUTA </option>
                                <option value="NUTRICAO"> NUTRICAO </option>
                                <option value="NUTROLOGIA"> NUTROLOGIA </option>
                                <option value="OBSTETRICIA"> OBSTETRICIA </option>
                                <option value="ORTOPEDIA"> ORTOPEDIA </option>
                                <option value="ODONTOLOGIA"> ODONTOLOGIA </option>
                                <option value="ODONTOPEDIATRIA"> ODONTOPEDIATRIA </option>
                                <option value="OFTALMOLOGIA"> OFTALMOLOGIA </option>
                                <option value="ONCOHEMATOLOGIA"> ONCOHEMATOLOGIA </option>
                                <option value="ONCOLOGIA CABECA E PESCOCO"> ONCOLOGIA CABECA E PESCOCO </option>
                                <option value="ONCOLOGIA CIRURGICA E MASTOLOGIA"> "	ONCOLOGIA CIRURGICA E MASTOLOIA" </option>
                                <option value="RADIOLOGIA"> RADIOLOGIA </option>
                                <option value="ONCOLOGIA PEDIATRICA"> ONCOLOGIA PEDIATRICA </option>
                                <option value="ONCOLOGIA"> ONCOLOGIA </option>
                                <option value="ORTODONTIA"> ORTODONTIA </option>
                                <option value="ORTONDONTIA - CONSULTA"> ORTONDONTIA - CONSULTA </option>
                                <option value="ORTOPEDIA E TRAUMATOLOGIA"> ORTOPEDIA E TRAUMATOLOGIA </option>
                                <option value="OTORRINOLARINGOLOGIA"> OTORRINOLARINGOLOGIA </option>
                                <option value="PATOLOGIA CERVICAL"> PATOLOGIA CERVICAL </option>
                                <option value="PATOLOGIA CLINICA"> PATOLOGIA CLINICA </option>
                                <option value="PATOLOGIA CLINICA/MEDICINA LABORATORIAL"> PATOLOGIA CLINICA/MEDICINA LABORATORIAL </option>
                                <option value="PEDIATRIA E NEUNATOLOGIA"> PEDIATRIA E NEUNATOLOGIA </option>
                                <option value="PEDIATRIA"> PEDIATRIA </option>
                                <option value="PEDIATRIA/NEUNATOLOGIA"> PEDIATRIA/NEUNATOLOGIA </option>
                                <option value="PERIODONTIA"> PERIODONTIA </option>
                                <option value="PERITO"> PERITO </option>
                                <option value="PLASTICA OCULAR E ULTASONOGRAFIA OCULAR"> PLASTICA OCULAR E ULTASONOGRAFIA OCULAR </option>
                                <option value="PNEUMOLOGIA PEDIATRICA"> PNEUMOLOGIA PEDIATRICA </option>
                                <option value="PNEUMOLOGIA"> PNEUMOLOGIA </option>
                                <option value="PROCTOLOGIA"> PROCTOLOGIA </option>
                                <option value="PROCTOLOGIA"> PROCTOLOGIA </option>
                                <option value="PROTESE"> PROTESE </option>
                                <option value="PSICOLOGIA - ADOLESCENTE"> PSICOLOGIA - ADOLESCENTE </option>
                                <option value="PSICOLOGIA - INFANTIL"> PSICOLOGIA - INFANTIL </option>
                                <option value="PSICOLOGIA- ADULTO"> PSICOLOGIA- ADULTO </option>
                                <option value="PSICOLOGIA CLINICA"> PSICOLOGIA CLINICA </option>
                                <option value="PSICOLOGIA"> PSICOLOGIA </option>
                                <option value="PSIQUIATRIA"> PSIQUIATRIA </option>
                                <option value="RADIODIAGNOSTICO"> RADIODIAGNOSTICO </option>
                                <option value="RADIOLOGIA INTEVENCIONISTA E AGIORRADIOL"> RADIOLOGIA INTEVENCIONISTA E AGIORRADIOL </option>
                                <option value="RADIOLOGIA ODONTOLOGICA"> RADIOLOGIA ODONTOLOGICA </option>
                                <option value="RADIOLOGIA/MAMOGRAFIA"> RADIOLOGIA/MAMOGRAFIA </option>
                                <option value="RADIOTERAPIA"> RADIOTERAPIA </option>
                                <option value="REUMATOLOGIA"> REUMATOLOGIA </option>
                                <option value="REUMATOLOGIA"> REUMATOLOGIA </option>
                                <option value="SAUDE PUBLICA"> SAUDE PUBLICA </option>
                                <option value="TECNICA DE LABORATORIO"> TECNICA DE LABORATORIO </option>
                                <option value="TERAPIA OCUPACIONAL"> TERAPIA OCUPACIONAL </option>
                                <option value="TERAPIA SEXUAL"> TERAPIA SEXUAL </option>
                                <option value="TRAUMATOLOGIA"> TRAUMATOLOGIA </option>
                                <option value="ULTRA-SONOGRAFIA"> ULTRA-SONOGRAFIA </option>
                                <option value="UROLOGIA"> UROLOGIA </option>
                                <option value="UTI"> UTI </option>
                                <option value="VIDEOLAPAROSCOPIA"> VIDEOLAPAROSCOPIA </option>
                              </select></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Senha&nbsp;</td>
                              <td><p>&nbsp;</p>                              </td>
                              <td><input class="form-control"  style="background:#faffbd;" type="password" name="senha" id="senha"  required="required" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>Empresa</td>
                              <td>&nbsp;</td>
                              <td>
                
                <select class="form-control"  style="background:#faffbd;" id="empresa" name="empresa" required="required">
                                <option  value="...">...</option>
                                <?php
                
                 while($registro = $stmt2->fetch(PDO::FETCH_ASSOC)){
                  echo "<option  value=".$registro["id"].">".$registro["nome"]."</option>";        
                          }
                
                ?>
                </select>               </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><div align="right">
                                <input class="btn btn-primary delete" type="submit" value="Cadastrar" id="entrar" name="entrar"  />
                              </div></td>
                            </tr>
                          </table>
                </div>  
              </div>
                          <br />
          </div>
         </div>
                        </fieldset>
                      </div>
          </form>
          </div>
          
          
          
       <table class="table table-striped" align="center">
               <tr>
                 <td colspan="7" style="text-align: center; text-decoration-style: solid;"> <strong>Usuários cadastrados</strong></td>
               </tr>
               <tr>
                  <td width="236"><div align="center">Nome</div></td>
                  <td width="257"><div align="center">Login</div></td>
                  <td width="202"><div align="center">Perfil</div></td><br />
				          <td width="202"><div align="center">Lotação</div></td><br />
                  <td width="202"><div align="center">Empresa</div></td>
                  <td width="202"><div align="center">Último Logon</div></td>
                  <td width="202"><div align="center"></div></td>
               </tr>
                            
              <?php

                   while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
                  
                         print "  <tr>
                                    <td><div align='center'>".$registro["nome"]."</div></td>
                                    <td><div align='center'>".$registro["login"]."</div></td>
                                    <td><div align='center'>".$registro["perfil"]."</div></td>
									                   <td><div align='center'>".$registro["lotacao"]."</div></td>
                  					         <td><div align='center'>".$registro["credenciado"]."</div></td>
                                    <td style='font-size: 10px;'><div align='center'>";

                                    if($registro["ultimo_logon"] == "0000-00-00 00:00:00"){
                                       echo ""; 
                                    }else{
                                     
                                       echo date("d/m/Y <\b\\r> H:i:s",strtotime($registro["ultimo_logon"]));
                                    }

                                     echo "</div></td>
                                    <td><div align='center'><a class='btn btn-primary delete  btn-xs' href=user_system_deletar.php?id=".$registro["id"].">Excluir</a></div></td>
                                  </tr>";
                   }

                 
              ?>              
            
        </table>
        
        <!--/ Formulario --> 		       
					
					
					
					
 