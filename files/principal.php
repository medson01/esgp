<?php 

if(!isset($_SESSION)){

  session_start();
}
	
	if(!isset($_SESSION["login"])){
			header('Location: ../index.html');
	}else{

		//Arquivo de configuração
			include "cabecalho.php";

	    //Conteudo 

	    	 
   		if( (isset($_GET['escola']))){
   				//Menu Cadastro/prontuario 
				include "sislame_escola_abas.php";

			}elseif(isset($_GET['aluno'])){
					include "sislame_aluno_abas.php";	

			}elseif(isset($_GET['funcionario'])){
					include "sislame_funcionario_abas.php";	

			}elseif(isset($_GET['lotacao'])){
					include "lotacao_abas.php";	

			}elseif(isset($_GET['usuarios'])){
					include "configuracoes_usuarios_abas.php";	
			}elseif(isset($_GET['rel_carencia'])){
					include "rel_carencia.php";	
			}else{
				//Menu Cadastro/principal 	
	    		include "iniciar.php";	
	    }
		//Rodape 

			include "rodape.php";	
	}

?>