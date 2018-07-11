<?php

/**
 * Utiliza as variaveis definidas nos outros includes e retorna para a pagina HTML.
 */

$array_resp = array(
	'nome' => !$str_pos ? $nome_completo : substr($nome_completo, 0, $str_pos),
	'cidade' => $cidade,
	'renda' => number_format($renda, 2, ',', '.'),
	'email' => $email,
	'telefone' => $telefone,
	'valor' => number_format(round($valor_total), 2, ',', '.'),
	'parcela' => number_format(round($parcela), 2, ',', '.'),
	'subsidio' => number_format(round($subsidio), 2, ',', '.'),
	'total' => number_format(round($valor_total + $subsidio), 2, ',', '.'),
);

header(':', true, 200);
echo json_encode($array_resp);