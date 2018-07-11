<?php

try {
	$conn = new PDO("mysql:host=179.188.16.36;dbname=capibavl",
		"capibavl", "Capibaadm2017", array(PDO::ATTR_PERSISTENT => true));

	$stmt = $conn->prepare(
		"INSERT INTO minha_casa_minha_vida (cidade, nome, email, telefone, idade, renda) VALUES " .
		"(:param1, :param2, :param3, :param4, :param5, :param6);");

	$stmt->bindValue(':param1', $cidade);
	$stmt->bindValue(':param2', $nome_completo);
	$stmt->bindValue(':param3', $email);
	$stmt->bindValue(':param4', $telefone);
	$stmt->bindValue(':param5', $idade);
	$stmt->bindValue(':param6', $renda);	

	$stmt->execute();

	require_once 'mailer.php';
} catch (PDOException $e) {
	echo $e->getMessage();
}