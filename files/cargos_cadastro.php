
<?php 

// Arquivo de configuração
  require_once "../config/config.php";

echo "<br>";
echo "<br>";
echo "<br>";

$i = 1;
$g = 1;

foreach ($_POST as $key => $value){

    if ($key == "total_cargos"){
        $total = $value;
    
    }elseif($key == "inep"){
        $inep = $value;

    }else{ 

     $a[$i] = $value ;  
	 if(substr($key, 0, -1) == "cx_"){
	 
	  $a[$i] = $value."null" ; 
	 
	 }
	  
	 // Exclui os indices dos arrays com informação de excluir 
      if($value == "on"){
           unset($a[$i-2]);
           unset($a[$i-1]);
           unset($a[$i]);       
      }

      $i++; 

    }
	
}


// Apaga antes de atualizar a tabela cargos, pq deve existir apenas uma definição;
  $sql = "DELETE FROM `cargo` WHERE CD_CENSO =".$inep.";";
  $stmt = $conn->prepare($sql);
  $stmt->execute();


// Inserir apenas o definido sem o EXCLUIR;
$y = 1;
foreach ($a as $valor) {
	

    $b[$y] = $valor;
    if($y % 2 == 0) {
	
	if( substr( $b[$y-1] , -4) == "null") {  $w = "null";  $b[$y-1] = substr($b[$y-1] , 0, -4); };

   $sql = "INSERT INTO `cargo`(`id`, `CD_CENSO`, `nome`, `quantidade`, `not_sislame`, `data`) VALUES (null,".$inep.",'".utf8_decode($b[$y-1])."','".$b[$y]."','".isset($w)."','".date("Y-m-d H:i:s" )."');<br>";
   
      $stmt = $conn->prepare($sql);
  
      if(!$stmt->execute()){ 
        echo"<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar cargos!');  history.back(); </script>";
      }else{
        $ok = 1;
      }

    }
    ++$y;

}


if($ok == 1){

  echo"<script language='javascript' type='text/javascript'>alert('Cargos cadastrado com sucesso!');history.back();</script>";
}
   
?>



