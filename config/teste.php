<?php

  //ConexÃ£o com o banco 
  $host = 'localhost';
  $usuario = 'root';
  $senha = '';
  $banco = 'prontuario';

  $dsn = "mysql:host={$host};port=3306;dbname={$banco}";

  $conn1 = mysqli_connect($host,$usuario ,$senha,$banco);



  try 
{
    // Conectando
    $conn2 = new PDO($dsn, $usuario, $senha);
} 
catch (PDOException $e) 
{
    // Se ocorrer algum erro na conexÃ£o
    die($e->getMessage());
}
  

      $stmt = $conn2->prepare("SELECT avisos.titulo, avisos.conteudo, avisos.data FROM avisos INNER JOIN credenciado ON credenciado.id = avisos.id_credenciado WHERE avisos.status = '1' AND credenciado.id = '21' ");

      $stmt->execute();

     print_r($verifica = $stmt->fetchAll(PDO::FETCH_ASSOC));

     

  echo "<br>=====================================<br>";
      echo 'linhas: '.$resultado = $stmt->rowCount();
  echo "<br>=====================================<br>";
      $a = $stmt->errorCode();
      print_r($a);
  echo "<br>=====================================<br>";
      
      $b = $stmt->errorInfo();
      print_r($b);

  echo "<br>=====================================<br>";




?>