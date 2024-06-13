<?php
    // Arquivo de configuração
  require_once "../config/config.php";
  
$id_imagem = $_GET['id'];

$sql = "SELECT imagem, tipo FROM imagem WHERE id = '".$id_imagem."'";

      $stmt = $conn->prepare($sql);
      $stmt->execute();

$row = $stmt->fetchAll(\PDO::FETCH_ASSOC);


if($row[0]['tipo'] == 'image/png'){
    Header( "Content-type: image/gif"); 
}else{
    Header( "Content-type: application/pdf"); 
}

    echo $row[0]['imagem'];


?>

