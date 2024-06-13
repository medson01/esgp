<?php 

  
// Arquivo de configuração
  require_once "./config/config.php";



// ALTERAÇÃO DE INPUT COM A FUNÇÃO FILTER-INPUT, QUE SANETIZA OS DADOS RECEBITOS VIA INPUT. 
// ELE RETIRA, NESSE CASO, CARACTERES ESPECIAIS QUE PODEM SER USADOS PARA INSERIR CÓDIGOS NO 
// CAMPO LOGIN E SENHA;
//$login = strtoupper($_POST['login']); 
// $senha = $_POST['senha'];

$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

$login = strtoupper($login);
$entrar = $_POST['entrar'];  

    if (isset($entrar)) {

      $sql = "SELECT usuarios.nome, login.perfil, login.id as id, login.perfil, usuarios.lotacao, usuarios.id_credenciado, credenciado.nome as credenciado FROM login INNER JOIN usuarios on usuarios.id = login.id_usuarios INNER JOIN credenciado on credenciado.id = usuarios.id_credenciado WHERE login.login = '".$login."' AND login.senha = '".$senha."'";
      
      //$sql = " SELECT usuarios.nome, usuarios.perfil, usuarios.id as id, usuarios.id_credenciado, credenciado.nome as credenciado  FROM usuarios INNER JOIN credenciado on credenciado.id = usuarios.id_credenciado WHERE login = '$login' AND senha = '$senha' " ;


     $stmt = $conn->prepare($sql);

      $stmt->execute();

      $resultado = $stmt->rowCount();
 
        if ($resultado <= 0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
          die();

        }else{

        
              while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

          						setcookie("login",$login);
                      				$_SESSION["login"] = $registro["nome"];
          							$_SESSION["perfil"] = $registro["perfil"];	
                      				$_SESSION["id"] = $registro["id"];	
  								    $_SESSION["id_credenciado"] = $registro["id_credenciado"];
                      				$_SESSION["credenciado"] = $registro["credenciado"];								  								         			        			   
                }


			
          $stmt = $conn->prepare("UPDATE `usuarios` SET `ultimo_logon`= '".date("Y-m-d H:i:s" )."' WHERE `id` = '".$_SESSION["id"]."'");

          $stmt->execute();

         echo"<script language='javascript' type='text/javascript'>alert('Aguarde um minuto at\u00e9 a p\u00e1gina ser carregada.');window.location.href='files/principal.php';</script>";
          
			
			
        }
    }

?>