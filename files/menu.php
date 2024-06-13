 <div id="config" style=" width:100%; height:50px;">
            <div  style="width:60%;  float: left;">
                  <nav class="navbar navbar-expand-sm" style="height:10px" >
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li class="active"><a style="color:#FFFFFF" href="principal.php" > In&iacute;cio </a></li>

                        <li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#"> Cadastro <span class="caret"></span></a>
                        <?php

					    				/*	Pemissõa para:
					    					1 Atendentes
					    					2 medico_ambul
					    					0 medico_padi
					    					3 administrador
					    					4 supervisor
					    				*/

                            	if( permissao() === 3 || permissao() === 1 || permissao() === 4){



							  								echo '
							  						<ul class="dropdown-menu">
																		<li><a  href="principal.php?aluno"> Aluno </a></li>
							  											<li><a  href="principal.php?funcionario"> Funcio&aacute;rio </a></li>
							  											<li><a  href="principal.php?escola"> Escola </a></li>
																		<li><a  href="principal.php?funcionario"> Funcio&aacute;rio </a></li>
							  						</ul>
							  											'; 
							  							}
							  				?>      
                            
                        </li>  
					    <li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#"> Lotação <span class="caret"></span></a>
					    					<?php

					    				/*	Pemissõa para:
					    					1 Atendentes
					    					2 medico_ambul
					    					0 medico_padi
					    					3 administrador
					    					4 supervisor
					    				*/
					    							if( !(permissao() === 1) ){
					    								echo'
	                            <ul class="dropdown-menu">
	                              <li><a  href="principal.php?escola&ativo">Escola Ativo</a></li>
	                              <li><a  href="principal.php?escola&inativo">Escola Fechado</a></li>
	                            </ul>
	                            ';
	                          }
                        ?>                            
                        </li> 
						<li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#"> Relatório <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a  href="principal.php?rel_carencia"> Carência </a></li>
									<li><a  href="principal.php?aluno"> Qtd alunos </a></li>
							  		<li><a  href="principal.php?funcionario"> Funcio&aacute;rio </a></li>
							  		<li><a  href="principal.php?escola"> Escola </a></li>
							  	</ul>
						</li>
						<li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#"> Gráfico <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a  href="principal.php?aluno"> Alunos </a></li>
							  		<li><a  href="principal.php?funcionario"> Funcio&aacute;rios </a></li>
							  		<li><a  href="principal.php?escola"> Escolas </a></li>
									<li><a  href="principal.php?escola"> Lotação </a></li>
							  	</ul>
						</li>
					
                        <li class="dropdown"> <a style="color:#FFFFFF" class="dropdown" data-toggle="dropdown" href="#"> Configuração <span class="caret"></span></a>
                        <?php

                      /*	Pemissõa para:
					    					1 Atendentes
					    					2 medico_ambul
					    					0 medico_padi
					    					3 administrador
					    					4 supervisor
					    				*/
                        		if( permissao() === 3){
                            	echo '
                            		<ul class="dropdown-menu">
                              		<li><a  href="principal.php?usuarios">Usuários</a></li>
                            		</ul>
                            		';
                            	}
                        ?>
                        </li> 
						

					  	 
                        <li><a style="color:#FFFFFF" href="#"> Avisos </a></li> 
                      </ul>
                    </div>
                  </nav>

  </div>
            <div  style="width:40%; float:right" >
				<span style="color:#FFFFFF">
			  		<div  class="hidden-print" align="right"><img src="../imagem/avatar.png" alt="Clique aqui para ser atendido" border="0" height="44" width="44" />
						<span style="width:500px"> 
								<?php	 		
									$login = $_SESSION["login"];		
							    //	echo permissao();
						   			echo utf8_encode($login);

								?>	
			    				&nbsp; &nbsp;&nbsp;
			    		<a  href="../logout.php"> <span class="glyphicon glyphicon-log-out" style="color:#FFFFFF;"> 
						</span> 
						</a>&nbsp;&nbsp;&nbsp;		        
					</div>
  			</div>
					<p>
					</p>
	</div>

					</p> 

	<!-- / menu.php -->				