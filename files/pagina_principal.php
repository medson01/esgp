<html><head>


    <meta charset="UTF-8">


    <!-- Internet Explorer fix, forces IE8 into newest possible rendering
         engine even if it's on an intranet. This has to be defined before any


         script/style tags. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    

 


       <link rel="stylesheet" type="text/css" href="../css/base-cachekey3495.css">
       <!-- Estrutura em tabelas do site -->
       <link rel="stylesheet" type="text/css" href="../css/contentpanels-cachekey9970.css">
	   <!-- Remover lixo na impressão -->
	   <link rel="stylesheet" type="text/css" href="../css/print.css" media="print">
   
    
  <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/metro-bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  


<title>Credenciado Ipaseal Saúde</title>



    <!-- Disable IE6 image toolbar -->
    <meta http-equiv="imagetoolbar" content="no">
        
    <!-- Script calendario data -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    
    <style type="text/css">
    <!--
    .style1 {font-size: 24px}
    .style3 {color: #000000}
    .style6 {font-size: 24px; color: #6666FF;}
    .style11 {color: #000000; font-size: 12px; font-style: italic; }
    .style13 {color: #000000; font-size: 20px; }

    -->
    </style>
 
   

    <!-- CSS para o título e conteúdo -->
    <link rel="stylesheet" type="text/css" href="../css/titulo_conteudo.css">

        <!-- CSS para o título e conteúdo -->
    <link rel="stylesheet" type="text/css" href="../css/botao_redondo.css">


    <!-- Soma campos -->
    <script src="../js/soma.js"></script>
    
    <!-- Mascara para campo -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
	
	

   <script type="text/javascript">
    $("#matricula").mask("00000000.000000-00");
	$("#celular").mask("(00) 00000-0000");
	$("#resp_celular").mask("(00) 00000-0000");
	$("#telefone").mask("(00) 0000-0000");
	$("#resp_telefone").mask("(00) 0000-0000");
	$("#data_nasc").mask("00/00/0000");
    $("#idade").mask("000");
	
	
    $("#qtd_motora").mask("00");
    $("#qtd_motora2").mask("00");
    $("#dias_autorizados").mask("00");
	$("#qtd_respiratoria").mask("00");
    $("#qtd_respiratoria2").mask("00");
	$("#crm").mask("0000");
    $("#codigo").mask("000000");
    $("#cpf_cnpj").mask("00000000000");
    $("#numero").mask("00000");
	$("#pa").mask("000");
	$("#ap").mask("000");
	$("#fc").mask("00-00");
	$("#fr").mask("00-00");
	$("#sp").mask("00");
	$("#glicemia").mask("000")
	$("#temperatura").mask("00")
	

    </script>


	<!-- Mascara para valor monetário -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
   
  
                   <script>var hora;
	var muda = 1;
	var tempo = new Number();
	tempo = 1440;
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
<body class="section-ipaseal-saude template-contentpanels_view" dir="ltr" style="width:100%"><div id="WzTtDiV" style="visibility: hidden; position: absolute; overflow: hidden; padding: 0px; width: 0px; left: 0px; top: 0px;"></div>

      <div id="portal-top">
        <div id="portal-header">

<!-- Banner -->
          <div id="portal-logo">
				<span class="hidden" id="cronometro">23:11</span><script>iniciaLogout();</script> 
	  
            <p>
			</p><div style="color:#FFFFFF; width:500px; word-spacing:inherit; float:right; top:-100px">
			                       <div align="right">
			                         terça-feira, 15 de março de 2022              </div>
			</div>
            <div style="color:#FFFFFF; width:800px"><a href="principal.php" id="tema-portal">e - prontuário  <br>
</a>Sistema de Prontuário Eletrônico do Ipaseal Saúde<br>
            </div>
			  <p></p><p></p><p></p><p>
			  </p>
          </div>
          
            
                 <div id="config" style=" width:100%; height:50px;">
            <div style="width:50%;  float: left;">
                  <nav class="navbar navbar-expand-sm" style="height:10px">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="principal.php" style="color:#FFFFFF"> Início </a></li>

                        <li class="dropdown show"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#" aria-expanded="true"> Atendimento <span class="caret"></span></a>
                            <ul class="dropdown-menu show">
							  <li><a href="principal.php?paciente"> Prontuário </a></li>
                             
                            </ul>
                        </li>  
					    <li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#" aria-expanded="false"> Prontuários <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="principal.php?paciente&amp;ativo">Ativos</a></li>
                              <li><a href="principal.php?paciente&amp;fechado">Fechados</a></li>
                            </ul>
                        </li> 
                        <li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#" aria-expanded="false"> Configuração <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="principal.php?paciente&amp;usuarios">Usuários</a></li>
                              
                            </ul>
                        </li> 
						

					  	 
                        <li><a style="color:#FFFFFF" href="#"> Avisos </a></li><a style="color:#FFFFFF" href="#"> 
                      </a></ul><a style="color:#FFFFFF" href="#">
                    </a></div><a style="color:#FFFFFF" href="#">
                  </a></nav><a style="color:#FFFFFF" href="#">

  </a></div><a style="color:#FFFFFF" href="#">
            </a><div style="width:50%; float:right"><a style="color:#FFFFFF" href="#">
				<span style="color:#FFFFFF">
			  		</span></a><div align="right"><a style="color:#FFFFFF" href="#"><img src="../imagem/avatar.png" alt="Clique aqui para ser atendido" width="44" height="44" border="0"><span style="width:500px"> 
						EDSON		
			    &nbsp; &nbsp;&nbsp;
			    		</span></a><a href="../logout.php"> <span class="glyphicon glyphicon-log-out" style="color:#FFFFFF;"> </span> </a>&nbsp;&nbsp;&nbsp;		        </div>
  </div>
					<p>
					</p>
</div>

					<p></p>

<!-- /Banner -->

        </div>
      </div>
       
<!-- Conteudo -->   


<!-- sub_menu -->
<div id="exTab2" class="container" style="font: -webkit-small-control; border-bottom: hidden; ">
	<br>		<ul class="nav nav-tabs" style="clear: left;">
					<li class="nav-item active">
						<a class="nav-link active" href="#1" data-toggle="tab" aria-expanded="true">Prontuários</a>
					</li>		</ul>

	 		<div class="tab-content ">
						  	<div class="tab-pane fade active in" role="tabpanel" id="1"> 

<!-- Mensagem ao passar o mouse -->
<script type="text/javascript" src="../js/wz_tooltip.js"></script>

<!-- Botão Modal Sair -->
<!-- Botão Excluir -->
<script type="text/javascript" src="../js/bnt_excluir.js"></script>

<!-- Botão internação -->
<script type="text/javascript" src="../js/bnt_internacao.js"></script>


<!-- pegar mes de consulta  -->
<script language="Javascript">
    function mudarmes(){
      var y = document.getElementById("ano").value;
      var x = document.getElementById("mes").value;
      if((x && y)){
      window.location.href = x+y;
      }
    }
</script>
                    
   <table class="table table-striped" style="font-size: 12px" width="435" align="center">

               <tbody><tr style="font-weight:bold;">
                 <!-- <td width="27"><div align="center">Status</div></td> -->
                 <td><div align="center">ID</div></td>
                 <td><div align="center">Paciente</div></td>
                 <td><div align="center">Matricula</div></td>
                 <td><div align="center">Idade</div></td>
                 <td><div align="center">Data de nascimento</div></td>
                 <td><div align="center">Deficiente</div></td>
				        <td><div align="center">Status</div></td>
                   
               </tr>
                          
                            
</tbody></table>
			       <span style="background-color: red"></span>



<!-- NAVEGAÇÃO DAS PAGINAS GERADAS PELA CONSULTA MILIT -->

  <!-- CONTADOR DE REGISTROS -->        
        <span id="ticket"> <i> De 1 para 0 de 0</i> </span>
<!-- BARRA DE NAVEGAÇÃO DE REGISTROS -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-backward" href="principal.php?paciente=1&amp;pagina=0" aria-label="Previous">

                </a>
              </li>
    <!-- NAVEGA ENTRE AS PÁGINAS NUMERADAS -->
                  <!-- REMETE PARA O ULTIMO REGISTRO -->            
              <li class="page-item">
                <a class="glyphicon glyphicon-fast-forward" href="principal.php?paciente=1&amp;ultima_pagina=0" aria-label="Next">          
                </a>
              </li> 
            </ul>
      </nav>

  <!-- // -->
  
  
  					
							</div>						<div class="tab-pane fade" role="tabpanel" id="2"><br>
<b>Warning</b>:  require_once(C:\xampp\php\pear): failed to open stream: Permission denied in <b>C:\xampp\htdocs\prontuario\files\abas.php</b> on line <b>58</b><br>
<br>
<b>Fatal error</b>:  require_once(): Failed opening required '' (include_path='C:\xampp\php\PEAR') in <b>C:\xampp\htdocs\prontuario\files\abas.php</b> on line <b>58</b><br>
</div></div></div></body></html>