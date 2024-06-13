<?php

		$aba1 = "Usuários";
	    $conteudo1 =  "user_system_formulario.php";

echo '<div id="exTab2" class="container" style="font: -webkit-small-control; border-bottom: hidden; ">
	<br>';
echo '		<ul class="nav nav-tabs " style="clear: left;">
					<li class="nav-item active">
						<a class="nav-link active"  href="#1" data-toggle="tab" aria-expanded="true">'.$aba1.'</a>
					</li>';
echo '		</ul>

	 		<div class="tab-content ">
						  	<div class="tab-pane active" role="tabpanel" id="1">';
			          	      require_once ($conteudo1);		
echo'						</div>';

echo'			</div>
	</div>';



?>