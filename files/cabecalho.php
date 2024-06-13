<?php
  //Acertar data e hora 
   date_default_timezone_set('America/Maceio');


   // Arquivo de configuração
  require_once "../config/config.php";

   // Arquivo de configuração
  require_once "../func/permissao.php";

   // Endereço atual das paginas
 	$URL= "$_SERVER[PHP_SELF]";

 
?>
<!DOCTYPE html >

<html>

<head>


    <meta charset="UTF-8">


    <!-- Internet Explorer fix, forces IE8 into newest possible rendering
         engine even if it's on an intranet. This has to be defined before any


         script/style tags. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    

 


       <link rel="stylesheet" type="text/css" href="../css/base-cachekey3495.css">
       <!-- Estrutura em tabelas do site -->
       <link rel="stylesheet" type="text/css" href="../css/contentpanels-cachekey9970.css">
	   <!-- Remover lixo na impressão -->
	   <link rel="stylesheet" type="text/css" href="../css/print.css" media="print" />
   
    
  <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/metro-bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  


<title>E - Sistema de Gestão de Pessoas</title>



    <!-- Disable IE6 image toolbar -->
    <meta http-equiv="imagetoolbar" content="no">
        
    <!-- Script calendario data -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    
    <style type="text/css">
    <!--
    .legenda_tab {font-size: 9px}
    .style1 {font-size: 24px}
    .style3 {color: #000000}
    .style6 {font-size: 24px; color: #6666FF;}
    .style11 {color: #000000; font-size: 12px; font-style: italic; }
    .style13 {color: #000000; font-size: 20px; }
	.style15 {font: -webkit-small-control; border-bottom: hidden; width: 100%; max-width: 100%; padding-left: 30px; padding-right: 30px}
    -->
    </style>
 
   

    <!-- CSS para o título e conteúdo -->
    <link rel="stylesheet" type="text/css" href="../css/titulo_conteudo.css"/>

        <!-- CSS para o título e conteúdo -->
    <link rel="stylesheet" type="text/css" href="../css/botao_redondo.css"/>


    <!-- Soma campos -->
    <script src="../js/soma.js"></script>
    
    <!-- Mascara para campo -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
	
	

   <script type="text/javascript">
    $("#matricula").mask("00000000");
	$("#celular").mask("(00) 00000-0000");
	$("#resp_celular").mask("(00) 00000-0000");
	$("#telefone").mask("(00) 0000-0000");
	$("#resp_telefone").mask("(00) 0000-0000");
	$("#data_nasc").mask("00/00/0000");
    $("#idade").mask("000");
    $("#codigo").mask("000000");
    $("#cpf").mask("00000000000");
    $("#numero").mask("00000");
	$("#data_admissao").mask("00/00/0000");
	$("#data_entrada_escola").mask("00/00/0000");
	$("#inep_funcionario").mask("00000000");
	$("#censo_escola").mask("00000000");

	

    </script>


	<!-- Mascara para valor monetário -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
   
  
                   <script>var hora;
	var muda = 1;
	var tempo = new Number();
	tempo = <?php echo ini_get("session.gc_maxlifetime") ?>;
	function iniciaLogout(){
	   if((tempo - 1) >= 0){
		  var min = parseInt(tempo/60);
		  var seg = tempo%60;
		  if(min < 10){
			 min = '0'+min;
			 min = min.substr(0, 2);
		  }
		  if(seg <=9){
			 seg = "0"+seg;
		  }
		  hora = min + ':' + seg;
		  $("#cronometro").html(hora);
		  setTimeout('iniciaLogout()',1000);
		  if((tempo - 1) <= 25){
			 if(muda == 1){
				$("#cronometro").css('color', 'red').css('font-weight', 'bold');
				muda = 0;

				

			 }else{
				$("#cronometro").css('color', 'white').css('font-weight', 'normal');
				muda = 1;


			 }
		  }
		  tempo--;
	   }else{
		  $("#cronometro").html('00:00');
		  window.location.href = "../index.html";
	   }
	}
                                               </script>




</head>
<body class="section-ipaseal-saude template-contentpanels_view" dir="ltr" style="width:100%">

      <div id="portal-top">
        <div id="portal-header">

<!-- Banner -->
          <div id="portal-logo">
				<span class='hidden' id='cronometro'></span><script>iniciaLogout();</script> 
	  
            <p>
			<div style="color:#FFFFFF; width:500px; word-spacing:inherit; float:right; top:-100px"  >
			                       <div align="right" >
			                         <?php
																// Data e hora 
													setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
													date_default_timezone_set('America/Sao_Paulo');
													echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today')));
								 
													$login = $_SESSION["login"];
													
													
									?>
              </div>
			</div>
            <div style="color:#FFFFFF; width:800px" ><a href="principal.php" id="tema-portal">e - sgp  <br />
</a>Sistema de Gestão de Pessoas <br />
            </div>
			  <p><p><p><p>
			  </p>
          </div>
          
            
                <?php


							include"menu.php";
				?>


<!-- /Banner -->

        </div>
      </div>
      <!-- Conteudo --> 

 <!-- Arquivo cabeçalho.php, css no arquivo, tamnho do grid -->
 <div id="exTab2" class="style15">      
  
