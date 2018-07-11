<?php

/**
 * Este calculo é identico ao feito na planilha em Premissa/AA3
 *
 * São verificações e calculos básicos para chegar a um valor que é o subsidio, para saber esses valores
 * confira o arquivo atributos.php ou o painel do Wordpress onde estão sendo armazenados os valores.
 */

# ======================================================
$renda > $renda_para_subs_min && $renda < $teto_renda
?
$subsidio = $subsidio_minimo
:
$subsidio = ($renda * $col_w3) + $col_x3;
# ======================================================
if ($subsidio > $subsidio_maximo) {
	$subsidio = $subsidio_maximo;
}
# ======================================================
if ($subsidio < 0) {
	$subsidio = 0;
}
# ======================================================