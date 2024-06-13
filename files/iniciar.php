<?php
// cont_iniciar.php

$sql = "SELECT titulo, conteudo, data FROM avisos WHERE status = '1' AND id_credenciado = '".$_SESSION['id_credenciado']."'";
    
    $stmt = $conn->prepare($sql);

    $stmt->execute();  

?>
<td width="898" id="portal-column-content"> 

              
              <div>
                  	<div id="region-content" class="documentContent" style="left: initial;">
                    

	                    <p align="center"><strong><br />
                        <img src="../imagem/inicial.jpg" width="762" height="312" /></strong><br />
				          <br />
						</p>
                    
						<div class="x"></div>
						<div id="feature"></div>
  				    </div>		
                      
                      <center>
                        <img src="../imagem/avisos.jpg" width="91" height="71" border="0" />
                      </center>
					  <p>
					  
					  
	                        
										<p>					  
							<!-- Titulo do aviso --> ';								  
							
					<?php			
							while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

								echo "
								<div align='center'>
										<span class='titulo' align='center'>
											 <img src='../imagem/alarme.png' width='30' height='30' />
											 ".$row["titulo"]."							          			
                       					</span>

                       			</div>
                       			<div>
                        		<div align='center'><span align='center' class='conteudo'>

                        			         ".$row["conteudo"]."	
                        		</div>
			                    <div align='right'>
			                         <font size='1px'>
			                          
											Puplicado em ".date("d/m/Y", strtotime($row["data"]))."

									  
			                         </font>  
			                        </div>
                        		<h1></h1>
                        		";
                        	}				

                 ?>       			  
                          
                        
                        
                        <div align="right"></div>
						
						 </p>

                </div>
              </div>
                </tr>
        
    </table>

</div>