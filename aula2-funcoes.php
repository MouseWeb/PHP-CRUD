<?php

function getInfo($atributo){
	$dados = array("titulo" =>"Site Modelo","descricao"=>"Programado com PHP.");
	return $dados[$atributo];
}

// GET -> RETORNA UMA INFORMAÇÃO.

?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo getInfo("titulo") ?></title>
</head>
<body>

<h2><?php echo getInfo("titulo") ?></h2>
<p><?php echo getInfo("descricao") ?></p>


</body>
</html>

