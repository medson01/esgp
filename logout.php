<?php
 
session_start(); //iniciamos a sess�o que foi aberta
 
session_destroy(); //destruimos a sess�o ;)
 
session_unset(); //limpamos as variaveis globais das sess�es
 
 
/*aqui voc� pode redirecionar para uma determinada p�gina*/
echo "<script>alert('Voc\u00ea saiu!'); document.location.href='./index.html';</script>";
 
?>