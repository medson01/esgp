<?php
    // Arquivo de configuração
  require_once "../config/config.php";

// Constantes
define('TAMANHO_MAXIMO', (2 * 1024 * 1024));

// Verificando se selecionou alguma imagem
if (!isset($_FILES['imagem']))
{
    echo"<script language='javascript' type='text/javascript'>alert('Selecione uma imagem!');history.go(-1)</script>";
    exit;
}

// Recupera os dados dos campos
$id = $_POST["id"];
$nome_documento = utf8_decode($_POST["nome_documento"]);
$evento = utf8_decode($_POST["evento"]);
$descricao = utf8_decode($_POST["descricao"]);
$foto = $_FILES['imagem'];
$nome_arquivo = utf8_decode($foto['name']);
$tipo = $foto['type'];
$tamanho = $foto['size'];



// Validações básicas
// Formato
if( preg_match('/^application\/(pdf)$/', $tipo) ) {
 $tag = 1;
}

if (preg_match('/^image\/(pjpeg|jpeg|png|gif|bmp)$/', $tipo)){
 $tag = 1;
}
 
if(isset($tag) <> 1){  
    //echo retorno('Isso não é uma imagem válida');

	 echo"<script language='javascript' type='text/javascript'>alert('Extenção de arquivo válido!');history.go(-1)</script>";
    exit;
}

// Tamanho arquivi até 2M
if ($tamanho > 5000000)
{
	echo "<script>alert('A imagem deve possuir no máximo 5 MB!');history.go(-1);</script>";
    exit;
}

// Transformando foto em dados (binário)
$imagem = file_get_contents($foto['tmp_name']);

// Preparando comando

$sql = 'INSERT INTO imagem (id, id_funcionario, nome_documento, nome_arquivo, evento, descricao, tipo, tamanho, data ,imagem) VALUES (null,'.$id.',:nome_documento,:nome_arquivo,:evento ,:descricao ,:tipo,:tamanho, "'.date("Y-m-d H:i:s" ).'", :imagem)';
$stmt = $conn->prepare($sql);

// Definindo parâmetros
$stmt->bindParam(':nome_documento', $nome_documento, PDO::PARAM_STR);
$stmt->bindParam(':nome_arquivo', $nome_arquivo, PDO::PARAM_STR);
$stmt->bindParam(':evento', $evento, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
$stmt->bindParam(':tamanho', $tamanho, PDO::PARAM_INT);
$stmt->bindParam(':imagem', $imagem, PDO::PARAM_LOB);

// Executando e exibindo resultado
if ( $stmt->execute() ) { 
   
echo "<script>alert('Imagem inserida com sucesso!');history.go(-1);</script>";

} else {
   echo "<script>alert('Imagem n\u00e3o inserida com sucesso!');history.go(-1);</script>";
}

?>

