<?php

// Pega as dados que foram inseridos no sistema na lotação padrão
function extra(){

   // Arquivo de configuração
  require_once "../config/config.php";
  
		$sql2 = "SELECT cargo.CD_CENSO, escola.ESCOLA, cargo.nome, cargo.quantidade FROM cargo INNER JOIN escola ON escola.CD_CENSO = cargo.CD_CENSO WHERE NOT_SISLAME = 1 GROUP BY cargo.CD_CENSO, cargo.nome";
			
		$stmt2 = $conn->prepare($sql2);
		$stmt2->execute();
		$results = array();
	
					while($registro = $stmt2->fetch(PDO::FETCH_ASSOC)){
					  $results[] = "<tr>
										<td ><div align='center' class='legenda_tab'>".$registro["CD_CENSO"]."</div></td>
										<td ><div align='left' class='legenda_tab'>".utf8_encode($registro["ESCOLA"])."</div></td>
										<td ><div align='left' class='legenda_tab'>".utf8_encode($registro["nome"])."</div></td>
										 <td ><div align='left' class='legenda_tab'> </div></td>
										  <td ><div align='left' class='legenda_tab'> </div></td>
										<td ><div align='center' class='legenda_tab'>".$registro["quantidade"]."</div></td>		  
						  </tr>";
					  }
		return $results;

}	
	
?>

