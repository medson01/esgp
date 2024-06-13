<?php


if( empty($_GET['atendimento']) && !isset($_GET['novo']) ){


	echo'

      <!-- /ABA -->				
      
      			<br>
      		<ul class="nav nav-tabs" style="clear: left;width: 98%;margin-left: 1%;">
      			<li class="nav-item  active">
      					<a class="nav-link active" href="#1" data-toggle="tab" aria-expanded="true"> Funcio&aacute;rios </a>
      			</li>
				<li class="nav-item ">
      				<!--	<a class="nav-link " href="#2" data-toggle="tab" aria-expanded="false">Cadastro</a> -->
      			</li>
      		</ul>
      		<div class="tab-content ">
      			<div class="tab-pane fade active in" role="tabpanel" id="1">      	';
					include"atendimento_paciente_lista.php";
    echo'		</div>
				<!--<div class="tab-pane fade" role="tabpanel" id="2">      			';
					//include"atendimento_paciente_formulario.php";
    echo'		</div> -->
			</div>			
    	</div>
    ';

} else{

	echo'

      <!-- /ABA -->				

      			<br>
      		<ul class="nav nav-tabs" style="clear: left;width: 98%;margin-left: 1%;">
      			<li class="nav-item">
      					<a class="nav-link " href="#1" data-toggle="tab" aria-expanded="true">Funcio&aacute;rios</a>
      			</li>
				<li class="nav-item   active">
      					<a class="nav-link active" href="#2" data-toggle="tab" aria-expanded="false">Cadastro</a>
      			</li>
      		</ul>
      		<div class="tab-content ">
      			<div class="tab-pane fade" role="tabpanel" id="1">      	';
					include"atendimento_paciente_lista.php";
    echo'		</div>
				<div class="tab-pane fade active in" role="tabpanel" id="2">      			';
					include"atendimento_paciente_formulario.php";
    echo'		</div>
			</div>			
    	</div>
    ';

}
?>