<?php
// Arquivo de configuração
 require_once "../config/config.php";
 
$id = $_GET['id'];

$sql = "UPDATE lotacao SET status= 0, DATA='".date("Y-m-d H:i:s" )."' WHERE id = '$id'";
$stmt = $conn->prepare($sql);

if( !($stmt->execute()) ){
echo "<script>alert('Houve um erro ao deletar!');
history.back()</script>";
}else{
echo "<script>alert('Registro excluido com sucesso!');
history.back()</script>";
}
?>