
<?php 

// Arquivo de configuração
  require_once "../config/config.php";

//paciente
$id_paciente =  $_POST["id_paciente"]; 

if (!empty($_POST["estado_paciente"])) {
   $estado_paciente = $_POST["estado_paciente"];
}else{
   $estado_paciente = "0";
}

if (!empty($_POST["posicionamento"])) {
   $posicionamento = $_POST["posicionamento"];
}else{
   $posicionamento = "0";
}

if (!empty($_POST["sedestacao"])) {
	$sedestacao = $_POST["sedestacao"];
}else{
	$sedestacao = "0";
}

if (!empty($_POST["bipedestacao"])) {
  $bipedestacao = $_POST["bipedestacao"];
}else{
  $bipedestacao = "0";
}

if (!empty($_POST["pressao_arterial"])) {
	$pressao_arterial = $_POST["pressao_arterial"];
}else{
	$pressao_arterial = "null";
}

if (!empty($_POST["auscuta_pulmonar"])) {
	$auscuta_pulmonar = $_POST["auscuta_pulmonar"];
}else{
	$auscuta_pulmonar = "null";
}

if (!empty($_POST["saturacao_periferica"])) {
	$saturacao_periferica = $_POST["saturacao_periferica"];
}else{
	$saturacao_periferica = "null";
}

if (!empty($_POST["freq_cardiaca"])) {
	$freq_cardiaca = $_POST["freq_cardiaca"];
}else{
	$freq_cardiaca = "null";
}

if (!empty($_POST["freq_respiratoria"])) {
	$freq_respiratoria = $_POST["freq_respiratoria"];
}else{
	$freq_respiratoria = "null";
}

if(!empty($_POST["glicemia"])){
	$glicemia = $_POST["glicemia"];
}else{
	$glicemia = "0";
}

if(!empty($_POST["temperatura"])){
	$temperatura = $_POST["temperatura"];
}else{
	$temperatura = "null";
}
 
if(!empty($_POST["ex_ativo_passivo"])){
	// exercicio ativo
	$ex_ativo_passivo = $_POST["ex_ativo_passivo"]; 
}else{
	// exercicio passivo
	$ex_ativo_passivo = "0";
}

if (!empty($_POST["ex_motabolico"])) {
	$ex_motabolico = $_POST["ex_motabolico"];
}else{
	$ex_motabolico = "null";
}

if(!empty($_POST["ex_respiratorio"])){
	$ex_respiratorio = $_POST["ex_respiratorio"];
}else{
	$ex_respiratorio = "null";
}

if(!empty($_POST["ex_respiratorio"])){
	$ex_respiratorio = $_POST["ex_respiratorio"];
}else{
	$ex_respiratorio = "null";
}

if(!empty($_POST["aspiracao"])){
	$aspiracao = $_POST["aspiracao"];
}else{
	$aspiracao = "null";
}

if (!empty($_POST["descarga_peso"])) {
	$descarga_peso = $_POST["descarga_peso"];
}else{
	$descarga_peso = "null";
}

if(!empty($_POST["alongamento"])){
	$alongamento = $_POST["alongamento"];
}else{
	$alongamento = "null";
}

if (!empty($_POST["cambulacao"])) {
	// Ativo Ocambulação = 1
	$cambulacao = $_POST["cambulacao"];
}else{
	// Desativo Decambulação = 0
	$cambulacao = "0";
}

if (!empty($_POST["observacao"])){
	$observacao = utf8_decode($_POST["observacao"]);
}else{
	$observacao = "null";
}
   $sql = "INSERT INTO `fisioterapia`(`id`, `id_prontuario`, `id_usuario`,`estado_paciente`, `posicionamento`, `sedestacao`, `bipedestacao`, `pressao_arterial`, `auscuta_pulmonar`, `saturacao_periferica`, `freq_cardiaca`, `freq_respiratoria`, `glicemia`, `temperatura`, `ex_ativo_passivo`, `ex_motabolico`, `ex_respiratorio`, `aspiracao`, `descarga_peso`, `alongamento`, `cambulacao`, `observacao`,`data`) VALUES (null,'$id_paciente','".$_SESSION["id"]."','$estado_paciente','$posicionamento','$sedestacao','$bipedestacao','$pressao_arterial','$auscuta_pulmonar','$saturacao_periferica','$freq_cardiaca','$freq_respiratoria','$glicemia','$temperatura','$ex_ativo_passivo','$ex_motabolico','$ex_respiratorio','$aspiracao','$descarga_peso','$alongamento','$cambulacao','$observacao','".date("Y-m-d H:i:s" )."')";



  $stmt = $conn->prepare($sql);

 $stmt->execute();
     

 echo"<script language='javascript' type='text/javascript'>alert('Cadastrado efetuado com sucesso!');window.location.href='http://localhost/prontuario/files/principal.php?id=".$id_paciente."&prontuario'</script>";
	

    
?>