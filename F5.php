<?php

//Função para dar bom dia,boa tarde ou boa noite dependendo do horário do sistema!

function saudacao( $nome = '' ) {
	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H');
	if( $hora >= 6 && $hora <= 12 )
		return 'Bom dia '.$nome;
	else if ( $hora > 12 && $hora <=18  )
		return 'Boa tarde '.$nome;
	else
		return 'Boa noite '.$nome;
}
$login=$_POST['nome'];
echo saudacao( $login );

?>
