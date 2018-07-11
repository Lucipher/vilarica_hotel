<?php
header('Content-type: application/json'); # Informa que vai utilizar conteudo JSON

if (
	($_SERVER['HTTP_ORIGIN'] == 'https://vlconstrutora.com.br' ||
	$_SERVER['HTTP_ORIGIN'] == 'http://vlconstrutora.com.br' ||
	$_SERVER['HTTP_ORIGIN'] == 'https://www.vlconstrutora.com.br' ||
	$_SERVER['HTTP_ORIGIN'] == 'http://www.vlconstrutora.com.br') && # Verifica a origem da requisição
	$_SERVER['REQUEST_METHOD'] == 'POST' && # verifica se a requisição é POST
	!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && # Verifica se o POST é via AJAX
	strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && # Verifica se o POST é via AJAX
	!empty($_POST['idade']) && !empty($_POST['renda']) # Verifica se os valores foram informados
) {
	# Inclusão do arquivo de variaveis utilizadas para calculos e resposta
	require_once 'atributos.php';
	# Inclusão dos arquivos que realizam os calculos necessários
	require_once 'calculo_subsidio.php';
	require_once 'calculo_parcela.php';
	require_once 'calculo_valor_total.php';
	# Inclusão  do arquivo que retorna o Json para a página
	require_once 'resposta.php';

	require_once 'envio/database.php';
	exit();
}else{
	$array_resp = array('err-code' => 422, 'err-message' => 'Você não está autorizado a realizar este procedimento.');
	header(':', true, 422);
	echo json_encode($array_resp);
	
	exit();
}