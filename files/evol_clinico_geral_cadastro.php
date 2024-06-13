
<?php 

// Arquivo de configuração
  require_once "../config/config.php";

if(!isset($_GET['update'])){

	//paciente
	$id_paciente =  $_POST["id_paciente"]; 
  $id_usuario =  $_POST["id_usuario"]; 
	if (!empty($_SESSION["especialidade"] )) {
	   $especialidade = $_SESSION["especialidade"];
	}else{
	   $especialidade = "0";
	}

	
	if (!empty($_POST["pressao_arterial"])) {
		$pressao_arterial = $_POST["pressao_arterial"];
	}else{
		$pressao_arterial = "null";
	}


	if (!empty($_POST["freq_cardiaca"])) {
		$freq_cardiaca = $_POST["freq_cardiaca"];
	}else{
		$freq_cardiaca = "null";
	}


	if(!empty($_SESSION["cr"])){
		$cr = $_SESSION["cr"];
	}else{
		$cr = "0";
	}

	if(!empty($_POST["temperatura"])){
		$temperatura = $_POST["temperatura"];
	}else{
		$temperatura = "null";
	}
	 
	if (!empty($_POST["observacao"])){
		$observacao = utf8_decode($_POST["observacao"]);
	}else{
		$observacao = "null";
	}

	if (!empty($_POST["receita"])){
		$receita = utf8_decode($_POST["receita"]);
	}else{
		$receita = "null";
	}



  $sql = "INSERT INTO `evolucao`(`id`, `id_prontuario`,`id_login`, `id_usuario`,`especialidade`, `pressao_arterial`,`freq_cardiaca`, `cr`, `temperatura`,  `observacao`,`receita`,`data`) VALUES (null,'$id_paciente','".$_SESSION["id"]."', '$id_usuario', '$especialidade','$pressao_arterial','$freq_cardiaca','$cr','$temperatura','$observacao','$receita','".date("Y-m-d H:i:s" )."')";
	 
	 $stmt = $conn->prepare($sql);

	 $stmt->execute();
	     

	 echo"<script language='javascript' type='text/javascript'>alert('Cadastrado efetuado com sucesso!');window.location.href='http://localhost/eprontuario/files/principal.php?id=".$id_paciente."&prontuario'</script>";
	
}else{
	
	$sql =  "UPDATE `prontuario` SET  `status`= '0' WHERE id = '".$_GET["id"]."'";
	$stmt = $conn->prepare($sql);
 	$stmt->execute();
	echo"<script language='javascript' type='text/javascript'>alert('Prontuário efetuado com sucesso!');window.location.href='http://localhost/eprontuario/files/principal.php?paciente&ativo'</script>";

}

	

    
?>