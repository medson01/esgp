
<?php


// Sislame->aluno e funcionário
if(isset($_GET['aluno']) || isset($_GET['funcionario'])){

    if(isset($_GET['aluno'])){     
      $consulta = array("tabela"=>"aluno","nome"=>"NOME_ALUNO", "matricula"=>"ID_ALUNO","cpf"=>"CD_INEP", "deficiente"=>"DC_DEFICIENTE");
        if( isset($_GET['deficiente']) ){   
        $deficiente = " WHERE DC_DEFICIENCIA IS NOT NULL";
        }
		$a = "SELECT * FROM ".$consulta["tabela"];
    }else{
      $consulta = array("tabela"=>"funcionario", "nome"=>"NM_FUNCIONARIO","matricula"=>"CD_MATRICULA", "cpf"=>"CD_INEP_FUNCIONARIO");
        if( isset($_GET['deficiente']) ){   
        // COLOCAR O NOME DA COLUNA DA TABAELA FUNCONARIO  
        $deficiente = " WHERE DC_DEFICIENCIA IS NOT NULL";
        }
		$a = "SELECT * FROM ".$consulta["tabela"]." GROUP by NM_FUNCIONARIO, CENSO_ESCOLA ";
    }

  $a = "SELECT * FROM ".$consulta["tabela"];

    if( !empty($_GET['buscar']) ){
      
      $b = " WHERE  (".$consulta["nome"]." like '%".$_GET['buscar']."%' OR ".$consulta["cpf"]." like '%".$_GET['buscar']."%' OR ".$consulta["matricula"]." like '%".$_GET['buscar']."%') ".(isset($deficiente) ? $deficiente : '');  
      $c =  " ORDER BY `".$consulta["nome"]."`ASC LIMIT $pagina, $itens_por_pagina";   
    }else{

      $b = (isset($deficiente) ? $deficiente : '');
      $c =  "  ORDER BY `id`  ASC LIMIT $pagina, $itens_por_pagina";
    }
}


// Sislame->Escola
if(isset($_GET['escola'])){

  $consulta = array(
    "tabela"=>"escola", 
    "nome"=>"ESCOLA",
    "inep"=>"CD_CENSO", 
    "cnjp"=>"NU_CNPJ", 
    "status"=>"STATUS",
    "endereco"=>"ED_LOGRADOURO",
    "numero"=>"ED_NUMERO",
    "bairro"=>"ED_BAIRRO",
    "municipio"=>"ED_MUNICIPIO",
    "estado"=>"ED_ESTADO",
    "cep"=>"ED_CEP",
    "telefone1"=>"NU_TELEFONE_1",
    "telefone2"=>"NU_TELEFONE_2",
    "email"=>"ED_EMAIL",
    "latitude"=>"VD_LATITUDE",
    "longitude"=>"VD_LONGITUDE",
    "diretor"=>"NM_DIRETOR",
    "localizacao"=>"LOCALIZACAO",
    "internet_aluno"=>"FL_ACESSO_INTERNET_USO_ALUNOS",
    "internet_administrativo"=>"FL_ACESSO_INTERNET_USO_ADMINISTRATIVO",
    "internet_ensino"=>"FL_ACESSO_INTERNET_USO_PROCESSO_ENSINO_APRENDIZAGEM",
    "internet_comunidade"=>"FL_ACESSO_INTERNET_USO_COMUNIDADE",
    "internet_status"=>"FL_ACESSO_INTERNET_NAO_POSSUI",
    "notbooks"=>"QT_COMPUTADORES_MESA_USO_ALUNO",
    "desktop"=>"QT_COMPUTADORES_PORTATEIS_USO_ALUNO",
    "tablet"=>"QT_COMPUTADORES_TABLET_USO_ALUNO",
    "sala_climatizada"=>"QT_SALAS_CLIMATIZADAS",
    "sala_acessibilidade"=>"QT_SALAS_ACESSIBILIDADE",
    "impressora_multifuncional"=>"QT_IMPRESSORA_MULTIFUNCIONAL",
    "copiadora"=>"QT_COPIADORA",
    "retroprojetor"=>"QT_RETRO_PROJETOR",
    "impressora"=>"QT_IMPRESSORA",
    "aparelho_son"=>"QT_APARELHO_SOM",
    "projeto_multimidia"=>"QT_PROJETOR_MULTIMIDIA",
    "tv"=>"QT_TV",
    "video"=>"QT_VIDEO",
    "dvd"=>"QT_DVD",
    "antena"=>"QT_ANTENA",
    "sala_secretaria"=>"FL_SALA_SECRETARIA",
    "banheiro_chuveiro"=>"FL_BANHEIRO_CHUVEIRO",
    "refeitorio"=>"FL_REFEITORIO",
    "despensa"=>"FL_DESPENSA",
    "almoxarifado"=>"FL_ALMOXARIFADO",
    "auditorio"=>"FL_AUDITORIO",
    "patio_coberto"=>"FL_PATIO_COBERTO",
    "patio_descorberto"=>"FL_PATIO_DESCOBERTO",
    "alojamento_aluno"=>"FL_ALOJAMENTO_ALUNO",
    "alojamento_professor"=>"FL_ALOJAMENTO_PROFESSOR",
    "area_verde"=>"FL_AREA_VERDE",
    "lavanderia"=>"FL_LAVANDERIA",
    "sanitario_externo"=>"FL_SANITARIO_EXTERNO",
    "sanitario_interno"=>"FL_SANITARIO_INTERNO",
    "sanitario_aluno_deficiente"=>"FL_SANITARIO_ALUNO_DEFICIENTE",
    "diretoria"=>"FL_DIRETORIA",
    "sala_professor"=>"FL_SALA_PROFESSOR",
    "laboratorio_ciencia"=>"FL_LABORATORIO_CIENCIA",
    "sala_atendimento_educacional"=>"FL_SALA_ATENDIMENTO_EDUCACIONAL",
    "quadra_esporte"=>"FL_QUADRA_ESPORTE",
    "cozinha"=>"FL_COZINHA",
    "biblioteca"=>"FL_BIBLIOTECA",
    "laboratorio_informatica"=>"FL_LABORATORIO_INFORMATICA"
);

  $a = "SELECT * FROM ".$consulta["tabela"];

 
  if( !empty($_GET['buscar']) ){
    
    $b = " WHERE  (".$consulta["nome"]." like '%".$_GET['buscar']."%' OR ".$consulta["inep"]." like '%".$_GET['buscar']."%' OR ".$consulta["cnjp"]." like '%".$_GET['buscar']."%')";  
    $c =  " ORDER BY `".$consulta["nome"]."`ASC LIMIT $pagina, $itens_por_pagina";   
  }

  if (isset($_GET['ativo'])) {
    $b =  " WHERE STATUS = 'ativa'";
  }
  if (isset($_GET['inativo'])) {
    $b =  " WHERE STATUS = 'inativa'";
  }

     $c =  "  ORDER BY `id`  ASC LIMIT $pagina, $itens_por_pagina";
  
}
// -- //


  // CONSULTA PEGA O TORAL DE REGISTROS NA TABELA 
    if($_GET[$consulta["tabela"]] < 1 ){
      $sql1 = (isset($a)? $a:''). (isset($b)? $b:'');
      $stmt1 = $conn->prepare($sql1); 
      $stmt1->execute();
      $num_total = $stmt1->rowCount();
      $num = $stmt1->rowCount();
    }else{
      $num_total = $_GET[$consulta["tabela"]];
    }

  // CONSULTA PEGA AS QTD DE REGISTROS POR PAGINAS  
    $sql1 = (isset($a)? $a:''). (isset($b)? $b:''). (isset($c)? $c:'');
    $stmt1 = $conn->prepare($sql1); 
    $stmt1->execute();

