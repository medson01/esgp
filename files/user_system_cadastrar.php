
<?php 

	// Arquivo de configuração
 require_once "../config/config.php";


$nome = strtoupper($_POST["nome"]);
$sobre_nome = strtoupper($_POST["sobre_nome"]);
$login = strtoupper($_POST["login"]);
$perfil = $_POST["perfil"];
$senha = $_POST['senha'];
$id_credenciado = $_POST['empresa'];
$cr = strtoupper($_POST["cr"]);
$especialidade = strtoupper($_POST["especialidade"]);
$lotacao = strtoupper($_POST["lotacao"]);

$sql1 = "SELECT login FROM login WHERE login = '$login'";
$stmt1 = $conn->prepare($sql1);
$stmt1->execute();

$array = $stmt1->fetch(PDO::FETCH_ASSOC);

$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='painel.php?caduser=1';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login j\u00e1 existe');history.back();</script>";
        die();

      }else{

           $sql2 = "INSERT INTO usuarios (id_credenciado,nome,sobre_nome,lotacao,cr,especialidade) VALUES ('$id_credenciado','$nome','$sobre_nome','$lotacao','$cr','$especialidade')";		
           $stmt2 = $conn->prepare($sql2);
			     $stmt2->execute();
			
			$ultimoid = $conn->lastInsertId();
     	
	         $sql3 = "INSERT INTO `login`(`id`, `id_usuarios`, `login`, `senha`, `perfil`, `ultimo_logon`) VALUES (null,'$ultimoid','$login','$senha','$perfil',null)";		
        	 $stmt3 = $conn->prepare($sql3);
		
        if($stmt3->execute()){
          echo"<script language='javascript' type='text/javascript'>alert('Usu\u00e1rio cadastrado com sucesso!');window.location.href='principal.php?paciente&usuarios'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse Usu\u00e1rio');window.location.href='principal.php?paciente&usuarios' </script>";
        }
      }
    }
?>