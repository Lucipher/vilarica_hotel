<?php

/**
 * Os valores para o calculo de PV seriam:
 *
 * Taxa -> $tx/12/100 | Divisão da taxa por 12 e posteriormente por 100
 * Nper -> 360 | Numero de meses que esta sendo disponibilizado para ser feito o pagamento
 * Pmt -> $parcela-$mip-$dif;
 *
 * Formula (((1-(1+J)^-N))/J)*P
 *
 * Onde: J -> Taxa, N -> Nper e P -> Pmt
 */

# Essa formula corresponde a feita na planilha em Tabela-ComissaoFaturada/T21
# Objetivo é encontrar a tx de acordo com a renda informada.
foreach ($premissa as $key) {
	if ($renda >= $key["renda_de"] && $renda <= $key["renda_ate"]) {
		$tx = $key["taxa_s_redutor"] - 0.5;
		$cotista ? $tx -= 0.5 : $tx = $tx;
	}
}

$tx = round($tx, 1);

require_once 'MipDfi.php';

$valor_total = (((1 - pow(1 + ($tx / 12 / 100), -360)) / ($tx / 12 / 100)) * ($parcela - $mip - $dfi));

if ($valor_total > 144000) {
	$valor_total = 144000;
}