?>
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style6 {font-size: 18px}
-->
</style>

<form name='frmBusca' method='get' action='<?php echo "?".$consulta['tabela']."=".$_SERVER['PHP_SELF']?>' >

<div class="style1" style="position:relative; left:1px; top:-27px; right:180px; width: 600px; float: right;"> 

<div style="float:right; ">

  <div align="right"> 
 
    <select style="width:140px; font-size:12px; height:27px" class="form-control form-control-sm"  name="filtro" id="filtro" onchange="location.href=this.value">
      <option value="<?php echo 'principal.php?'.$consulta["tabela"]; ?>"> Todos </option>

      <option value="principal.php?<?php  echo $consulta["tabela"].'&ativo"';  if(isset($_GET['ativo'])){ echo 'selected'; } ?> > Ativo(a) </option>
      <option value="principal.php?<?php  echo $consulta["tabela"].'&inativo"'; if(isset($_GET['inativo'])){ echo 'selected'; } ?>  >  Inativo(a)  </option>
      <option  <?php echo "value='principal.php?".$consulta["tabela"]."&deficiente'"; if(isset($_GET['deficiente'])){ echo 'selected'; } ?>  >  Deficiente  </option>
    </select>
  </div>
</div>

<div style="float:right; ">
  <div>	  <span class="style6">Filtro</span>&nbsp;&nbsp;&nbsp;  </div>
</div>

<div style="position:relative; float:left" >


               <?php 
              
                echo "
                <input type='hidden' class='form-control ds-input'  spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='".$consulta['tabela']."'>";
 /*
                  if(isset($_GET['escola&ativo'])){ 
                    echo "
                    <input type='hidden' class='form-control ds-input'  spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='escola&ativo'>";
                  }
                  if(isset($_GET['escola&inativo'])){ 
                    echo "
                    <input type='hidden' class='form-control ds-input'  spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='escola&inativo'>";
                  }
                  */
                ?>
                 <input type='search' class='form-control ds-input' id='search-input' placeholder='Pesquisar por nome, matrícula, cpf' autocomplete='off' spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='buscar'>
                 <?php 
               

                 /*
                 // Tanto aluno quanto funcionario
                 if(isset($consulta["tabela"])){ 
                  echo "
                  <input type='hidden' class='form-control ds-input'  spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='".$consulta["tabela"]."'>";
                 }


                  if(isset($_GET['$consulta["tabela"]&deficiente'])){ 
                  echo "
                  <input type='hidden' class='form-control ds-input'  spellcheck='false' role='combobox' aria-autocomplete='list' aria-expanded='false' aria-owns='algolia-autocomplete-listbox-0' dir='auto' style='position: relative; vertical-align: top; width:320px; font-size:12px; height:27px' name='".$consulta["tabela"]."&deficiente'>";
                 }
*/
                 ?>
	
            </form>


</div>
</div>