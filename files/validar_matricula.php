
<?php
// Arquivo de configuração
 require_once "../config/config.php";
 
// Arquivo de Função limpar CPF
 require_once "../func/func_limparCPF.php";

if(isset($_GET['cpf'])){

     $cpf = $_GET['cpf'];
	$cpf = limpaCPF($cpf);

	$sql = "SELECT usuarios.id as id_user, usuarios.nome, usuarios.endereco, usuarios.cpf, usuarios.data_nasc, usuarios.matricula, usuarios.bairro, usuarios.cidade, usuarios.estado, usuarios.sexo, usuarios.deficiente, usuarios.telefone, usuarios.celular, usuarios.email, usuarios.data_cadastro, responsavel.nome as resp_nome, responsavel.parentesco as resp_parentesco, responsavel.celular as resp_celular, responsavel.email as resp_email FROM `usuarios` LEFT JOIN responsavel ON responsavel.id_usuario = usuarios.id where usuarios.cpf=".$cpf;

	$stmt = $conn->prepare($sql);
	$stmt->execute();

	 	//Beneficiaário não existe
	$resultado = $stmt->rowCount();
     if ($resultado <= 0){
        echo "<script>alert('CPF n\u00e3o exite!');history.back();</script>";    
		
	}else{
        	    		
		 while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
		 	  $id_user = $registro["id_user"];	
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
			$resp_celular = $registro["resp_celular"];
			$resp_email = $registro["resp_email"];                      
	     }

		if(!isset($_GET['cadastro'])){
			echo "<script>location.href=\"principal.php?escola&id_user=".$id_user."&matricula=". $matricula."&nome=".$nome."&cpf=".$cpf."&endereco=".$endereco."&bairro=".$bairro."&cidade=".$cidade."&estado=".$estado."&telefone=".$telefone."&celular=".$celular."&email=".$email."&deficiente=".$deficiente."&data_nasc=".$data_nasc."&data_cadastro=".$data_cadastro."&sexo=".$sexo."&resp_nome=".$resp_nome."&resp_parentesco=".$resp_parentesco."&resp_celular=".$resp_celular."&resp_email=".$resp_email."\"</script>";
		}else{
			echo "<script>location.href=\"principal.php?escola&cadastro=".$_GET['cadastro']."&id_user=".$id_user."&matricula=". $matricula."&nome=".$nome."&cpf=".$cpf."&endereco=".$endereco."&bairro=".$bairro."&cidade=".$cidade."&estado=".$estado."&telefone=".$telefone."&celular=".$celular."&email=".$email."&deficiente=".$deficiente."&data_nasc=".$data_nasc."&data_cadastro=".$data_cadastro."&sexo=".$sexo."&resp_nome=".$resp_nome."&resp_parentesco=".$resp_parentesco."&resp_celular=".$resp_celular."&resp_email=".$resp_email."\"</script>";
		}					
     }
   }  
   
     
?>
