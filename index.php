<?php
	require_once("config.php");
	$exibe = new Usuario();
	$exibe -> loadById(3);
	echo $exibe;

	//Select simples de todos os dados
	//$sql = new sql();
	//$usuarios = $sql->select("SELECT * from tb_usuarios");
	//echo json_encode($usuarios);

?>