<?php
$quebra_linha      = PHP_EOL; // Quebra de linha
$para = "vendas@vlconstrutora.com.br";
$de = "vendas@vlconstrutora.com.br";
$deName = "VL Construtora";
$assunto = "Simulador de Financiamento - " . date("d/m/Y");

$emailsender       = $de; // Remetente que foi infomado no plugin
$emailremetente    = ""; //Email para qual será enviada as respostas
$emaildestinatario = $para; // Envia o email para a pessoa informada no plugin
$assuntoo           = $assunto; // Defini o assunto do email como informado no plugin

date_default_timezone_set('America/Sao_Paulo');
$message = 
"<table style='border-collapse:collapse;border-spacing:0;border-color:#ccc;'>
	<tr>
		<th style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;'><br></th>
		<th style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;'>INFORMAÇÕES</th>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Nome</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%NOME%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>E-mail</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%EMAIL%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Telefone</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%TELEFONE%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Idade</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%IDADE%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Renda</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%RENDA%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Cidade Emp.</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>%CIDADE%</td>
	</tr>
	<tr>
		<td style='font-weight:bold;vertical-align:top;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>Dados de envio</td>
		<td style='font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;'>
			Mensagem enviada em %DATA% às %HORA%, horário de Brasília.
		</td>
	</tr>
</table>";
$message = str_replace("%DATA%", date('d/m/Y', time()), $message);
$message = str_replace("%HORA%", date('H:i:s', time()), $message);
$message = str_replace("%NOME%", $nome_completo, $message);
$message = str_replace("%EMAIL%", $email, $message);
$message = str_replace("%TELEFONE%", $telefone, $message);
$message = str_replace("%IDADE%", $idade, $message);
$message = str_replace("%RENDA%", $renda, $message);
$message = str_replace("%CIDADE%", $cidade, $message);

$mensagemHTML = $message; // Pega a mensagem enviada pelo formulario

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=UTF-8".$quebra_linha;
$headers .= "From: $deName <".$emailsender.">".$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Reply-To: ".$emailremetente.$quebra_linha;

mail($emaildestinatario, $assuntoo, $mensagemHTML, $headers, "-r". $emailsender);