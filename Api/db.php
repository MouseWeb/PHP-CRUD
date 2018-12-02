<?php

function getConexao(){
	$conexao = new \PDO("mysql:host=localhost;dbname=curso_php","root","");

	return $conexao;
}