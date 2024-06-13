<!-- Bootstrap -->
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Mascara para campo -->
    <script src="js/jquery.mask.min.js"></script>

<!------ Mascara de Campo ---------->
	<script type="text/javascript">
			$("#telefone").mask("(00) 00000-0000");
	</script>



<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div class="container">
    <div class="row" >

        
            <?php
                    if(isset($_GET['numero_protocolo'])){

                        echo "<div class='alert alert-warning' style='text-align:center'>
                                    Seu número de protocolo é ".$_GET['numero_protocolo']."<br>
 									Agradecemos o seu contato. Sua solicitação foi enviada com sucesso. Em breve entraremos em contato para confirmar sua reserva. <br>
									
									Centro de Formação Paulo Freire
									 
                              </div>";
                    }
            ?>

        

        <hr />

        <div class="row">
            

                <h4 class="page-header">Dados da solicita&ccedil;&atilde;o</h4>
                <form role="form" action="enviar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group float-label-control">
                        <label for="">Nome<span class="style1">*</span></label>
                        <input name="nome" type="text" class="form-control" placeholder="Digite o nome completo" required>
						
                    </div>
					
                    <div class="form-group float-label-control">
                        <label for="">Email<span class="style1">*</span></label>
                        <input name="email" type="email" class="form-control" placeholder="Digite seu E-mail" required/>
						
               	    </div>
					
					<div class="form-group float-label-control">
                        <label for="">Telefone(s) para Contato<span class="style1">*</span> </label>
                        <input name="telefone" id="telefone" type="text" class="form-control" placeholder="Digite seu telefone" required/>
					
                  	</div>
					
				    <div class="form-group float-label-control">
                      <label for="label">Assunto<span class="style1">*</span></label>
                      <select name="assunto" class="form-control" aria-required="true" aria-invalid="false">
                        <option value="0">- Selecione um assunto -</option>
                        <option value="1">Agendamento de espaço</option>
                        <option value="2">Reserva de equipamento</option>
                      </select>
                    </div>
					
					<div class="form-group float-label-control">
					<table>
						<tr>
                        <label for=""> Data do Evento <span class="style1">*</span> </label>
							<td>
                        		<input name="inicial" id="inicial" type="date" class="form-control" required/>
							</td> 
							<td>
								  &nbsp; à &nbsp;
							</td>
							<td>
							    <input name="final" id="final" type="date" class="form-control" required/>
							</td>
						</tr>
					</table>
					
                  	</div>
					
					<div class="form-group float-label-control">
                        <label for="">Horário<span class="style1"></span> </label>
					<table width="381">
						<tr>
                        <label for=""> do Evento <span class="style1">*</span> </label>
							<td width="168">
                        						<input name="time1" id="time1" type="time" class="form-control" required/>
						  </td> 
							<td width="22">							</td>
							<td width="175">	<input name="time2" id="time2" type="time" class="form-control" required/>
						</td>
						</tr>
					</table>
					
                  	</div>
					
					
				    <div class="form-group float-label-control">
                      <label for="label">Equipamentos necessários<span class="style1">*</span></label>
                      <br />
					  <div style="margin-left:50px">
                        <input class="form-check-input" type="checkbox" name="equipamento1" value="DataShow"> Data Show<br>
						<input class="form-check-input" type="checkbox" name="equipamento2" value="Notebook"> Notebook<br>
						<input class="form-check-input" type="checkbox" name="equipamento3" value="Caixa de som" > Caixa de Som<br />
						<input class="form-check-input" type="checkbox" name="equipamento4" value="Microfone"> Microfone<br>
					</div>
                    </div>
					
         			<div class="form-group float-label-control">
					<div class='alert alert-warning'>
						<label for="label">Atenção: </br> <span class="style1"></span></label>
						<br /> Ao agendar o espaço é necessário informar quais equipamentos deverão ser utilizados para o evento, pois a reserva do mesmo não implica necessariamento a reserva de equipamentos.
					</div>	
					</div>
					
				    <div class="form-group float-label-control">
                        <label for="">Mais informações sobre o evento:</label>
                        <textarea name="mensagem" class="form-control" placeholder="mensagem" rows="10"></textarea>
                    </div>
					
					<div class="form-group float-label-control">
						<label for="">Deseja anexar arquivos?</label>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>

				  </div>
					
				  <div class="form-group float-label-control">

                    <div align="right">
                      <input type="hidden" id="numero_protocolo" name="numero_protocolo" value="<?php echo time(); ?>" >
                        
                      <span style="text-align:left"> 
                      <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                      </span>
                    </div>
				  </div>
					
					

				
                </form>


         

        </div>
  </div>
</div>