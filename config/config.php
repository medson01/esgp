<?php


  //Conexão com o banco 
  $host = 'localhost';
  $db = 'esgp';
  $usuario = 'root';
  $senha = '';
  
// Conex�o para banco postgre  
  //$dsn = "pgsql:host=$host;port=5432;dbname=$db;";

// Conex�o para banco Mysql

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
    // Se ocorrer algum erro na conexão
    die($e->getMessage());
}

if(!isset($_SESSION)){

  //Tempo de permanencia da sessão
 // session_cache_expire(180000);
  // Início de sessão
  session_start();
}

// Configura��o da data e hora
date_default_timezone_set('America/Maceio');

?>