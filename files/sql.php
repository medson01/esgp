<?php

   // Arquivo de configuração
  require_once "../config/config.php";


      $sql01 = 'SELECT * FROM `fisioterapia` where id = '.$_GET['prontuario'];
	  
      $stm = $conn->prepare($sql01);

      $stm->execute();

  

       while($row = $stm->fetch(PDO::FETCH_ASSOC)){

			echo $estado_paciente = $row["estado_paciente"];
			$posicionamento = $row["posicionamento"];
			$sedestacao = $row["sedestacao"];
			$bipedestacao = $row["bipedestacao"];
			$pressao_arterial = $row["pressao_arterial"];
			$auscuta_pulmonar = $row["auscuta_pulmonar"];
			$saturacao_periferica = $row["saturacao_periferica"];
			$freq_cardiaca = $row["freq_cardiaca"];
			$freq_respiratoria = $row["freq_respiratoria"];
			$glicemia = $row["glicemia"];
			$temperatura = $row["temperatura"];
			$ex_ativo_passivo = $row["ex_ativo_passivo"];
			$ex_motabolico = $row["ex_motabolico"];
			$ex_respiratorio = $row["ex_respiratorio"];
			$aspiracao = $row["aspiracao"];
			$descarga_peso = $row["descarga_peso"];
			$alongamento = $row["alongamento"];
			$cambulacao = $row["cambulacao"];
			$observacao = $row["observacao"];
			$data = $row["data"];
 
	   }
/*
echo'<script type="text/javascript">

var delay=1000; //1 seconds
setTimeout(function(){
        alert(“Ola mundo!”);
        //your code to be executed after 1 seconds
},delay);

   <!-- $("#btn_modal").trigger("click") -->;

    </script>
    ';
*/
?>

