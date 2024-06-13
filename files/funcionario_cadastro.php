
<?php 

// Arquivo de configuração
  require_once "../config/config.php";
  require_once "../func/func_paciente_cadastro.php";

	if(!empty($_POST["nome"])){
		echo"<script language='javascript' type='text/javascript'> window.location.href = './principal.php?funcionario&novo'; </script>";
		exit();
	}
   $nome = $_POST["nome"];
   $matricula = $_POST["matricula"];
   $endereco = $_POST["endereco"];
   $cpf = $_POST["cpf"];
   $data_nasc = $_POST["data_nasc"];
   $bairro = $_POST["bairro"];
   $cidade = $_POST["cidade"];
   $estado = $_POST["estado"];
   $sexo = $_POST["sexo"];
   if (isset($_POST["deficiente"])) {
     $deficiente = 1;
     $desc_deficiencia = $_POST["desc_deficiencia"];
   }else{
     $deficiente = 0;
   }
   
   $telefone = $_POST["telefone"];
   $celular = $_POST["celular"];
   $data_cadastro = $_POST["data_cadastro"];
   $email = $_POST["email"];
   $funcao = $_POST["funcao"];
   $data_admissao = $_POST["data_admissao"];
   $data_entrada_escola = $_POST["data_entrada_escola"];
   $regime_juridico = $_POST["regime_juridico"];
   $inep_funcionario = $_POST["inep_funcionario"];
   $censo_escola = $_POST["censo_escola"];
   $contrato = $_POST["contrato"];
   $empresa = $_POST["empresa"];

   $data_cadastro = date("Y-m-d, H:m:s", strtotime($data_cadastro));
   $data_admissao = date("Y-m-d, H:m:s", strtotime($data_admissao));
   $data_entrada_escola = date("Y-m-d, H:m:s", strtotime($data_entrada_escola));
	
   $sql = "INSERT INTO `funcionario`(`id`, `CENSO_ESCOLA`, `CD_INEP_FUNCIONARIO`, `CD_MATRICULA`, `NM_FUNCIONARIO`, `DC_FUNCIONARIO_FUNCAO`, `DT_ADMISSAO`, `DT_ENTRADA_ESCOLA`, `REGIME_JURIDICO`) VALUES (null,".$censo_escola.",".$inep_funcionario.",".$matricula.",'".$nome."','".$funcao."','".$data_admissao."','".$data_entrada_escola."','".$regime_juridico."')";


    $stmt = $conn->prepare($sql);
    


if($stmt->execute()){

  echo"<script language='javascript' type='text/javascript'>alert('Usu\u00e1rio cadastrado com sucesso!');window.location.href = './principal.php?funcionario&novo';</script>";
}else{

  echo"<script language='javascript' type='text/javascript'>alert('Erro matr\u00edcula! Favor digitar novamente !');  history.back(); </script>";
}
   
?>



