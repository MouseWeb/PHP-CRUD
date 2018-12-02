<?php
function getUsuarios(){
	$dados = [
		["nome"=>"Guilherme","email"=>"gui@mail.com"],
		["nome"=>"Maria","email"=>"maria@mail.com"],
		["nome"=>"Pedro","email"=>"pedro@mail.com"]
	];

	return $dados;
}

function exibeUsuario(){
	$usuarios = getUsuarios();
	$html = "";

	foreach($usuarios as $chave => $usuario){
		$nome = $usuario["nome"];
		$email = $usuario["email"];
		$html .= "<li>Nome: $nome - E-mail: $email</li>";
	}


	echo $html;
}