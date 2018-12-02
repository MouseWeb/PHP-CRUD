<?php

$nome = "Douglas";
$sobrenome = "Coelho";
$idade = 24;
$email = " douglas@mouseweb.com.br";

$nomeCompleto = $nome." ".$sobrenome;

//echo " Nome: $nomeCompleto";

// " " -> aspas duplas aparece o valor armazenado dentro da variavel.
// ' ' -> aspas simples mostra qual variavel está sendo carregada. 
// PHP -> é uma linguagem SERVERSITE é uma linguagem que executa dentro do SERVIDOR, não aparece a codificação apenas o texto.
// HTML -> é uma linguagem CLIENTESITE, executa dentro do browser e o cliente conseguir visualiza no browse, executa no vavegador do usuario.

$msg = " Nome: $nomeCompleto - Idade: $idade";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Titulo</title>
</head>
<body>

<h2>PHP com HTML</h2>

<h4><?php echo $msg ?></h4>
<p><b>E-mail:</b><?php echo $email ?></p>


</body>
</html>

