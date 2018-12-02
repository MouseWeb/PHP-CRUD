<?php

function getInfo($atributo){
	$dados = array("titulo" =>"SiteModelo","descricao"=>"Programado com PHP.");
	return $dados[$atributo];
}
// GET -> RETORNA UMA INFORMAÇÃO.

function getUsuarios(){
	$dados = [
		["nome" =>"Douglas","email"=>"douglas@mouseweb.com.br"],
		["nome" =>"Leticia","email"=>"leticia@mouseweb.com.br"],
		["nome" =>"Vivia","email"=>"vivian@mouseweb.com.br"]
];

	return $dados;
}

function exibeUsuario(){
	$usuarios = getUsuarios();
	$html = "";

	foreach ($usuarios as $chave => $usuario) {
		$nome = $usuario["nome"];
		$email = $usuario["email"];
		$html .= "<li><b>Nome:</b> $nome - <b>Email:</b> $email</li>";
		
	}

	return $html;
}

function exibeUsuario2(){
	$usuarios = getUsuarios();
	$html = "";

	for($i = 0; $i < count($usuarios); $i++ ){
		$nome = $usuarios[$i]['nome'];
		$email = $usuarios[$i]['email'];
		$html .= "<li><b>Nome:</b> $nome - <b>Email:</b> $email</li>";
	}

	return $html;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo getInfo("titulo") ?></title>
</head>
<body>

<h2><?php echo getInfo("titulo") ?></h2>
<p><?php echo getInfo("descricao") ?></p>

<ul>
	<?php echo exibeUsuario2() ?>
</ul>

</body>
</html>

