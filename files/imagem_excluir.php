<?php
    // Arquivo de configuração
  require_once "../config/config.php";

$id = $_GET["id"];

$sql = "DELETE FROM imagem WHERE id = '".$id."' ";

      $stmt = $conn->prepare($sql);
      $stmt->execute();

echo "<script>alert('Registro excluido com sucesso!');history.go(-1);</script>";
?>