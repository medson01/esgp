<?php
function cargos_adicionados($cargo){


  //ConexÃ£o com o banco 
  $host = 'localhost';
  $db = 'esgp';
  $usuario = 'root';
  $senha = '';
  
// Conexão para banco postgre  
  //$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

// Conexão para banco Mysql

  $dsn = "mysql:host=$host;port=3306;dbname=$db";

  try 
{
    // Conectando
    $conn = new PDO($dsn, $usuario, $senha);
	//Ocasiona o erro carregar os arquivos de imagem
    //$conn->exec("SET CHARACTER SET utf8");
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexÃ£o
    die($e->getMessage());
}
  
		$sql2 = "SELECT cargo.CD_CENSO, escola.ESCOLA, cargo.nome, cargo.quantidade FROM cargo INNER JOIN escola ON escola.CD_CENSO = cargo.CD_CENSO WHERE NOT_SISLAME = 1 AND  cargo.CD_CENSO = ".$cargo." GROUP BY cargo.CD_CENSO, cargo.nome";
			
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

