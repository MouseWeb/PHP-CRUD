<?php 

include('configuracao.php');
include('db.php');
include('usuarios.php');
include('produtos.php');
include('validacao.php');

function getPagina(){
	$url = $_SERVER['REQUEST_URI'];
	$url = explode("?",$url);
	$url = $url[0];

	$metodo = $_SERVER['REQUEST_METHOD'];
	
	if($metodo == "GET"){
		switch($url){
			case "/":
				$produtos = getProdutos();
				include("Paginas/home.php");
				break;
			case "/home":
				$produtos = getProdutos();
				include("Paginas/home.php");
				break;
			case "/sobre":
				include("Paginas/sobre.php");
				break;
			case "/contato":
				include("Paginas/contato.php");
				break;
			case "/busca":
				
				$produtos = buscaProdutos($_GET['busca']);
				
				include("Paginas/home.php");
				break;
			case "/produto/editar":				
				
				$produtoEdit = buscaProdutoId($_GET['id']);
				$produtos = getProdutos();
				$editando = true;
				include("Paginas/home.php");			
				
				break;
			case "/produto/deletar":				
				
				$ret = deletarProduto($_GET['id']);

				header('location:../');						
				
				break;
			default:
				$produtos = getProdutos();				
				include("Paginas/home.php");
				break;
		}

	}

	if($metodo == "POST"){
		switch($url){
			case "/produto/adicionar":

				$msg = validaProdutos($_POST);
				if($msg){
					$produtos = getProdutos();
					$produtoEdit = $_POST;
					include("Paginas/home.php");
					break;
				}

				if(!adicionarProdutos($_POST)){
					$msg = "Erro ao salvar o registro!";
					$produtos = getProdutos();
					include("Paginas/home.php");
					break;
				}

				header('location:../');
				break;
			case "/produto/salvar":
				$msg = validaProdutos($_POST);
				if($msg){
					$produtos = getProdutos();
					$produtoEdit = $_POST;
					include("Paginas/home.php");
					break;
				}
				if(!salvarProduto($_POST)){
					$msg = "Erro ao atualizar o registro!";
					$produtos = getProdutos();
					include("Paginas/home.php");
					break;
				}

				header('location:../');
				break;
			default:
				$produtos = getProdutos();				
				include("Paginas/home.php");
				break;
		}

	}
	
}