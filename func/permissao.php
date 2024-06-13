<?php
function permissao(){
	 /* Permissões
        0 - sem abrir/fechar
		1 - abrir;
        2 - fechar;
        3 - abrir e fechar;
     */

        switch ($_SESSION["perfil"]) {
            case 'administrador': 
        	    $x = 3;
                   break;
            case 'medico_ambul':
                $x = 2;
                   break;
            case 'medico_padi':
                $x = 0;
            	   break;
            case 'atendente':
                $x = 1;
                   break;
            case 'supervisor':
                $x = 4;
                   break;

            }

    return $x;

}

?>