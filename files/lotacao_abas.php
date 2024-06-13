<?php	
	$aba1 = "Escola";
	$conteudo1 =  "lotacao_escola.php";
	$aba3 = "Aluno";
	$conteudo3 =  "lotacao_escola_aluno_lista.php";
	
	$aba2 = "Funcion&aacute;rios";
	$conteudo2 = "lotacao_escola_funionario_lista.php";
	
	//$aba3 ="Evol. Fisioterapia"; 
	//$conteudo3 =  "evol_fisioterapia_lista.php";
	
 echo '
	<br>';


echo '			<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item active" >
						<a class="nav-link "  href="#1" role="tab"  aria-controls="1" data-toggle="tab" aria-selected="true">'.$aba1.'</a>
					</li>';
echo'				<li class="nav-item" >
						<a class="nav-link" href="#2" role="tab" aria-controls="2" data-toggle="tab" aria-selected="false">'.$aba2.'</a>
					</li>';
					
	if($aba1 == "Escola"){					
			echo'	<li class="nav-item">
						<a class="nav-link" href="#3" role="tab"  aria-controls="3" data-toggle="tab" aria-selected="false">'.$aba3.'</a>
				</li>';
	}
	
echo '			</ul>
	 			<div class="tab-content">
						<div class="tab-pane fade active in" role="tabpanel" id="1">';
			          		include "$conteudo1";		
echo'					</div>';
echo'					<div class="tab-pane" role="tabpanel" id="2">';
			        		include "$conteudo2";	
echo'					</div> </div>';

		if($aba1 == "Escola"){	
		echo'			<div class="tab-pane fade" role="tabpanel" id="3">';
			           		include "$conteudo3";	
		}
		
		echo'			</div>';	
echo'			</div>
		</div>
	</div>
 </div>';
?>



<!-- Controla a Aba para que ela permaneca no mesmo local mesmo dando Reflex --> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
<script>

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
   localStorage.setItem('activeTab', $(e.target).attr('href'));
});
// Aqui salva o índice ao qual corresponde a aba. Você pode vê-lo na ferramenta de desenvolvimento do Chrome.

//Obtém os dados da localStorage
var activeTab = localStorage.getItem('activeTab');

// No console, ele mostrará a aba onde você fez o último clique e o 
// salve em "activeTab". Deixo o console para você ver. E quando você der refresh
// no navegador, o último em que você clicou estará ativo.

console.log(activeTab);

if (activeTab) {
   $('a[href="' + activeTab + '"]').tab('show');
}



</script>
<!-- /sub_menu -->
<?php

//  clica no botão modal para exibir o formulário de cadastro 
if(!empty($_GET['lotacao'])){
	echo'<script type="text/javascript">
			
			$("#btn_modal").trigger("click");

	    </script>
	    ';
}
?>
