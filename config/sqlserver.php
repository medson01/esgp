<?php

  //ConexÃ£o com o banco 
  $host = 'localhost';
  $usuario = 'root';
  $senha = '';
  $banco = 'TMPRO';


  try 
{
    // Conectando
    //$conn = new PDO("odbc:Banco - IPASEAL","sa", "p@ssw0rd");

    $conn = new PDO("odbc:Driver=Banco - IPASEAL;Server=10.1.16.151;Database=TMPRO; Uid=sa;Pwd=p@ssw0rd;");

} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexÃ£o
    die($e->getMessage());
}
  

      $stmt = $conn->prepare("SELECT * from BA1010 WHERE BA1_MATRIC = 000008");

      $stmt->execute();

     print_r($verifica = $stmt->fetchAll(PDO::FETCH_ASSOC));

     



?>