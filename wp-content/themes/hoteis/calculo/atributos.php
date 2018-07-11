<?php

/**
 * Este arquivo contém a declaração de todas as váriaveis utilizadas nos processos de calculo
 * da API, todas as novas variaveis devem ser declaradas aqui e comentadas informando sua utilização.
 */

/*=========== VARIAVEIS ENVIADAS PELO FORMULARIO - Utilizado em "todos" os arquivos ===========*/

$idade = $_POST["idade"]; # Idade correspondente a preenchida pelo usuario no formulario.
$renda = $_POST["renda"]; # Renda correspondente a preenchida pelo usuario no formulario.

$nome_completo = $_POST['nome'];
$str_pos = strpos($nome_completo, " ");
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

/*=========== VARIAVEIS PARA CALCULO DE SUBSIDIO - Utilizados em calculo_subsidio.php ===========*/

$renda_para_subs_min = 2350; # Correspondente ao valor da planilha em Premissa/U3
$teto_renda = 2600; # Correspondente ao valor da planilha em Premissa/V3
$piso_renda = 1600; # Correspondente ao valor da planilha em Premissa/T3
$subsidio_maximo = 31665; # Correspondente ao valor da planilha em Premissa/R3
$subsidio_minimo = 10980; # Correspondente ao valor da planilha em Premissa/S3
$col_w3 = ($subsidio_maximo - $subsidio_minimo) / ($piso_renda - $renda_para_subs_min); # -27,58
$col_x3 = $subsidio_maximo - $col_w3 * $piso_renda; # 75793

$subsidio = 0; # Resultado do calculo do subsidio será armazenado nesta variavel

/*=========== VARIAVEIS PARA CALCULO DE PARCELA - Utilizados em calculo_parcela.php ===========*/

$parcela = 0; # Resultado do calculo da parcela ficara armazenado nesta váriavel.

/*=========== VARIAVEIS PARA CALCULO DE VALOR TOTAL - Utilizados em calculo_valor_total.php ===========*/

$fx = 1.5; # Correspondente a planilha em Tabela-ComissaoFaturada/O21
$tx = 0; # Correspondente a planilha em Tabela-ComissaoFaturada/T21 *Ainda sera calculado
$valor_total = 0; # Resultado do calculo do valor total será armazenada nesta variavel
$cotista = true; # Correspondente a planilha em Tabela-ComissaoFaturada/P21
$meses = 360; # Correspondente a planilha em Tabela-ComissaoFaturada/S21

/**
 * Array que corresponde aos dados na planilha de Premissa/A até Premissa/F
 */
$premissa = array(
	0 => array(
		"renda_de" => 0,
		"renda_ate" => 2600,
		"taxa_s_redutor" => 5.5,
		"taxa_c_redutor" => 5,
		"prazo_maximo" => 360,
		"taxa_adm" => 0,
	),
	1 => array(
		"renda_de" => 2600.1,
		"renda_ate" => 3000,
		"taxa_s_redutor" => 6,
		"taxa_c_redutor" => 5.5,
		"prazo_maximo" => 360,
		"taxa_adm" => 0,
	),
	2 => array(
		"renda_de" => 3000.1,
		"renda_ate" => 4000,
		"taxa_s_redutor" => 7,
		"taxa_c_redutor" => 6.5,
		"prazo_maximo" => 360,
		"taxa_adm" => 25,
	),
	3 => array(
		"renda_de" => 4000.1,
		"renda_ate" => 7000,
		"taxa_s_redutor" => 8.16,
		"taxa_c_redutor" => 7.66,
		"prazo_maximo" => 360,
		"taxa_adm" => 25,
	),
	4 => array(
		"renda_de" => 7000.1,
		"renda_ate" => 9000,
		"taxa_s_redutor" => 9.16,
		"taxa_c_redutor" => 8.66,
		"prazo_maximo" => 360,
		"taxa_adm" => 25,
	),
	5 => array(
		"renda_de" => 9000.1,
		"renda_ate" => 99999,
		"taxa_s_redutor" => 11,
		"taxa_c_redutor" => 10.5,
		"prazo_maximo" => 360,
		"taxa_adm" => 25,
	),
);

/**
 * Array que corresponde aos dados na planilha de Premissa/K até Premissa/M
 *
 * associando idade à MIP, DFI é um valor padrão.
 */
$arr_premissa_idade_mip = array(
	1 => 0.0115,
	2 => 0.0115,
	3 => 0.0115,
	4 => 0.0115,
	5 => 0.0115,
	6 => 0.0115,
	7 => 0.0115,
	8 => 0.0115,
	9 => 0.0115,
	10 => 0.0115,
	11 => 0.0115,
	12 => 0.0115,
	13 => 0.0115,
	14 => 0.0115,
	15 => 0.0115,
	16 => 0.0115,
	17 => 0.0115,
	18 => 0.0115,
	19 => 0.0115,
	20 => 0.0115,
	21 => 0.0115,
	22 => 0.0115,
	23 => 0.0115,
	24 => 0.0115,
	25 => 0.0115,
	26 => 0.0115,
	27 => 0.0115,
	28 => 0.0115,
	29 => 0.0115,
	30 => 0.0115,
	31 => 0.0121,
	32 => 0.0121,
	33 => 0.0121,
	34 => 0.0121,
	35 => 0.0121,
	36 => 0.0178,
	37 => 0.0178,
	38 => 0.0178,
	39 => 0.0178,
	40 => 0.0178,
	41 => 0.0234,
	42 => 0.0234,
	43 => 0.0234,
	44 => 0.0234,
	45 => 0.0234,
	46 => 0.0318,
	47 => 0.0318,
	48 => 0.0318,
	49 => 0.0318,
	50 => 0.0318,
	51 => 0.0448,
	52 => 0.0448,
	53 => 0.0448,
	54 => 0.0448,
	55 => 0.0448,
	56 => 0.0751,
	57 => 0.0751,
	58 => 0.0751,
	59 => 0.0751,
	60 => 0.0751,
	61 => 0.1561,
	62 => 0.1561,
	63 => 0.1561,
	64 => 0.1561,
	65 => 0.1561,
	66 => 0.2781,
	67 => 0.2781,
	68 => 0.2781,
	69 => 0.2781,
	70 => 0.2781,
	71 => 0.3549,
	72 => 0.3549,
	73 => 0.3549,
	74 => 0.3549,
	75 => 0.3549,
	76 => 0.4707,
	77 => 0.4707,
	78 => 0.4707,
	79 => 0.4707,
	80 => 0.4707,
);

$fator_dfi = 0.0000726; # Correspondente a planilha em Tabela-ComissaoFaturada/X21
$dfi = round(180000 * $fator_dfi, 2); # Correspondente a planilha em Tabela-ComissaoFaturada/W21
$fator_mip = 0; # Correspondente a planilha em Tabela-ComissaoFaturada/V21
$mip = 0;