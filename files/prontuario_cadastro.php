
<?php 

// Arquivo de configuração
  require_once "../config/config.php";


//paciente
$id_user = $_POST["id_user"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$tipo_sang = $_POST["tipo_sang"];
$fator_rh = $_POST["fator_rh"];
$quadro_clinico = $_POST["quadro_clinico"];
$diagnostico = $_POST["diagnostico"];
$baixa = isset($_POST["baixa"]) ? $_POST["baixa"] : null;
$media = isset($_POST["media"]) ? $_POST["media"] : null;
$alta  = isset($_POST["baialtaxa"]) ? $_POST["alta"] : null;
$complexidade = $baixa.$media.$alta;


   $sql = "INSERT INTO `prontuario`(`id`, `id_usuario`, `peso`, `altura`, `tipo_sang`, `fator_rh`, `quadro_clinico`, `diagnostico`, `status`, `complexidade`,`data_prontuario`) VALUES (null,'$id_user','$peso','$altura','$tipo_sang','$fator_rh','$quadro_clinico','$diagnostico',1,'$complexidade','".date("Y-m-d H:i:s" )."')";



  $stmt = $conn->prepare($sql);

  $stmt->execute();
      

 echo"<script language='javascript' type='text/javascript'>alert('Prontuário cadastrado com sucesso!');window.location.href='principal.php?paciente'</script>";

    
?>