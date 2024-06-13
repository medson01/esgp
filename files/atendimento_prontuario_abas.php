

<!-- sub_menu -->
<?php 

		$aba1 = "Escola";
		$conteudo1 =  "prontuario_lista.php";
		//$aba2 = "Cadastro";	
		$conteudo2 = "atendimento_prontuario_formulario.php";
		//$aba3 = "Agenda";	
		//$conteudo3 = "agenda.php";


if(isset($_GET['id_user']) || isset($_GET['novo']) ){


echo '		<ul class="nav nav-tabs" style="clear: left;">
					<li class="nav-item ">
						<a class="nav-link "  href="#1" data-toggle="tab" aria-expanded="false">'.$aba1.'</a>
					</li>';
	if( !(isset($_GET['ativo']) || isset($_GET['fechado'])) ){
/*
echo'				<li class="nav-item active" >
						<a class="nav-link active"  href="#2" data-toggle="tab" aria-expanded="true">'.$aba2.'</a>
					</li>';

echo'
					<li class="nav-item">
						<a class="nav-link"  href="#3" data-toggle="tab" aria-expanded="false">'.$aba3.'</a>
					</li>';
*/
	}
echo '		</ul>

	 		<div class="tab-content ">
						  	<div class="tab-pane fade" role="tabpanel" id="1">';
			          	      require_once ($conteudo1);		
echo'						</div>';

//	if( !(isset($_GET['ativo']) || isset($_GET['fechado'])) ){
echo'						<div class="tab-pane fade active in" role="tabpanel" id="2">';
			        	       	require_once ($conteudo2);		
echo'						</div>';
echo'						<div class="tab-pane fade" role="tabpanel" id="3">';
echo '							<iframe src="agenda\index.php" width="100%" height="800" style="border:0px solid black;"></iframe>';
								//	require_once ($conteudo3);		
echo'					</div>';	
//	}

echo'			</div>
	</div>';


}else{


echo '<br>';
echo '		<ul class="nav nav-tabs" style="clear: left;">
					<li class="nav-item active">
						<a class="nav-link active"  href="#1" data-toggle="tab" aria-expanded="true">'.$aba1.'</a>
					</li>';
	if( !(isset($_GET['ativo']) || isset($_GET['fechado'])) ){
/*
echo'				<li class="nav-item" >
						<a class="nav-link"  href="#2" data-toggle="tab" aria-expanded="false">'.$aba2.'</a>
					</li>';

echo'					
					<li class="nav-item">
						<a class="nav-link"  href="#3" data-toggle="tab" aria-expanded="false">'.$aba3.'</a>
					</li>';
*/
	}
echo '		</ul>

	 		<div class="tab-content ">
						  	<div class="tab-pane fade active in" role="tabpanel" id="1">';
			          	      require_once ($conteudo1);		
echo'						</div>';

//	if( !(isset($_GET['ativo']) || isset($_GET['fechado'])) ){
echo'						<div class="tab-pane fade" role="tabpanel" id="2">';
			        	       	require_once ($conteudo2);		
echo'						</div>';
echo'						<div class="tab-pane fade" role="tabpanel" id="3">';
echo '							<iframe src="agenda\index.php" width="100%" height="800" style="border:0px solid black;"></iframe>';
								//	require_once ($conteudo3);		
echo'					</div>';	
//	}

echo'			</div>
	</div>';
	


}



?>



