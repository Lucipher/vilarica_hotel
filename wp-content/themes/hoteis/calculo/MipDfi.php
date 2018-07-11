<?php

/**
 * Formula (((1-(1+J)^-N))/J)*P
 *
 * Onde: J -> Taxa, N -> Nper e P -> Pmt
 */

foreach ($arr_premissa_idade_mip as $key => $value) {
	if ($key == $idade) {
		$fator_mip = $value;
		break;
	}
}

$mip = ((((1 - pow(1 + ($tx / 100 / 12), -360)) / ($tx / 100 / 12)) * ($parcela - $dfi)) * $fator_mip) / 100;