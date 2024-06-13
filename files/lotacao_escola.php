<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php


  // Função calcular idade
  require_once "../func/calc_idade.php";
  
if(isset($_GET['id'])){

   $sql = "SELECT * FROM escola
            WHERE CD_CENSO = ".$_GET["inep"];
    
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
       
      }
}

if(!empty($complexidade)){
 // list ($baixa, $media, $alta) = explode(" ", $complexidade);
}
?>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<br />
<br />

    <table  border="0"align="center"  width="100%">
      <tr>
        <td >Dados Escola </td>
		<td >&nbsp;</td>
        <td >&nbsp;</td>
				<td >&nbsp;</td><td >&nbsp;</td>
      </tr>
      <tr>
        <td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
      </tr>
      <tr>
        <td><div class="form-group">
          <label for="label10">CNPJ</label>
          <input class="form-control" id="cnpj"  name="cnpj" readonly='true'<?php if(isset($cnpj)){ echo "value='".$cnpj."'"; }?>  required="required" />
        </div></td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5"><div class="form-group">
          <label for="label3">Nome</label>
          <input class="form-control" id="nome"  name="nome" readonly='true'<?php if(isset($nome)){ echo "value='".utf8_encode($nome)."'"; echo $bloqueio = "readonly='true'"; }?>  required="required" />
        </div></td>
      </tr>
      <tr>
        <td colspan="5"><div class="form-group">
          <label for="label2">Endere&ccedil;o</label>
          <input class="form-control" id="label2"  name="endereco" readonly='true'<?php if(isset($endereco)){ echo "value='".utf8_encode($endereco).",".$numero.",".$cep."'".$bloqueio;}?> required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
          <label for="label10">INEP</label>
          <input type="text" class="form-control" id="inep"  name="inep" readonly='true'<?php if(isset($inep)){ echo "value='".$inep."'".$bloqueio;;}?> required="required" minlength="18" maxlength="18"/>
        </div></td>
        <td >&nbsp;</td>
        <td ><div class="form-group">
          <label for="label15" >Data de Cria&ccedil;&atilde;o </label>
          <input type="data" class="form-control" id="data_nasc"  name="data_nasc" readonly='true'<?php if(isset($data_nasc)){ echo "value='".$data_nasc."'".$bloqueio;}?> required="required"/>
        </div></td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="label4">Bairro</label>
            <input class="form-control" id="label4"  name="bairro" readonly='true'<?php if(isset($bairro)){ echo "value='".utf8_encode($bairro)."'".$bloqueio;}?>  required="required"/>
        </div></td>
        <td >&nbsp;</td>
        <td ><div class="form-group">
          <label for="label">Cidade</label>
          <input  name="cidade" class="form-control" id="label" value="Macei&oacute;" readonly='true'<?php if(isset($cidade)){ echo "value='".utf8_encode($cidade)."'".$bloqueio;}?>  required="required"/>
        </div></td>
        <td  colspan="-1">&nbsp;</td>
        <td ><div class="form-group">
          <label for="label6">Estado</label>
          <input  name="estado" class="form-control" id="label6" value="AL" readonly='true'<?php if(isset($estado)){ echo "value='".$estado."'".$bloqueio;}?>  required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="label7">Telefone Fixo </label>
            <input class="form-control"  name="telefone1" id="telefone1" readonly='true'<?php if(isset($telefone1)){ echo "value='".$telefone1."'".$bloqueio;}?> />
        </div></td>
        <td >&nbsp;</td>
        <td ><div class="form-group">
          <label for="label8">Celular</label>
          <input class="form-control" id="telefone2"  name="telefone2" readonly='true'<?php if(isset($telefone2)){ echo "value='".$telefone2."'".$bloqueio;}?> />
        </div></td>
        <td >&nbsp;</td>
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
        <td>&nbsp;</td>
        <td><div class="form-group">
          <label for="label8">longitude</label>
          <input class="form-control" id="longitude"  name="longitude" readonly='true'<?php if(isset($longitude)){ echo "value='".$longitude."'".$bloqueio;}?> />
        </div></td>
        <td >&nbsp;</td>
        <td><div class="form-group">
          <label for="label9">Latitude</label>
          <input  class="form-control" id="latitude"  name="latitude" readonly='true'<?php if(isset($latitude)){ echo "value='".$latitude."'".$bloqueio;}?> />
        </div></td>
      </tr>

      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
		<td >&nbsp;</td><td >&nbsp;</td>
      </tr>
      
	  <tr>
        <td >Cargos/Fun&ccedil;&atilde;o</td>
		<td >&nbsp;</td>
		<td >&nbsp;</td>
		<td >&nbsp;</td>
		<td >&nbsp;</td>
      </tr>
      <tr>
        <td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
		<td  style="border-top:ridge">&nbsp;</td>
      </tr>
      <tr>
        <td height="1000" colspan="5" >
	<div style="width:100%; position:relative">	
		<div class="card text-white bg-info mb-3"  style="left:4px; position:absolute; height:169px; width:640px; top: -488px;" >
          <div class="card-header"><strong></strong><strong>QUANTIDADE SISLAME</strong></div>
          <div class="card-body">
            <h3 align="left" class="card-title">
              <?php
 // SISLAME   

    $sql = "SELECT DC_FUNCIONARIO_FUNCAO, COUNT(*) AS QTD FROM `funcionario` 
            WHERE CENSO_ESCOLA = ".$_GET["inep"]." 
            GROUP BY DC_FUNCIONARIO_FUNCAO 
            ORDER BY DC_FUNCIONARIO_FUNCAO ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    
    
				$qtd_cargos = 0;
				$qtd_funcao = 0;
				
				$cargo1 = array();
				$qtd1 = array();
				
                 while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
  									
					$qtd_funcao = $registro["QTD"] + $qtd_funcao;
					$qtd_cargos = ++$qtd_cargos;
					
					array_push($cargo1,  utf8_encode($registro["DC_FUNCIONARIO_FUNCAO"]));
					array_push($qtd1,  $registro["QTD"]);
					
                 }       

                  echo" Total de cargos =  ".$qtd_cargos."<br>";   
                  echo' Total de funcion&aacute;rios =  '.$qtd_funcao; 	
				      


    ?>
            </h3>
        </div
        ></div>
          <div class="card text-white bg-success "  style="left:654px; position:absolute; top: -490px;  height:170px; width:626px;">
            <div class="card-header"><strong>QUANTIDADE DEFINIDA</strong> </div>
            <div class="card-body">
              <h3 align="left" class="card-title">
                <?php
 // DEFINIÇÃO DOS CARGOS  

  $sql = "SELECT nome, quantidade FROM cargo 
  			WHERE CD_CENSO = ".$_GET["inep"]." 
			GROUP BY nome 
			ORDER by nome";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

				$qtd_cargos2 = 0;
				$qtd_funcao2 = 0;
				
                 while($registro2 = $stmt->fetch(PDO::FETCH_ASSOC)){
					$qtd_funcao2 = $registro2["quantidade"] + $qtd_funcao2;
					$qtd_cargos2 = ++$qtd_cargos2;
					
                 } 
			
                 	if($qtd_cargos <> $qtd_cargos2){
					  	echo'<a top: -1px;top: -1px;"#" href="javascript:func()" onmouseover="Tip(\'Quantidade de cargos diferente do Sislame. Favor verificar, se for o caso, alterar nos sistemas.\')" onmouseout="UnTip()">';
						echo"<span style='color:#83ff00'> Total de cargos =  ".$qtd_cargos2."</span> </br>";
						echo'<a>';  
					}else{
						echo" Total de cargos =  ".$qtd_cargos2."</br>";
					}
				
                 	if($qtd_funcao <> $qtd_funcao2){
					  	echo'<a top: -1px;top: -1px;"#" href="javascript:func()" onmouseover="Tip(\'Quantidade de fun\u00e7\u00f5es diferente do Sislame. Favor verificar, se for o caso, alterar nos sistemas.\')" onmouseout="UnTip()">';
						echo"<span style='color:#83ff00'> Total de funcion&aacute;rios =  ".$qtd_funcao2."</span> </br>";
						echo'<a>';  
					}else{
						 echo' Total de funcion&aacute;rios =  '.$qtd_funcao2; 	
					}  
                      

   // echo'</textarea>'; 
    ?>
              </h3>
            </div>
        </div>
          <div class="card text-white bg" style="position:absolute; width: 1274px; left: 7px; top: -313px; height: 352px;" height:143px;="height:143px;" width:479px;="width:479px;"">
            <div style="position:absolute; &gt;
				&lt;a top: -1px;top: -178px; left: 646px;"#" href="javascript:func()" onmouseover="Tip('Configurar quantidade de cargos default no ESGP.')" onmouseout="UnTip()">
              <button type="button" class="btn btn-secondary  btn-lg" data-toggle="modal" data-target="#exampleModal"> <span class="glyphicon glyphicon-cog"></span> </button>
              <?php 
					// Modal 
					include("lotacao_escola_cargos.php");
					?>
            </a> </div>
            <div class="card-header" style="color:#000000"><strong> DETALHE DOS CARGOS E FUN&Ccedil;&Otilde;ES DEFINIDAS</strong></div>
            <div class="card-body">
              <h5 align="left" class="card-title" style="color:#000000">
                <?php
    

  $sql = "SELECT nome, quantidade FROM cargo 
  			WHERE CD_CENSO = ".$_GET["inep"]." 
			GROUP BY nome 
			ORDER by nome";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


				$qtd_cargos2 = 0;
				$qtd_funcao2 = 0;
				$cargo2 = array();
				$qtd2 = array();
				
                 while($registro2 = $stmt->fetch(PDO::FETCH_ASSOC)){
				 
                    echo ' '.utf8_encode($registro2["nome"])." = ".$registro2["quantidade"]." <br>";  
					$qtd_funcao2 = $registro2["quantidade"] + $qtd_funcao2;
					$qtd_cargos2 = ++$qtd_cargos2;
					
					array_push($cargo2, utf8_encode($registro2["nome"]));
					array_push($qtd2,   $registro2["quantidade"]);
                 } 
				 
				 echo '--------------------------------------------------------------------------<br>';
					$cargo = array();
                 	if($qtd_cargos <> $qtd_cargos2){
					
						    foreach($cargo2 as $valor){	
								if(!in_array($valor, $cargo1 )){
								 $cargo[] = $valor;
								}
							}
					
					
					
					  	echo'<a top: -1px;top: -1px;"#" href="javascript:func()" onmouseover="Tip(\'Quantidade de cargos diferente do Sislame. Favor verificar, se for o caso, alterar nos sistemas.\')" onmouseout="UnTip()">';
						echo"<span style='color:#1436a2;     font-size: large; '>  Total de cargos =  ".$qtd_cargos2."</span> </br>";
						echo'<a>';  
					}else{
						echo" Total de cargos =  ".$qtd_cargos2."</br>";
					}

                 	if($qtd_funcao <> $qtd_funcao2){

					  	echo'<a top: -1px;top: -1px;"#" href="javascript:func()" onmouseover="Tip(\'Quantidade de fun\u00e7\u00f5es diferente do Sislame. Favor verificar, se for o caso, alterar nos sistemas.\')" onmouseout="UnTip()">';
						echo"<span style='color:#1436a2;     font-size: large;'> Total de cargos =  ".$qtd_funcao2."</span> </br>";
						echo'<a>';  
					}else{
						 echo' Total de funcion&aacute;rios =  '.$qtd_funcao2; 	
						 
					}  
					
					$c=array_combine($cargo1,$qtd1);
					$d=array_combine($cargo2,$qtd2);

    ?><br><br><br><br><br>
				
					
					    <div style="position:absolute; left: 652px; top: 52px; width: 616px;" class="panel panel-default">
						  <div class="panel-heading bg-danger" style="color:#FFFFFF">CAR&Ecirc;NCIA</div>
						  <div class="panel-body"></div>
						  <?php
								foreach($d as $key2 => $v2){	
									foreach($c as $key1 => $v1){	
										if( ($key2 === $key1) && ($v2 === $v1) ){
											unset($d[$key2]);
										}
										 if( ($key2 === $key1) && ($v2 <> $v1) ){
											//echo  $key2.": ";
											$d[$key2] = $v2-$v1;
											
										}
										
									}
								 
								}
								
								foreach($d as $key2 => $v2){	
									
										echo  $key2.": ".$v2."<br>";
									
								}
								
								
					
								
						  ?>
		        </div>					
					
    
              </h5>
            </div>
        </div>
        <p>&nbsp;</p>
		
		<div style="position:absolute; &gt;
				&lt;a top: -1px;top: -474px; left: 17px; width: 27px; height: 25px;"#" href="javascript:func()" onmouseover="Tip('Detalhe dos cargos definido no Sislame.')" onmouseout="UnTip()">
          <button type="button" class="btn btn-secondary  btn-lg" data-toggle="modal" data-target="#comparativo"> <span class="glyphicon glyphicon-tasks"></span> </button>
          <?php 
					// Modal 
					include("lotacao_escola_cargos_comparativo.php");
					?>
        </a> </div>
		
		</div></td>
      </tr>
      <tr>
        <td >&nbsp;</td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td ></td>
        <td >&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
		<td>&nbsp;</td>
      </tr>

</table>

    
    