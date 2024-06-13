

 
   <div style="position:absolute"> 
   		<h2 class="documentFirstHeading"> 
			<span style="padding:15px">	Funcionários </span>
		</h1>
	</div>
	</br>

	</br>
<?php


if( empty($_GET['registro']) && !isset($_GET['novo']) ){


	echo'

      <!-- /ABA -->				

      			<br>
      		<ul class="nav nav-tabs" style="clear: left;width: 98%;margin-left: 1%;">
      			<li class="nav-item active">
      					<a class="nav-link " href="#1" data-toggle="tab" aria-expanded="true"> Lista  </a>
      			</li>
				<li class="nav-item ">
      					<a class="nav-link " href="#2" data-toggle="tab" aria-expanded="false"> Ficha Cadastral </a>
      			</li>
				<li class="nav-item">
      					<a class="nav-link " href="#3" data-toggle="tab" aria-expanded="false">Documentação</a>
      			</li>
      		</ul>
      		<div class="tab-content ">
      			<div class="tab-pane fade active in" role="tabpanel" id="1">      	';
					include"sislame_funcionario_lista.php";
    echo'		</div>
				<div class="tab-pane fade " role="tabpanel" id="2">      			';
					include"sislame_funcionario_formulario.php";
    echo'		</div>
				<div class="tab-pane" role="tabpanel" id="3">      			';
					include"funionario_imagem_lista.php";
    echo'		</div>
			</div>			
    	</div>
    ';

} else{

	echo'

      <!-- /ABA -->				

      			<br>
      		<ul class="nav nav-tabs" style="clear: left;width: 98%;margin-left: 1%;">
      			<li class="nav-item">
      					<a class="nav-link " href="#1" data-toggle="tab" aria-expanded="true"> Lista  </a>
      			</li>
				<li class="nav-item active">
      					<a class="nav-link " href="#2" data-toggle="tab" aria-expanded="false"> Ficha Cadastral </a>
      			</li>
				<li class="nav-item">
      					<a class="nav-link " href="#3" data-toggle="tab" aria-expanded="false">Documentação</a>
      			</li>
      		</ul>
      		<div class="tab-content ">
      			<div class="tab-pane fade" role="tabpanel" id="1">      	';
					include"sislame_funcionario_lista.php";
    echo'		</div>
				<div class="tab-pane fade active in" role="tabpanel" id="2">      			';
					include"sislame_funcionario_formulario.php";
    echo'		</div>
				<div class="tab-pane" role="tabpanel" id="3">      			';
					include"funionario_imagem_lista.php";
    echo'		</div>
			</div>			
    	</div>
    ';

}
?>