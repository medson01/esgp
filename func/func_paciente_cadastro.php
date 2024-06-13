<?php

function formatarMatricula($matricula){

	$matricula = str_replace(".", "", $matricula);
	$matricula = str_replace("-", "", $matricula);
	$tammanho  = strlen($matricula);
	if($tammanho <> 16){
			$matricula = false;
	}

	return $matricula;
}


function fone($fone){
$fone = str_replace(" ", "", $fone);
$fone = str_replace("(", "", $fone);
$fone = str_replace(")", "", $fone);
$fone = str_replace("-", "", $fone);

  return $fone;
}

function dataNasc($data_nasc){

	$data_nasc=explode('/',$data_nasc);

    $data_nasc=$data_nasc[2].$data_nasc[1].$data_nasc[0];

	return $data_nasc;
}
?>