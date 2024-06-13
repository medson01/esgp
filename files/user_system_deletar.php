<?php
// Arquivo de configuração
 require_once "../config/config.php";
 
$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = '$id'";
$stmt = $conn->prepare($sql);

if( !($stmt->execute()) ){
echo "<script>alert('Houve um erro ao deletar!');
location.href='principal.php?paciente&usuarios'</script>";
}else{
echo "<script>alert('Registro excluido com sucesso!');
history.back()</script>";
}
?>